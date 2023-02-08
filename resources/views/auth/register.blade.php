@extends('layouts.guest')
@section('content')
    <div class="flex flex-col my-16 mx-20">
        <h1 class="text-4xl underline font-semibold">Register</h1>
        <form action="{{ route('register') }}" enctype="multipart/form-data" method="POST"
            class="flex flex-col mt-10">
            @csrf
            <div class="grid grid-cols-4 w-full gap-x-5 gap-y-6">
                <label for="{{ __('register.First Name') }}" class="text-2xl font-semibold">First Name:
                </label>
                <div class="flex flex-col space-y-1 items-center space-x-5">
                    <input type="text" name="first_name" class="w-full border border-black font-normal text-base"
                        placeholder="First Name">
                </div>
                <label for="{{ __('register.Last Name') }}" class="text-2xl font-semibold">Last Name:
                </label>
                <div class="flex flex-col space-y-1 items-center space-x-5">
                    <input type="text" name="last_name" class="w-full border border-black font-normal text-base"
                        placeholder="Last Name">
                </div>
                <label for="Email" class="text-2xl font-semibold">Email: </label>
                <div class="flex flex-col space-y-1 items-center space-x-5">
                    <input type="email" name="email" class="w-full border border-black font-normal text-base"
                        placeholder="Email">
                </div>
                <label for="Role" class="text-2xl font-semibold">Role: </label>
                <select name="role_id" class="w-full border-black font-normal text-base">
                    <option selected>Role</option>
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                </select>
                <label for="Gender" class="text-2xl font-semibold">Gender: </label>
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
                <label for="Display Picture" class="text-2xl font-semibold">Display Picture: </label>
                <div class="flex flex-col space-y-1 items-center space-x-5">
                    <input type="file" name="display_picture_link"
                        class="w-full border border-black font-normal text-base" placeholder="display_picture_link">
                </div>
                <label for="Password" class="text-2xl font-semibold">Password: </label>
                <div class="flex flex-col space-y-1 items-center space-x-5">
                    <input type="password" name="password"
                        class="w-full border border-black font-normal text-base" placeholder="password">
                </div>
                <label for="{{ __('register.Confirm Password') }}" class="text-2xl font-semibold">Confirm Password: </label>
                <div class="flex flex-col space-y-1 items-center space-x-5">
                    <input type="password" name="password?confirmation"
                        class="w-full border border-black font-normal text-base" placeholder="Confirm Password">
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
            <a href="{{ route('login') }}" class="text-base font-semibold text-center mt-3 text-blue-600 underline">Already have an account? click here to login</a>
        </form>
    </div>
@endsection
