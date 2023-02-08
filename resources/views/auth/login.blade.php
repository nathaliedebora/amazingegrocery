@extends('layouts.guest')
@section('content')
    <div class="flex flex-col my-16 mx-20 w-1/3">
        <h1 class="text-4xl underline font-semibold">Login</h1>
        <form action="{{ route('login') }}" method="POST"
            class="flex flex-col mt-10">
            @csrf
            <div class="grid grid-cols-2 gap-x-5 gap-y-6">
                <label for="Email" class="text-2xl font-semibold">Email: </label>
                <div class="flex flex-col space-y-1 items-center space-x-5">
                    <input type="email" name="email" class="w-full border border-black font-normal text-base"
                        placeholder="Email">
                </div>
                <label for="Password" class="text-2xl font-semibold">Password: </label>
                <div class="flex flex-col space-y-1 items-center space-x-5">
                    <input type="password" name="password"
                        class="w-full border border-black font-normal text-base" placeholder="password">
                </div>
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{$errors->first()}}
                </div>
            @endif
            </div>
            <div class="flex flex-row justify-center">
                <button class="bg-[#fadf54] py-2 px-20 text-3xl font-semibold mt-20">Submit</button>
            </div>
            <a href="{{ route('register') }}" class="text-base font-semibold text-center mt-3 text-blue-600 underline">Don't have an account? click here to signup</a>
        </form>
    </div>
@endsection
