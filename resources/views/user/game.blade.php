<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/fc45e0c6e7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
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

    <div class = "fixed h-screen w-full bg-gradient-to-t from-[#4476CB] to-[#57C7D4] from-20% overflow-hidden">
        <div
            class="fixed top-[-800px] left-[-500px] w-[1200px] h-[1200px] rounded-full blur-[500px] bg-[#4476CB] animation-blob">
        </div>
        <div
            class="fixed bottom-[-800px] right-[-800px] w-[1200px] h-[1200px] rounded-full blur-[500px] bg-[#79FFEF] animation-blob">
        </div>
        <img src = "{{ URL('asset/Artboard 1_SS_2.png') }}"
            class = "slide-in-from-left img-shadow-1 absolute bottom-[-10px] left-[-100px] md:left-[100px] w-[300px] md:w-[300px] rotate-[-10deg]">
        <img src = "{{ URL('asset/Artboard 1_SS_5.png') }}"
            class = "slide-in-from-right float img-shadow-2 absolute bottom-[-20px] left-[-10px] md:left-[180px] w-[350px] md:w-[350px] rotate-[20deg]">
    </div>





    <div
        class="h-screen relative w-full py-[100px] px-[50px] md:px-[50px] xl:px-[100px] flex flex-col justify-center gap-[100px] items-center">
        <div
            class="max-w-[400px] relative bg-white/15 backdrop-blur-xl border-[1px]  border-white rounded p-10 flex flex-col justify-center items-center">
            <button><i id = "tutorial"
                    class="text-white text-[30px] sm:text-[36px] absolute right-[20px] top-[20px] w-full text-right fas fa-question-circle"></i></button>
            <p class = "text-white text-[18px] sm:text-[20px] leading-tight">You have collected</p>
            <h2 class = "text-white text-[80px] sm:text-[100px] leading-tight">{{ $letters->count() }}/27</h2>
            <p class = "text-white text-[18px] sm:text-[20px]">letters</p>
            <!-- Progress -->
            <div class="mt-5 flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                <div id = "progress-bar"
                    class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition duration-500 dark:bg-blue-500"
                    style="width: 10%"></div>
            </div>
            <!-- End Progress -->
            <p class = "text-white text-center text-[18px] mt-10 sm:text-[20px] font-bold">Collect all 27 of them and
                win the
                prize!</p>
            <p class = "text-white text-center text-[18px] sm:text-[16px] italic leading-none mt-[20px]">See the
                tutorial by clicking on the "?" icon
                above.</p>

        </div>
        <div id = "tutorial-card"
            class = "hidden absolute h-[500px] w-[300px] md:h-[500px] md:w-[600px] lg:h-[500px] lg:w-[800px]">
            <div class="swiper mySwiper">
                <div class="absolute h-[64px] z-10 w-full text-right text-[36px] py-[10px] px-[50px]">
                    <button class = " close-tutorial"> <svg class=" text-white inline-block w-[32px] h-[32px]"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </button>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-gradient-to-t from-[#4476CB] to-[#57C7D4] text-white">Slide 1</div>
                    <div class="swiper-slide bg-gradient-to-t from-[#4476CB] to-[#57C7D4] text-white">Slide 2</div>
                    <div class="swiper-slide bg-gradient-to-t from-[#4476CB] to-[#57C7D4] text-white">Slide 3</div>
                    <div class="swiper-slide bg-gradient-to-t from-[#4476CB] to-[#57C7D4] text-white">Slide 4</div>
                    <div class="swiper-slide bg-gradient-to-t from-[#4476CB] to-[#57C7D4] text-white">Slide 5</div>
                    <div class="swiper-slide bg-gradient-to-t from-[#4476CB] to-[#57C7D4] text-white">Slide 6</div>
                    <div class="swiper-slide bg-gradient-to-t from-[#4476CB] to-[#57C7D4] text-white">Slide 7</div>
                    <div class="swiper-slide bg-gradient-to-t from-[#4476CB] to-[#57C7D4] text-white">Slide 8</div>
                    <div class="relative swiper-slide bg-gradient-to-t from-[#4476CB] to-[#57C7D4] text-white">Slide 9
                        <div class = "group ">
                            <a
                                class = "close-tutorial cursor-pointer font-bold text-[16px] md:text-[20px]  backdrop-blur-sm bg-white/10 border-[1px] border-[#79FFEF] rounded-full py-[5px] px-10 absolute bottom-[60px] left-1/2 -translate-x-1/2  group-hover:bg-[#79FFEF] group-hover:shadow-no-offset">
                                <span class = "font-bold text-white group-hover:text-[#30518A]">Close tutorial</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-white swiper-button-next"></div>
                <div class="text-white swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

        <div class = "fixed group bottom-[50px] left-1/2 -translate-x-1/2 md:left-auto md:right-[50px] ">
            <a id = "see-list"
                class = "cursor-pointer font-bold text-[16px] md:text-[20px]  backdrop-blur-sm bg-white/10 border-[1px] border-[#79FFEF] rounded-full py-3 px-7  group-hover:bg-[#79FFEF] group-hover:shadow-no-offset">
                <span class = "font-bold text-white group-hover:text-[#30518A]">See my list</span>
            </a>
        </div>



        <div id = "overlay" class = "w-full h-[100vh] fixed bg-black opacity-80 hidden"></div>



        <div id = "letter-card"
            class = "hidden absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-gradient-to-r from-[#4476CB] to-[#57C7D4] text-white p-10 rounded max-w-[400px]">
            <h2 class = "text-center font-bold text-[16px] sm:text-[24px] leading-tight">
                Letters you have collected
            </h2>
            <div class = "mx-auto w-full flex flex-wrap gap-1 md:gap-3 mt-[20px]">
                @foreach ($letters as $letter)
                    <div
                        class = "text-[12px] md:text-[24px] w-[25px] h-[25px] md:w-[50px] md:h-[50px] rounded-full bg-white text-black flex justify-center items-center">
                        {{ $letter }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        document.getElementById("tutorial").addEventListener("click", function() {
            document.getElementById("tutorial-card").classList.remove("hidden");
            var overlay = document.getElementById("overlay");
            overlay.classList.remove("hidden");
        });

        document.querySelectorAll(".close-tutorial").forEach(function(button) {
            button.addEventListener("click", function() {
                document.getElementById("tutorial-card").classList.add("hidden");
                document.getElementById("overlay").classList.add("hidden");

            });
        });

        document.getElementById("see-list").addEventListener("click", function() {
            document.getElementById("letter-card").classList.remove("hidden");
            document.getElementById("overlay").classList.remove("hidden");

        });

        document.getElementById("overlay").addEventListener("click", function() {
            if (document.getElementById("tutorial-card").classList.contains("hidden")) {
                document.getElementById("letter-card").classList.add("hidden");
                document.getElementById("overlay").classList.add("hidden");
            }
        });

        let percentage = ({{ $letters->count() }} / 27) * 100;
        percentage = `${percentage}%`;

        document.getElementById("progress-bar").style.width = percentage;
    </script>
</body>

</html>
