<!-- Main navigation container -->
<nav class="sticky top-0 flex w-full z-10 flex-nowrap items-center justify-between bg-gradient-to-r from-[#4477CE] to-[#F1C1AC] py-2 shadow-dark-mild lg:flex-wrap lg:justify-start duration-500"
    data-twe-navbar-ref id="navbar">
    <div class="flex w-full flex-wrap items-center justify-between md:px-3">

        {{-- Hamburger button --}}
        <div class="hamburger flex items-center" id="hamburger">
            <svg class="ham ham6" viewBox="0 0 100 100" width="49" onclick="this.classList.toggle('active')">
                <path class="line top"
                    d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272" />
                <path class="line middle"
                    d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272" />
                <path class="line bottom"
                    d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272" />
            </svg>
        </div>

        {{-- Sidebar --}}
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <p class="logo-sidebar"><img src="{{ asset('assets/LOGO OPENHOUSE SEMIFINAL.png') }}" alt="">
                </p>
            </div>
            <hr />
            <div class="links">
                <ul>
                    <a href="{{ route('user.login') }}">
                        <li data-te-ripple-init data-te-ripple-color='light'>
                            @if (session()->has('nrp'))
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <span>Logout</span>
                            @else
                                <i class="fa-solid fa-right-to-bracket"></i>
                                <span>Login</span>
                            @endif
                        </li>
                    </a>
                    <a href="#">
                        <li data-te-ripple-init data-te-ripple-color='light'>
                            <i class="fa-solid fa-house"></i>
                            <span>Dashboard</span>
                        </li>
                    </a>
                    <a href="#timeline">
                        <li data-te-ripple-init data-te-ripple-color='light'>
                            <i class="fa-solid fa-hourglass ms-1"></i>
                            <span>Timeline</span>
                        </li>
                    </a>
                    <a href="#game-ukm">
                        <li data-te-ripple-init data-te-ripple-color='light'>
                            <i class="fa-solid fa-gamepad"></i>
                            <span>Game & UKM</span>
                        </li>
                    </a>
                    <a href="#faq">
                        <li data-te-ripple-init data-te-ripple-color='light'>
                            <i class="fa-solid fa-circle-question ms-1"></i>
                            <span>FAQ</span>
                        </li>
                    </a>
                </ul>
            </div>
        </div>

        {{-- Logo --}}
        <div class="">
            <img src="{{ asset('assets/Logo FLAT.png') }}" alt="">
        </div>

        {{-- Search --}}
        <div class="flex justify-end items-center md:space-x-3 space-x-2 md:me-3 me-1">
            {{-- <span class=""><i class="fa-solid fa-gamepad fa-2xl"></i></span> --}}
            <div class="lg:pe-2">
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
        </div>
    </div>
</nav>
