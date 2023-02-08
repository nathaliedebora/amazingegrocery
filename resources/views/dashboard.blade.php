@extends('layouts.guest')
@section('content')
    <div class="flex flex-col my-14 mx-16">
        <div class="grid grid-cols-5 gap-x-16 gap-y-12 my-20">
            @foreach ($items as $item)
                <div class="flex flex-col space-y-[10px] justify-center items-center">
                    <img src="{{ asset('storage/' . $item->image) }}"
                        alt="{{ $item->item_name }}" class="w-[200px] h-[200px] rounded-full">
                    <h1 class="font-normal text-xl text-center">{{ $item->item_name }}</h1>
                    <a href="{{ route('user.item-detail', $item->item_id) }}"
                        class="font-semibold text-base text-blue-600 underline">Detail</a>
                </div>
            @endforeach
        </div>
        <div class="flex flex-row w-full justify-center">
            {{ $items->links() }}
        </div>
    </div>
@endsection
