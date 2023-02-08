<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $items = Item::where('isSold', '==', 0)->paginate(10);

        return view('dashboard', compact('items'));
    }

    public function itemDetail($id)
    {
        $item = Item::find($id);

        return view('item-detail', compact('item'));
    }
}
