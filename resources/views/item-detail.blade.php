@extends('layouts.guest')
@section('content')
    <div class="flex flex-row mx-32 my-16">
        <div class="flex flex-col">
            <h1 class="text-[40px] font-semibold underline">{{ $item->item_name }}</h1>
            <div class="flex flex-row space-x-32 mt-6">
                <img src="{{ asset('storage/' . $item->image) }}"
                    alt="{{ $item->item_name }}" class="w-[295px] h-[295px] rounded-full">
                <div class="flex flex-col w-1/3 mt-1">
                    <h2 class="text-3xl font-semibold">Price : IDR {{ $item->price }}</h2>
                    <p class="text-xl font-normal text-justify mt-4">{{ $item->desc }}</p>
                    <form action="/user/store-cart" method="POST">
                        @csrf
                        <input type="hidden" name="item_id" value="{{ $item->item_id }}">
                        <div class="flex flex-row justify-end">
                            <button
                                class="mt-24 bg-[#fadf54] text-2xl font-semibold py-1 px-10 rounded-sm">Buy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
