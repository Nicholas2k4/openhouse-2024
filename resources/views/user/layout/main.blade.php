<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    {{-- CDN for JQUERY --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- CDN for tailwind --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- CDN for Tailwind Element --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    {{-- Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    {{-- CDN for SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        nav img {
            height: 50px;
        }

        nav input {
            border-width: 0 !important;
        }

        input:focus {
            outline: none !important;
        }

        ::-webkit-scrollbar {
            width: 9.5px;
        }

        ::-webkit-scrollbar-thumb {
            background: #DF826C;
            border-radius: 30px;
        }

        ::-webkit-scrollbar-track {
            background: #1A4D2E;
        }

        @font-face {
            font-family: GeneralSans;
            src: url('{{ asset('font/GeneralSans-Regular.otf') }}');
        }

        @font-face {
            font-family: GeneralSansBold;
            src: url('{{ asset('font/GeneralSans-Bold.otf') }}');
        }

        @font-face {
            font-family: GeneralSansItalic;
            src: url('{{ asset('font/GeneralSans-Italic.otf') }}');
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        span {
            font-family: GeneralSansBold !important;
        }

        p,
        input,
        a {
            font-family: GeneralSans !important;
        }

        /* a {
            font-family: GeneralSansItalic !important;
        } */

        /* .login-button {
            font-family: GeneralSansBold !important;
        }

        .login-button:hover {
            text-shadow: 0 0 7px rgba(255, 255, 255, 1), 0 0 15px rgba(255, 255, 255, 1);
            color: white;
        } */
    </style>
    @yield('head')
</head>

<body>
    @include('user.components.navbar')
    @yield('content')
    @include('user.components.footer')
</body>

{{-- AOS --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

{{-- TW Element --}}
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/js/tw-elements.umd.min.js"></script>

{{-- Swiper --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

{{-- GSAP --}}
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

<script>
    twe.config = {
        darkMode: "class",
        corePlugins: {
            preflight: false,
        },
    };

    // Navbar scroll hidden
    var lastScrollTop; // This Varibale will store the top position

    navbar = document.getElementById('navbar'); // Get The NavBar

    window.addEventListener('scroll', function() {
        //on every scroll this funtion will be called

        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        //This line will get the location on scroll

        if (scrollTop > lastScrollTop) { //if it will be greater than the previous
            navbar.style.top = '-80px';
            //set the value to the negetive of height of navbar 
        } else {
            navbar.style.top = '0';
        }

        lastScrollTop = scrollTop; //New Position Stored
    });

    // Search
    const ukm = ['babi', 'ayam', 'ikan', 'apel', 'botol', 'monitor'];

    function show() {
        document.querySelector(".dropdown").classList.remove('hidden');
        document.querySelector(".dropdown").classList.add('flex');
    }

    document.getElementById('search').addEventListener('blur', function() {
        setTimeout(function() {
            document.querySelector(".dropdown").classList.remove('flex');
            document.querySelector(".dropdown").classList.add('hidden');
        }, 100);
    });

    function search() {
        // Declare variables
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById('search');
        filter = input.value.toUpperCase();
        ul = document.querySelector(".dropdown");
        li = ul.getElementsByTagName('a');

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
            txtValue = li[i].textContent || li[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }

    // Sidebar
    document.addEventListener("DOMContentLoaded", function() {
        const hamburger = document.getElementById("hamburger");
        const sidebar = document.getElementById("sidebar");

        hamburger.addEventListener("click", function() {
            sidebar.classList.toggle("active");
            hamburger.classList.toggle("active");
        });
    });
</script>


@yield('script')

</html>
