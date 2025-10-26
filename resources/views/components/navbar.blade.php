<nav class="navbar bg-[#CBCBCB] fixed top-0 left-0 right-0 z-50 p-0.5 shadow-md" x-data="{ isOpen: false }">
    <div class="mx-auto px-2 sm:px-4 lg:px-6 w-full">
        <div class="flex h-16 items-center justify-between">
            <!-- LEFT SIDE: Logo -->
            <div class="flex items-center gap-2">
                <a href="/" class="flex items-center gap-2">
                    <img src="{{ asset('img/bpkp_logo.png') }}" alt="Logo" class="w-auto h-8" />
                    <span class="text-xl font-bold pl-2">MutasiApp</span>
                </a>
            </div>
            <!-- RIGHT SIDE: Actions -->
            {{-- <div class="flex items-center gap-3">
                <!-- Search Button -->
                <button class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m21 21-4.35-4.35m0 0a7.5 7.5 0 1 0-10.6-10.6 7.5 7.5 0 0 0 10.6 10.6z" />
                    </svg>
                </button>
            </div> --}}
            <!-- Notification Button -->
            {{-- <button class="btn btn-ghost btn-circle">
                <div class="indicator">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405M19 13V8a7 7 0 1 0-14 0v5l-1.405 1.595A1 1 0 0 0 5 18h14a1 1 0 0 0 .405-1.595L19 13z" />
                    </svg>
                    <span class="badge badge-xs badge-primary indicator-item"></span>
                </div>
            </button> --}}
            <!-- Profile Dropdown -->
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img alt="User" src="https://api.dicebear.com/9.x/notionists/svg?seed=Ave-chan" />
                    </div>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
