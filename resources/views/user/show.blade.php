<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/fc45e0c6e7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        body,
        html {
            overflow-x: hidden;
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

        .reveal {
            position: relative;
            opacity: 0;
            transition: all 1s ease;
        }

        .from-left {
            transform: translateX(-100vw);
        }

        .from-right {
            transform: translateX(100vw);
        }

        .reveal.active {
            opacity: 1;
            transform: translateX(0px);

        }

        .reveal.active {
            opacity: 1;
            transform: translateX(0px);

        }

        .bg-section {
            background: linear-gradient(-45deg, #00225c, #4476CB, #57C7D4);
            background-size: 400% 400%;
            animation: gradient 7s ease infinite;
            height: 100vh;
        }

        .bg-modal {
            background: linear-gradient(-45deg, #4476CB, #57C7D4);
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

        .slider-wrapper {
            overflow: hidden;
            max-width: 1200px;
            margin: 0 70px 55px;
        }

        .slider-wrapper .swiper-pagination-bullet {
            background: #ffffff;
            width: 10px;
            height: 10px;
        }

        @media (max-width: 768px) {
            .slider-wrapper {
                margin: 0 10px 40px;
            }

            /* .slider-wrapper .swiper-slide-button {
                display: none;
            } */
        }


        .menu-center {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
            margin-top: 64px;
            padding-top: 10px;
        }

        .video-container {
            position: relative;
            padding-top: 56.25%;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .glow-text {
            text-shadow:
                0 0 5px #57C7D4;

            animation: glow 5s infinite;
        }

        .hoverable {
            transition: letter-spacing 0.3s ease-in-out;

        }

        .hoverable:hover {
            letter-spacing: 1px;
        }


        @keyframes glow {
            50% {
                text-shadow:
                    0 0 5px #57C7D4,
                    0 0 10px #57C7D4,
            }

            100% {
                text-shadow:
                    0 0 5px #57C7D4,
                    0 0 10px #57C7D4,
                    0 0 20px #57C7D4,
            }
        }

        .animation-blob {
            animation: blob 3s infinite;
        }

        @keyframes blob {
            0% {
                transform: translate(0px, 0px) scale(1);
            }

            50% {
                transform: translate(50px, -20px) scale(0.5);
            }

            100% {
                transform: translate(0px, 0px) scale(1);
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->

    <!--BG Gambar-->
    {{-- <img src = "{{ URL('img/EO_Edit.jpg') }}" class="bg-cover bg-center fixed h-screen w-full">
    <div class="fixed w-full h-screen bg-[#4a0d1d] bg-opacity-30"></div> --}}



    <!--BG Solid-->
    {{-- <div class="fixed w-full h-screen bg-[#F6F0D2] "></div> --}}

    <!--BG Gradient-->
    <div class = "z-[0] bg-section fixed w-full h-screen"></div>

    <div
        class="fixed bottom-[-800px] right-[-800px] w-[1200px] h-[1200px] rounded-full blur-[500px] bg-[#EE507C] animation-blob">
    </div>

    <nav class=" h-[64px] fixed z-[100] w-full backdrop-blur-xl bg-white/15">
        <div class="px-[30px] md:px-[50px] xl:px-[100px] mx-auto flex justify-between items-center h-[100%]">
            @if (!in_array($ukm->name, ['LK BEM', 'LK TPS', 'LK MPM', 'LK BPMF', 'LK PERSMA', 'LK PELMA']))
                <a href = "{{ route('user.ukm') }}" class="text-2xl text-white">
                    <i class="cursor-pointer fa-solid fa-chevron-left"></i>
                </a>
            @else
                <a href = "{{ route('user.lk') }}" class="text-2xl text-white">
                    <i class="cursor-pointer fa-solid fa-chevron-left"></i>
                </a>
            @endif

            <div class="hidden sm:flex justify-between gap-10">
                <a id = "nav-button-vid" class="hoverable glow-text font-bold text-white text-[20px]"
                    href="#video">Video</a>
                <a id = "nav-button-about" class="hoverable glow-text font-bold text-white text-[20px]"
                    href="#about">About</a>
                @if (!in_array($ukm->name, ['LK BEM', 'LK TPS', 'LK MPM', 'LK BPMF', 'LK PERSMA', 'LK PELMA']))
                    <a id = "nav-button-register" class="hoverable glow-text font-bold text-white text-[20px]"
                        href="#register">Register</a>
                @endif
            </div>

            <div id="bar" class="text-white text-[25px] sm:hidden p-5 hover:bg-black-80 cursor-pointer">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

    </nav>

    <!-- Menu on Small Screen -->
    <div id="menu"
        class="z-[100] hidden h-screen w-full bg-section backdrop-blur-xl bg-white/15 flex flex-col items-center justify-center gap-5 pb-[64px]">
        <a class="hoverable glow-text text-white text-[20px] menu-button-sm" href="#video">Video</a>
        <a class="hoverable glow-text text-white text-[20px] menu-button-sm" href="#about">About</a>
        @if (!in_array($ukm->name, ['LK BEM', 'LK TPS', 'LK MPM', 'LK BPMF', 'LK PERSMA', 'LK PELMA']))
            <a class="hoverable glow-text text-white text-[20px] menu-button-sm" href="#register">Register</a>
        @endif
    </div>



    <!-- Title Section -->
    <div class="z-5 min-h-screen flex items-center">
        <div
            class="pb-[40px] pt-[164px] md:py-[100px] px-[30px] md:px-[50px] xl:px-[100px] mx-auto h-full flex flex-col flex-wrap justify-center items-center">
            <div class=" reveal from-left active z-[10] mt-10 lg:mt-0 text-center flex flex-col w-full">
                <h1
                    class="glow-text font-bold text-[48px] md:text-[80px] lg:text-[100px] leading-none text-white leading-tight">
                    {{ $ukm->name }}
                </h1>
            </div>
            <div class="reveal from-right active">
                <div class = "group mt-5 button-animate">
                    <a class = "text-[16px] md:text-[20px] lg:text-[24px] backdrop-blur-sm bg-white/10 border-[1px] border-[#79FFEF] rounded-full py-3 px-7 space-x-3  group-hover:bg-[#79FFEF] group-hover:shadow-no-offset"
                        id = "explore-button" href = "#card-section">
                        <span class = "font-bold text-white group-hover:text-[#30518A]">Explore</span>
                        <i class="text-white fa-solid fa-chevron-down group-hover:text-[#30518A]"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!--Video Section-->
    @if ($videoUrl !== '')
        <div class="z-5 min-h-screen" id = "video">
            <div
                class="pb-[40px] pt-[164px] md:py-[100px] px-[30px] md:px-[50px] xl:px-[100px] mx-auto h-full flex flex-col flex-wrap justify-center items-center">
                <div class="reveal from-right active h-[100%] w-[100%] lg:h-[80%] lg:w-[80%]">
                    <div class="video-container aspect-w-16 aspect-h-9">
                        <iframe class="w-full h-full" src="{{ $videoUrl }}" frameborder="0"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- About Section -->
    <div class="z-[10] min-h-screen">
        <div id = "about"
            class="gap-[10px] md:gap-[20px] py-[50px] md:py-[100px] px-[30px] md:px-[50px] xl:px-[100px] mx-auto h-full flex flex-col-reverse justify-center items-center md:flex-row md:justify-between">
            <!-- Left Side -->
            @if ($imageUrls !== [])
                <div class="reveal from-left z-[10] flex flex-col w-full lg:w-2/4 mt-10 swiper">
                    <div class="slider-wrapper">
                        <div class="card-list swiper-wrapper flex items-center ">
                            @foreach ($imageUrls as $imageUrl)
                                @if (stripos($imageUrl, 'mp4'))
                                @else
                                    <div class="card-item swiper-slide h-[300px]">

                                        {{-- <iframe class = "video-slide mx-auto w-full h-full object-contain"
                            src = "{{URL($imageUrl)}}?autoplay=0"> --}}
                                        {{-- </iframe> --}}
                                        <img class = "mx-auto w-full h-full object-contain"
                                            src = "{{ URL($imageUrl) }}">

                                    </div>
                                @endif
                            @endforeach
                        </div>

                        <div class="swiper-pagination"></div>
                        <div class="pb-[100px] text-white swiper-slide-button swiper-button-prev "></div>
                        <div class="pb-[100px] text-white swiper-slide-button swiper-button-next"></div>
                    </div>
                </div>
            @else
                <div class="reveal from-left z-[10] justify-center flex w-full lg:w-2/4 mt-10">
                    <img class = "w-[300px] md:w-[450px] h-auto" src = '{{ URL('asset/CORALIS POSE 2 FEED.png') }}' />
                </div>
            @endif
            <!-- Right Side -->
            <div class="reveal from-right mt-[20px] sm:mt-[0px] z-[10] flex flex-col w-full lg:w-2/4">
                <div id="desc"
                    class="backdrop-filter backdrop-blur-sm bg-opacity-20 border border-gray-100 bg-gray-600 rounded p-5 flex flex-col justify-between">
                    <div>
                        <div class="text-[16px] text-white text-center">
                            {!! \Str::limit($ukm->description, 650) !!}
                        </div>
                    </div>
                    @if (strlen($ukm->description) > 650)
                        <!--Read More-->
                        <button
                            class="mt-10 relative w-full text-[16px] text-white flex justify-end items-center gap-1 transition duration-500"
                            onclick="toggleModal()">
                            <div class = "mr-[20px]">
                                Read more
                            </div>
                            <i class="absolute top-[4px] fa-solid fa-arrow-right-long"></i>
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div id = "overlay" class = "z-[700] w-full h-[100vh] fixed top-0 left-0 bg-black opacity-60 hidden"></div>
    <!--Pop Up-->
    <div class = "text-[20px] bg-modal hidden p-10 overflow-y-scroll z-[1000] text-white fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 max-h-[500px] w-[300px] md:max-h-[500px] md:w-[600px] lg:max-h-[500px] lg:w-[800px]"
        id = "modal">
        <div class = "absolute w-full text-right top-[20px] right-[20px] ">
            <button type="button" class="px-4 rounded " onclick="toggleModal()"><i
                    class=" text-white fas fa-times"></i></button>
        </div>
        {!! $ukm->description !!}
    </div>


    @if (!in_array($ukm->name, ['LK BEM', 'LK TPS', 'LK MPM', 'LK BPMF', 'LK PERSMA', 'LK PELMA']))
        <!-- Register Section -->

        <div class="z-[10] min-h-screen" id = "register">
            <div
                class="py-[50px] md:py-[100px] px-[30px] md:px-[50px] xl:px-[100px] gap-[20px] mx-auto h-full flex flex-col justify-center items-center md:flex md:flex-row md:justify-between md:items-center">
                <!-- Right Side (Poster Optional) -->
                <div class="reveal from-left z-[10] flex flex-col w-full sm:w-2/5 items-center mt-5">
                    @if ($posterUrl !== '')
                        <img class = "w-[300px] md:w-[300px] h-auto" src = '{{ URL($posterUrl) }}' />
                    @else
                        <img class = "w-[400px] md:w-[400px] h-auto"
                            src = '{{ URL('asset/VERDARA POSE 2 W_ TRAIL.png') }}' />
                    @endif
                </div>

                <!-- Left Side (Slot, Regist fee, Buttons) -->
                <div class="reveal from-right z-[10] w-full sm:w-3/5">
                    <div class="flex flex-col items-center">
                        <!--Slot & Regist fee-->
                        <div class="flex flex-row justify-center">
                            <div id = "show-slot"
                                class = "flex flex-col justify-center pl-[20px] pr-[20px] border-r-[1px]">
                                <div class = "text-white text-[56px] md:text-[90px] lg:text-[120px] font-bold leading-tight">
                                    {{ $ukm->current_slot }}</div>
                                <div
                                    class = "text-white text-[26px] lg:text-[36px] m-[-2px] pb-[4px] w-full text-center">
                                    Slot left</div>
                            </div>

                            <div id = "show-regist-fee" class = "flex flex-col justify-center pr-[20px] pl-[20px]">
                                <div class = "text-white text-[56px] md:text-[90px] lg:text-[120px] font-bold leading-tight">
                                    @if ($ukm->regist_fee == 0)
                                        0K
                                    @else
                                        {{ substr($ukm->regist_fee, 0, -3) }}K
                                    @endif
                                </div>
                                <div
                                    class = "text-white text-[26px] lg:text-[36px] m-[-2px] pb-[4px] w-full text-center">
                                    Regist fee</div>
                            </div>
                        </div>
                        <!--Button Book-->
                        <a name = "ukm" value={{ $ukm->slug }}
                            href="{{ route('pendaftaran.redirect', ['id' => $ukm->slug]) }}"
                            class="mt-10 rounded-full hoverable glow-text w-full border-[#57C7D4] hover:bg-[#57C7D4]/50 backdrop-blur-sm bg-[#57C7D4]/15 border-[1px] text-white p-[15px] text-[24px] md:text-[28px] font-bold text-center">
                            Book Your Slot!
                        </a>
                    </div>
                </div>
            </div>
        </div>

    @endif


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.getElementById("explore-button").addEventListener('click', function(e) {
            e.preventDefault();
            let videoUrl = <?php echo json_encode($videoUrl)?>;

            if (videoUrl !=="") {
                document.getElementById('video').scrollIntoView({
                    behavior: 'smooth'
                });
            } else {
                document.getElementById('about').scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });

        document.getElementById('bar').addEventListener('click', function() {
            var menu = document.getElementById('menu');
            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                menu.classList.add('menu-center');
            } else {
                menu.classList.add('hidden');
                menu.classList.remove('menu-center');
            }
        });

        document.querySelectorAll(".menu-button-sm").forEach(function(button) {
            button.addEventListener('click', function() {
                var menu = document.getElementById("menu");
                menu.classList.add('hidden');
            });
        });

        const swiper = new Swiper('.slider-wrapper', {
            // Optional parameters
            loop: true,
            grabCursor: true,
            spaceBetween: 1,

            autoplay: {
                delay: 2000,
            },

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // on: {
            //     slideChangeTransitionEnd: function () {
            //         document.querySelectorAll('iframe').forEach(function (iframe) {
            //             iframe.contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
            //         });

            //         setTimeout(function () {
            //             var activeSlide = document.querySelector('.swiper-slide-active');
            //             var videoIframe = activeSlide.querySelector('.video-slide');

            //             if (videoIframe) {
            //                 videoIframe.src += '&autoplay=1'; // Append autoplay parameter to start playing the video
            //             }
            //         }, 50);

            //         swiper.autoplay.stop();

            //                 // Listen for video end event
            //                 videoIframe.addEventListener('load', function () {
            //                     var iframeDoc = videoIframe.contentDocument || videoIframe.contentWindow.document;
            //                     iframeDoc.addEventListener('play', function () {
            //                         swiper.autoplay.stop();
            //                     });

            //                     iframeDoc.addEventListener('ended', function () {
            //                         swiper.autoplay.start();
            //                     });
            //                 });
            //     }
            // }

        });

        function toggleModal() {
            document.getElementById('modal').classList.toggle('hidden');
            document.getElementById("overlay").classList.toggle('hidden');

        }


        document.getElementById("nav-button-vid").addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('video').scrollIntoView({
                behavior: 'smooth'
            });
        });

        document.getElementById("nav-button-about").addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('about').scrollIntoView({
                behavior: 'smooth'
            });
        });

        var navButtonRegister = document.getElementById("nav-button-register");

        if (navButtonRegister) {
            navButtonRegister.addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('register').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        }

        window.addEventListener("scroll", function() {
            var reveals = document.querySelectorAll(".reveal");
            reveals.forEach(function(reveal) {
                var windowHeight = window.innerHeight;
                var revealTop = reveal.getBoundingClientRect().top;
                var revealPoint = 0;

                if (revealTop < windowHeight - revealPoint) {
                    reveal.classList.add("active");
                } else {
                    reveal.classList.remove("active");
                }
            });
        });
    </script>
</body>

</html>
