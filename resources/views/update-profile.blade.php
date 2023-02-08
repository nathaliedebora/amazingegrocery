@extends('layouts.guest')
@section('content')
    <div class="flex flex-row space-x-10 items-center my-12 mx-32">
        <img src="{{ asset('storage/' . $user->display_picture_link) }}" alt="{{ $user->first_name . $user->last_name }}"
            class="rounded-full w-[300px]">
        <form action="/user/profile" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-4 w-full gap-y-4 gap-x-7 items-center">

                <label for="First Name" class="font-semibold text-xl text-black">First Name: </label>
                <div class="flex flex-col space-y-1">
                    <input type="text" name="first_name" class="w-full border border-black"
                        value="{{ $user->first_name }}">
                    @error('first_name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <label for="Last Name" class="font-semibold text-xl text-black">Last Name: </label>
                <div class="flex flex-col space-y-1">
                    <input type="text" name="last_name" class="w-full border border-black"
                        value="{{ $user->last_name }}">
                    @error('last_name')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <label for="Email" class="font-semibold text-xl text-black">Email: </label>
                <div class="flex flex-col space-y-1">
                    <input type="text" name="email" class="w-full border border-black" value="{{ $user->email }}">
                    @error('email')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <label for="Role" class="font-semibold text-xl text-black">Role: </label>
                <div class="flex flex-col space-y-1">
                    <input type="text" name="role_id" class="w-full border border-black" disabled
                        value="{{ $user->role->role_name }}">
                </div>
                <label for="Gender" class="font-semibold text-xl text-black">Gender: </label>
                <div class="flex flex-row justify-between w-full items-center text-xl font-semibold">
                    <div class="flex flex-row space-x-2 items-center">
                        <input type="radio" name="gender_id" class="mr-2"
                            value="1">Male
                    </div>
                    <div class="flex flex-row space-x-2 items-center">
                        <input type="radio" name="gender_id" class="mr-2"
                            value="2">Female
                    </div>
                </div>
                <label for="Display Picture" class="font-semibold text-xl text-black">Display Picture: </label>
                <div class="flex flex-col space-y-1">
                    <input type="file" name="display_picture_link" class="w-full border border-black">
                    @error('display_picture_link')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <label for="Password" class="font-semibold text-xl text-black">Password: </label>
                <div class="flex flex-col space-y-1">
                    <input type="password" name="password" class="w-full border border-black" disabled
                        value="{{ $user->password }}">
                </div>
            </div>
            <div class="flex flex-row justify-center">
                <button
                class="bg-[#fadf54] py-2 px-10 text-3xl font-semibold mt-20">Save</button>
            </div>
        </form>
    </div>
@endsection
