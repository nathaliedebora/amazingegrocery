@extends('layouts.guest')
@section('content')
    <div class="flex flex-col my-12 mx-32">
        <h1 class="font-semibold text-xl text-black underline">{{ $user->first_name . ' ' . $user->last_name }}</h1>
        <form action="/admin/update-profile" method="POST" class="mt-10  w-1/3">
            @csrf
            <input type="hidden" name="account_id" value={{ $user->account_id }}>
            <div class="grid grid-cols-2 gap-x-4 items-center">
                <label for="Role" class="font-semibold text-xl text-black">Role: </label>
                <select name="role_id" class="w-full border border-black">
                    <option value="{{ $user->role->role_id }}" selected>{{ $user->role->role_name }}</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->role_id }}">{{ $role->role_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex flex-row justify-center">
                <button
                    class="bg-[#fadf54] py-2 px-10 text-3xl font-semibold mt-10">{{ __('home.Save') }}</button>
            </div>
        </form>
    </div>
@endsection
