<!-- Main navigation container -->
<nav class="sticky top-0 flex w-full z-10 flex-nowrap items-center justify-between bg-gradient-to-r from-[#4477CE] to-[#F1C1AC] py-2 shadow-dark-mild lg:flex-wrap lg:justify-start duration-500"
    data-twe-navbar-ref id="navbar">
    <div class="flex w-full flex-wrap items-center justify-between md:px-3">
        <div class="ms-2 md:me-2">
            <img src="{{ asset('assets/LOGO OPENHOUSE SEMIFINAL.png') }}" alt="">
        </div>
        <div class="ms-5 flex justify-end items-center w-2/3 md:space-x-3 space-x-2 md:me-3 me-1">
            {{-- <span class=""><i class="fa-solid fa-gamepad fa-2xl"></i></span> --}}
            <div class="md:w-1/3 w-2/3 lg:pe-2">
                <div
                    class="relative flex flex-col focus-within:ease-in-out duration-300 focus-within:shadow-white focus-within:shadow-2xl">
                    <input type="search" id="search" autocomplete="off" onclick="show()" onkeyup="search()"
                        class="!border-2 !rounded-full !border-white z-20 min-w-0 bg-transparent px-3 py-1 !text-black placeholder-[#074173] font-normal transition duration-200 focus:outline-none focus:ring-0"
                        placeholder="Search UKM or LK" />
                    <div class="dropdown bg-white p-3 rounded-xl absolute top-9 hidden flex-col w-full">
                        <a href="">babi</a>
                        <a href="">ayam</a>
                        <a href="">kambing</a>
                    </div>
                </div>
            </div>

            <a href="{{ route('user.login') }}"
                class="login-button rounded-full px-4 py-1 border-white font-bold text-lg hover:ease-in-out duration-300"
                data-te-ripple-init data-te-ripple-color='light'>
                @if (session()->has('nrp'))
                    <i class="fa-solid fa-right-from-bracket"></i>
                @else
                    <i class="fa-solid fa-right-to-bracket"></i>
                @endif
            </a>
        </div>
    </div>
</nav>
