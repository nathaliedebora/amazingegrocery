<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', '=', 'Unpaid')->where('account_id', '=', Auth::user()->account_id)->get();

        return view('cart', compact('orders'));
    }

    public function store(Request $request)
    {
        $item = Item::find($request->item_id);
        
        Order::create([
            'account_id' => Auth::user()->account_id,
            'item_id' => $item->item_id,
            'price' => $item->price,
        ]);

        return redirect('user/dashboard');
    }

    public function checkout()
    {
        $orders = Order::where('status', '=', 'Unpaid')->where('account_id', '=', Auth::user()->account_id)->get();
        foreach ($orders as $order)
        {
            $item = Item::find($order->item_id);
            $item->isSold = true;
            $item->save();
            $order->status = 'Paid';
            $order->save();
        }

        return view('checkout-success');
    }

    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();

        return redirect('user/cart');
    }
}
