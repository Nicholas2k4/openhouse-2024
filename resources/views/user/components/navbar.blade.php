<!-- Main navigation container -->
<nav class="fixed top-0 flex w-full z-10 flex-nowrap items-center justify-between bg-gradient-to-r from-[#4477CE] to-[#F1C1AC] py-2 shadow-dark-mild lg:flex-wrap lg:justify-start"
    data-twe-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between md:px-3">
        <div class="ms-2 md:me-2">
            <img src="{{ asset('assets/LOGO OPENHOUSE SEMIFINAL.png') }}" alt="">
        </div>
        <div class="ms-5 flex justify-end items-center w-2/3">
            <span class="me-2"><i class="fa-solid fa-gamepad fa-2xl"></i></span>
            <div class="w-2/3 lg:pe-2">
                <div class="relative flex border-2 rounded-full text-black">
                    <input type="search"
                        class="rounded-l-full z-20 min-w-0 flex-auto bg-transparent px-3 py-1 !text-black font-normal outline-none transition duration-200 ease-in-out focus:outline-none motion-reduce:transition-none"
                        placeholder="Search" />
                    <!--Search button-->
                    <button
                        class="relative px-3 pb-[7px] pt-2 rounded-r-full text-xs font-medium uppercase leading-normal"
                        type="button" id="button-addon3" data-twe-ripple-init>
                        <!--Search icon-->
                        <span
                            class="flex items-center whitespace-nowrap rounded text-center text-base font-normal text-gray-600 [&>svg]:w-5"
                            id="basic-addon2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
