<!DOCTYPE html>
<html lang="en" class="disableScroll">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/LOGO OPENHOUSE SEMIFINAL.png') }}">
    <title> OPENHOUSE | {{ $title }}</title>

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

    <script src="https://kit.fontawesome.com/fc45e0c6e7.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-long-right.css' rel='stylesheet'>
    <style>
        html {
            scroll-behavior: smooth;
        }

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
            font-family: GeneralSansSemiBold;
            src: url('{{ asset('font/GeneralSans-Semibold.otf') }}');
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
        span,
        button {
            font-family: GeneralSansBold !important;
        }

        p,
        input,
        a {
            font-family: GeneralSans !important;
        }

        .dropdown>a:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .swal2-confirm {
            background: rgb(46, 143, 255) !important;
        }

        .swal2-deny,
        .swal2-cancel {
            background: rgb(255, 79, 79) !important;
        }

        @keyframes rotateLeftRight2 {
            0% {
                transform: rotate(-58deg);
            }

            50% {
                transform: rotate(-50deg);
            }

            100% {
                transform: rotate(-58deg);
            }
        }

        @keyframes rotateLeftRight1 {
            0% {
                transform: rotate(58deg);
            }

            50% {
                transform: rotate(50deg);
            }

            100% {
                transform: rotate(58deg);
            }
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Apply the animation to the images */
        .rotate-animation-2 {
            animation: rotateLeftRight2 3s infinite alternate;
        }

        .rotate-animation-1 {
            animation: rotateLeftRight1 3s infinite alternate;
        }

        .loader {
            background-color: hsla(165, 49%, 41%, 1);
            background-image:
                radial-gradient(at 80% 0%, hsla(308, 73%, 44%, 1) 0px, transparent 50%),
                radial-gradient(at 80% 50%, hsla(265, 57%, 52%, 1) 0px, transparent 50%),
                radial-gradient(at 45% 0%, hsla(45, 97%, 53%, 1) 0px, transparent 50%),
                radial-gradient(at 0% 50%, hsla(343, 99%, 56%, 1) 0px, transparent 50%),
                radial-gradient(at 0% 100%, hsla(165, 49%, 41%, 1) 0px, transparent 50%),
                radial-gradient(at 87% 97%, hsla(237, 54%, 26%, 1) 0px, transparent 50%),
                radial-gradient(at 0% 0%, hsla(343, 99%, 46%, 1) 0px, transparent 50%);
            opacity: 1;
            transition: 1s cubic-bezier(.12, .44, 1, -0.39);
            overflow: hidden !important;
            left: 0;
        }

        #loader1 {
            clip-path: inset(0 0 50% 0);
        }

        #loader2 {
            clip-path: inset(50% 0 0 0);
        }


        .loader path {
            fill: transparent;
            stroke-width: 10;
            stroke: white;
            stroke-dasharray: 6000;
            stroke-dashoffset: 6000;
            animation: gacor 2.7s linear infinite;
        }

        @keyframes gacor {
            0% {
                stroke-dashoffset: 0;
                fill: black;
            }

            30% {
                fill: transparent;
            }

            40% {
                stroke-dashoffset: 6000;
                fill: transparent;
            }

            80% {
                stroke-dashoffset: 12000;
                fill: transparent;
            }

            100% {
                stroke-dashoffset: 12000;
                fill: black;
            }
        }

        .full-content {
            opacity: 0;
        }

        .disableScroll {
            overflow: hidden;
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

    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">

    @yield('head')
</head>

<body>

    @include('user.components.loader')
    <div class="full-content">
        @include('user.components.navbar')
        @yield('content')
        @include('user.components.footer')
    </div>

    @include('user.components.loader-logic')

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

        var lastScrollTop;
        navbar = document.getElementById('navbar');
        window.addEventListener('scroll', function() {
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > lastScrollTop) {
                navbar.style.top = '-80px';
                navbar.classList.add('hide-nav');
            } else {
                navbar.style.top = '0';
                navbar.classList.remove('hide-nav');
            }

            lastScrollTop = scrollTop;
        });

        // Search
        const lists = @json($ukms);
        console.log(lists);
        
        
        // const lists = [
        //     'Chinese Art',
        //     'ASFS',
        //     'Dance',
        //     'Dekorasi',
        //     'Ilustrasi',
        //     'Martografi',
        //     'Modeling',
        //     'Teater',
        //     'Vocal Group',
        //     'English Debate Society (EDS)',
        //     'Pengembangan Diri',
        //     'Esport',
        //     'Badminton',
        //     'Basket',
        //     'Catur',
        //     'Futsal',
        //     'Renang',
        //     'Taekwondo',
        //     'Tenis Lapangan',
        //     'Tenis Meja',
        //     'Voli',
        //     'Matrapenza',
        //     'EMR',
        //     'Menwa',
        //     'Matrapala',
        //     'Paduan Suara',
        //     'Orkestra',
        //     'Badan Eksekutif Mahasiswa (BEM)',
        //     'Majelis Perwakilan Mahasiswa (MPM)',
        //     'Badan Perwakilan Mahasiswa Fakultas (BPMF)',
        //     'Pers Mahasiswa (PERSMA)',
        //     'Pelayanan Mahasiswa (PELMA)',
        //     'Tim Petra Sinergi (TPS)',
        // ];

        $(document).ready(function() {

            var i = 0;
            for (var list in lists) {
                if (i <= 5) {
                    $('.dropdown').append(
                        '<a class="py-1 px-3 rounded-xl" href="' + lists[list] + '" data-te-ripple-init data-te-ripple-color="light">' +
                        list + '</a> <hr>');
                }
                i++
            }
        });

        document.getElementById('search').addEventListener('blur', function() {
            setTimeout(function() {
                document.querySelector(".dropdown").classList.remove('flex');
                document.querySelector(".dropdown").classList.add('hidden');
            }, 100);
        });

        function show() {
            document.querySelector(".dropdown").classList.remove('hidden');
            document.querySelector(".dropdown").classList.add('flex');
        }

        function search() {
            // Declare variables
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('search');
            filter = input.value.toUpperCase();
            ul = document.querySelector(".dropdown");
            li = Object.keys(lists);

            $('.dropdown').empty();

            if (filter == '' || filter == null) {
                var i = 1;
                for (var list in lists) {
                    if (i <= 5) {
                        $('.dropdown').append(
                            '<a class="py-1" href="' + lists[list] + '" data-te-ripple-init data-te-ripple-color="light">' + list +
                            '</a> <hr>');
                    }
                    i++
                }
            } else {
                for (i = 0; i < li.length; i++) {
                    txtValue = li[i];
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        $('.dropdown').append('<a class="py-1" href="" data-te-ripple-init data-te-ripple-color="light">' +
                            txtValue + '</a> <hr>');
                    }
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

</body>

</html>
