@extends('layouts.guest')
@section('content')
    <div class="flex flex-col mx-32 my-8">
        <h1 class="font-semibold text-4xl underline">Cart</h1>
        @if ($orders->count() == 0)
            <h1 class="text-5xl text-center font-bold">No Order</h1>
        @else
            <div class="mt-9 flex flex-col w-full">
                <p class="hidden">{{ $total_price = 0 }}</p>
                @foreach ($orders as $order)
                    <p class="hidden">{{ $total_price = $total_price + $order->item->price }}</p>
                    <div class="grid grid-cols-4 gap-x-4 gap-y-8 w-full mb-4 items-center">
                        <img src="{{ asset('storage/' . $order->item->image) }}" alt="{{ $order->item->item_name }}"
                            class="w-[150px] h-[150px] rounded-full">
                        <h1 class="mt-3 font-semibold text-xl">{{ $order->item->item_name }}</h1>
                        <h2 class="mt-1 font-normal text-xl">Rp {{ $order->item->price }}</h2>
                        <a href="{{ route('user.delete-checkout', $order->order_id) }}"
                            class="text-blue-600 underline text-lg">Delete</a>
                    </div>
                @endforeach
            </div>
            <div class="flex flex-row justify-end space-x-10 items-end">
                <h1 class="text-4xl font-semibold"><span class="font-bold">Total:</span> Rp {{ $total_price }},-</h1>
                <a href="{{ route('user.checkout') }}"
                    class="bg-[#fadf54] py-2 px-20 text-xl font-semibold mt-20">Buy</a>
            </div>
        @endif
    </div>
@endsection
