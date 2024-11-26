<div class="min-h-[90px] w-full flex items-center justify-between border-b-2 border-gray-300 mb-10 dark:border-gray-600">
    <div class="grow dark:text-gray-300">
        <div class="font-ibm text-2xl capitalize max-sm:hidden">{{ $caption_text }}</div>
        <div>
            <i class="bx bx-menu text-4xl cursor-pointer hidden max-sm:block" id="btn-menu-mobile"></i>
        </div>
    </div>
    <div class="grow flex items-center justify-end gap-4">
        <div>
            <button class="w-[48px] h-[48px] rounded-full shadow-md bg-gray-50 dark:bg-gray-600" id="btn-darkmode">
                <i class='bx bxs-moon text-2xl transition-all delay-700 duration-700 ease-in dark:text-gray-300'></i>
            </button>
        </div>
        <div>
            <button class="w-[48px] h-[48px] rounded-full shadow-md text-sm font-medium bg-gray-50 dark:bg-gray-600 dark:text-gray-300" id="dropdownBilingual" data-dropdown-toggle="dropdown">
                @if (app()->getLocale() == 'en') EN @else ID @endif
            </button>
            <div id="dropdown" class="z-10 hidden bg-primarys divide-y divide-gray-100 rounded-lg shadow w-14 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-300" aria-labelledby="dropdownBilingual">
                    <li>
                        <a href="{{ route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['language' => 'en'])) }}" class="block px-4 py-2 hover:bg-secondarys dark:hover:bg-gray-600">EN</a>
                    </li>
                    <li>
                        <a href="{{ route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['language' => 'id'])) }}" class="block px-4 py-2 hover:bg-secondarys dark:hover:bg-gray-600">ID</a>
                    </li>
                </ul>
            </div>
        </div>
        <div>
            <div class="flex gap-2.5 items-center cursor-pointer" id="dropdownProfile" data-dropdown-toggle="mega-menu-dropdown">
                <div>
                    <img src="{{ asset('image/profil.jpg') }}" alt="image" class="object-cover w-[48px] h-[48px] rounded-full shadow-md">
                </div>
                <div class="leading-[1.2] text-sm dark:text-gray-300">
                    <div class="font-ibm capitalize">{{ auth()->user()->name }}</div>
                    <div class="text-xs">Admin</div>
                </div>
                <div>
                    <i class='bx bx-chevron-down text-2xl dark:text-gray-300'></i>
                </div>
            </div>
            <div id="mega-menu-dropdown" class="absolute z-10 hidden w-auto px-4 py-2">
                <div class="bg-primarys rounded-md shadow-md w-40 dark:bg-gray-700 dark:text-gray-300">
                    <ul class="text-sm space-y-2 divide-y p-2 pt-4 dark:divide-gray-300">
                        <li class="p-2 rounded-md bg-secondarys hover:bg-gray-50 transition-all duration-150 ease-in dark:hover:bg-gray-600">
                            <a href="{{ route('profile', app()->getLocale()) }}" class="flex gap-2 items-center font-medium">Profile</a>
                        </li>
                        <li class="p-2 pt-3">
                            <form method="POST" action="{{ route('logout', app()->getLocale()) }}">
                                @csrf
                                <button type="submit" class="buttons font-ibm p-2 w-full bg-orange-500 text-white hover:bg-orange-600 rounded-md">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>