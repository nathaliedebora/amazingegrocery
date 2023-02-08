<nav class="bg-[#afe9d0] rounded">
    <div class="container flex flex-wrap items-center justify-between mx-auto pb-4">
        <div class="flex flex-row space-x-20 items-center justify-end">
            <a href="/" class="items-center">
                <span class="self-center font-bold whitespace-nowrap text-5xl">Amazing E-Grocery</span>
            </a>
        </div>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:flex md:w-auto md:flex-row md:space-x-5" id="navbar-default">
            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="bg-[#fadf54] font-bold px-2">Logout</button>
                </form>
            @else
                <a href="{{ route('register') }}" class="bg-[#fadf54] font-bold px-2">Register</a>
                <a href="{{ route('login') }}" class="bg-[#fadf54] font-bold px-2">Login</a>
            @endauth
        </div>
    </div>
    @auth
        <div class="flex flex-row justify-center mx-auto space-x-10 bg-[#fadf54] py-2">
            <a href="{{ route('user.dashboard') }}"
                class="text-xl cursor-pointer font-bold">Home</a>
            <a href="{{ route('user.cart') }}"
                class="text-xl cursor-pointer font-bold">Cart</a>
            <a href="{{ route('user.profile') }}"
                class="text-xl cursor-pointer font-bold">Profile</a>
            @if (Auth::user()->account_id == 1)
                <a href="{{ route('admin.account-maintenance') }}"
                    class="text-xl cursor-pointer font-bold">Account Maintenance</a>
            @endif
        </div>
    @endauth
</nav>
