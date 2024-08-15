@extends('user.layout.main')

@section('head')
    <style>
        html,
        body {
            position: relative;
            height: 100vh;
            overflow: hidden;
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
            flex-direction: column;
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

        @keyframes rotateLeftRight {
            0% {
                transform: rotate(20deg);
            }

            50% {
                transform: rotate(25deg);
            }

            100% {
                transform: rotate(20deg);
            }
        }

        /* Apply the animation to the images */
        .rotate-animation {
            animation: rotateLeftRight 3s infinite alternate;
        }

        .swiper-pagination-progressbar-fill {
            background-color: #ff5d2c !important;
            /* Replace with your desired color */
        }
    </style>
@endsection

@section('content')
    {{-- <div></div> --}}
    <div class = "fixed h-screen w-full overflow-hidden">
        <div class="fixed h-screen w-screen overflow-hidden top-0 left-0">
            <video src="{{ asset('assets/loop.mp4') }}" class="object-cover object-fit h-screen w-screen" autoplay></video>
        </div>

        <div
            class="fixed top-[-800px] left-[-500px] w-[1200px] h-[1200px] rounded-full blur-[500px] bg-[#4476CB] animation-blob">
        </div>
        <div
            class="fixed bottom-[-800px] right-[-800px] w-[1200px] h-[1200px] rounded-full blur-[500px] bg-[#79FFEF] animation-blob">
        </div>
        {{-- <img src = "{{ URL('assets/Artboard 1_SS_2.png') }}"
            class = "slide-in-from-left img-shadow-1 absolute bottom-[-10px] left-[-100px] md:left-[100px] w-[300px] md:w-[300px] rotate-[-10deg]">
        <img src = "{{ URL('asset/Artboard 1_SS_5.png') }}"
            class = "rotate-animation slide-in-from-right float img-shadow-2 absolute bottom-[-30px] left-[-10px] md:left-[180px] w-[350px] md:w-[350px] rotate-[20deg]"> --}}
    </div>

    <div
        class="h-screen relative w-full py-[100px] px-[50px] md:px-[50px] xl:px-[100px] flex flex-col justify-center gap-[100px] items-center">
        <div
            class="max-w-[400px] relative bg-white/15 backdrop-blur-xl border-[1px] border-white rounded p-10 flex flex-col justify-center items-center">
            <button><i id = "tutorial"
                    class="hover:text-[#ffcdb9] transition-500 text-white text-[30px] sm:text-[36px] absolute right-[20px] top-[20px] w-full text-right fas fa-question-circle"></i></button>
            <p class = "text-white text-[18px] sm:text-[20px] leading-tight font-semibold">You have collected</p>
            <h2 class = "text-white text-[80px] sm:text-[100px] leading-tight">{{ count($letters) }}/27</h2>
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
            class = "mt-[30px] md:mt-[70px] hidden absolute h-[500px] w-[300px] md:h-[500px] md:w-[600px] lg:h-[500px] lg:w-[800px]">
            <div class="swiper mySwiper">
                <div class="absolute h-[64px] z-10 w-full text-right text-[36px] py-[10px] px-[20px]">
                    <button class = " close-tutorial"> <svg class=" text-white inline-block w-[32px] h-[32px]"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <line x1="18" y1="6" x2="6" y2="18" />
                            <line x1="6" y1="6" x2="18" y2="18" />
                        </svg>
                    </button>
                </div>
                <div class="swiper-wrapper">
                    <div
                        class="swiper-slide  py-[30px] px-[40px] md:py-[100px] md:px-[50px] bg-gradient-to-t from-[#DF826C] to-[#ffedab] text-white">
                        <h1 class = "text-3xl sm:text-5xl text-center">How to Play: Realms Seekers</h1>
                    </div>
                    <div
                        class="swiper-slide py-[30px] px-[40px] md:py-[100px] md:px-[50px] bg-gradient-to-t from-[#DF826C] to-[#ffedab] text-white">
                        <h2 class = "text-xl sm:text-3xl mb-3">Intro</h2>
                        <p class = "text-[12px] sm:text-[18px] text-center">
                            Selamat datang di Realms Seekers! Kalian akan memasuki sebuah petualangan seru di mana kalian
                            harus menjelajahi 27 booth yang tersebar di seluruh area. Setiap booth dioperasikan oleh Unit
                            Kegiatan Mahasiswa (UKM) yang berbeda, dan di setiap booth terdapat tantangan yang harus kalian
                            selesaikan untuk mendapatkan huruf-huruf yang akan membantu kalian menyusun sebuah kalimat
                            rahasia.
                        </p>
                    </div>
                    <div
                        class="swiper-slide py-[30px] px-[40px] md:py-[100px] md:px-[50px] bg-gradient-to-t from-[#DF826C] to-[#ffedab] text-white">
                        <h2 class = "text-xl sm:text-3xl mb-3">Tujuan Games</h2>
                        <p class ="text-[12px] sm:text-[18px] text-center">
                            Tujuan utama kalian adalah mengumpulkan semua huruf yang tersembunyi di 27 booth dan huruf-huruf
                            tersebut akan tersusun menjadi kalimat yang telah ditentukan. Kalian akan dinyatakan sebagai
                            pemenang jika berhasil mendapatkan semua huruf hingga kalimat terbentuk dengan lengkap.
                        </p>
                    </div>
                    <div
                        class="swiper-slide py-[30px] px-[40px] md:py-[100px] md:px-[50px] bg-gradient-to-t from-[#DF826C] to-[#ffedab] text-white">
                        <h2 class = "text-xl sm:text-3xl mb-3 text-left">Mekanisme</h2>
                        <ol class = "text-[12px] sm:text-[18px] ml-5 text-left">
                            <li>
                                <h3>1. Menjelajahi Booth</h3>
                                <ul class = "m-3 list-disc list-outside pl-5">
                                    <li class="pl-1">Setiap booth akan memiliki aktivitas yang berbeda. Aktivitas ini bisa
                                        berupa mini games casual atau competitive.</li>
                                    <li class="pl-1">Kalian bebas memilih booth mana yang ingin dikunjungi terlebih
                                        dahulu.</li>
                                </ul>
                            </li>

                            <li>
                                <h3>2. Jenis Mini Games</h3>
                                <ul class = "m-3 list-disc list-outside pl-5">
                                    <li class="pl-1">Casual Games: Tantangan yang lebih ringan dan menghibur, cocok untuk
                                        semua pemain.</li>
                                    <li class="pl-1">Competitive Games: Tantangan dengan tingkat kesulitan lebih tinggi,
                                        di mana hasilnya bisa berupa kemenangan atau kekalahan.</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                    <div
                        class="swiper-slide py-[30px] px-[40px] md:py-[100px] md:px-[50px] bg-gradient-to-t from-[#DF826C] to-[#ffedab] text-white">
                        <h2 class = "text-xl sm:text-3xl mb-3 text-left">Mekanisme</h2>
                        <ol class = "text-[12px] sm:text-[18px] ml-5 text-left">
                            <li>
                                <h3>3. Mendapatkan Huruf</h3>
                                <ul class = "m-3 list-disc list-outside pl-5">
                                    <li class="pl-1">Jika kalian berhasil menyelesaikan atau memenangkan mini game di
                                        sebuah booth, kalian akan mendapatkan sebuah "collectible" berupa huruf.</li>
                                    <li class="pl-1">Huruf tersebut akan menjadi bagian dari kalimat rahasia yang harus
                                        kalian susun.</li>
                                </ul>
                            </li>

                            <li>
                                <h3>4. Kesempatan Ulang</h3>
                                <ul class = "m-3 list-disc list-outside pl-5">
                                    <li class="pl-1">Jika kalian belum berhasil memenangkan mini game, kalian dapat
                                        mencoba kembali sampai berhasil.</li>
                                    <li class="pl-1">Tidak ada batasan jumlah kesempatan untuk mengulang game di sebuah
                                        booth.</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                    <div
                        class="swiper-slide py-[30px] px-[40px] md:py-[100px] md:px-[50px] bg-gradient-to-t from-[#DF826C] to-[#ffedab] text-white">
                        <h2 class = "text-xl sm:text-3xl mb-3 text-left">Mekanisme</h2>
                        <ol class = "text-[12px] sm:text-[18px] ml-5 text-left">
                            <li>
                                <h3>5. Menyusun Kalimat</h3>
                                <ul class = "m-3 list-disc list-outside pl-5">
                                    <li class="pl-1">Setelah kalian mengumpulkan semua huruf dari 27 booth, kalian akan
                                        mendapatkan sebuah kalimat lengkal yang telah kami tentutkan.</li>
                                </ul>
                            </li>

                            <li>
                                <h3>6. Penyelesaian dan Kemenangan</h3>
                                <ul class = "m-3 list-disc list-outside pl-5">
                                    <li class="pl-1">Permainan "Realms Seekers" dianggap selesai jika kalian berhasil
                                        mensubmit kalimat yang telah lengkap.</li>
                                    <li class="pl-1">Top 5 maba dari setiap minggunya menyusun kalimat dengan benar akan
                                        mendapatkan hadiah khusus.</li>
                                </ul>
                            </li>
                        </ol>
                    </div>
                    <div
                        class="swiper-slide py-[30px] px-[40px] md:py-[100px] md:px-[50px] bg-gradient-to-t from-[#DF826C] to-[#ffedab] text-white">
                        <h2 class = "text-xl sm:text-3xl mb-3">Reward</h2>
                        <p class = "text-[12px] sm:text-[18px] text-center">
                            Hadiah khusus yang kami maksudkan dari game ini adalah potongan atau subsidi sebesar Rp
                            50.000,00 buat kalian semua yang ingin daftar ke UKM-UKM favorit kalian.
                        </p>
                    </div>
                    <div
                        class="swiper-slide py-[30px] px-[40px] md:py-[100px] md:px-[50px] bg-gradient-to-t from-[#DF826C] to-[#ffedab] text-white">
                        <h2 class = "text-xl sm:text-3xl mb-3">Outro</h2>
                        <p class = "text-[12px] sm:text-[18px] text-center">
                            Sekarang, waktunya kalian memulai petualangan seru di Realms Seekers! Tantangan seru udah nunggu
                            di tiap booth, dan cuma yang gigih dan pinter aja yang bakal berhasil ngumpulin semua huruf buat
                            nyusun kalimat rahasia. Jangan takut buat nyoba lagi dan lagi—setiap langkah kalian bakal
                            ngebawa lebih dekat ke kemenangan.
                        </p>
                    </div>
                    <div
                        class="relative py-[30px] px-[40px] md:py-[100px] md:px-[50px] swiper-slide bg-gradient-to-t from-[#DF826C] to-[#ffedab] text-white">
                        <p class = "text-[12px] sm:text-[18px] text-center">
                            Ingat, ini bukan cuma soal siapa yang paling cepat, tapi bagaimana kalian bisa menikmati setiap
                            momen di perjalanan ini. Selamat bermain, semoga kalian menjadi salah satu yang berhasil
                            memenangkan game ini!
                        </p>
                        <div class = "group">
                            <a
                                class = "close-tutorial cursor-pointer font-bold text-[16px] md:text-[20px]  backdrop-blur-sm bg-white/10 border-[1px] border-[#F7EECF] rounded-full py-[5px] px-10 absolute bottom-[60px] left-1/2 -translate-x-1/2  group-hover:bg-[#F7EECF] group-hover:shadow-no-offset">
                                <span class = "font-bold text-white group-hover:text-[#DF826C]">Close tutorial</span>
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
                class = "cursor-pointer font-bold text-[16px] md:text-[20px]  backdrop-blur-sm bg-white/10 border-[1px] border-[#DF826C] rounded-full py-3 px-7  group-hover:bg-[#DF826C] group-hover:shadow-no-offset transition">
                <span class = "font-bold text-white group-hover:text-[#F7EECF]">See my list</span>
            </a>
        </div>



        <div id = "overlay" class = "w-full h-[100vh] fixed bg-black opacity-80 hidden"></div>

        <div id = "letter-card"
            class = "hidden absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-gradient-to-r from-[#DF826C] to-[#ffedab] text-white p-10 rounded max-w-[90%]">
            <h2 class = "text-center font-bold text-[16px] sm:text-[24px] leading-tight">
                Letters you have collected
            </h2>
            <div class = "mx-auto w-full flex flex-wrap gap-1 md:gap-3 mt-[20px]">
                <div class = "flex flex-wrap justify-center gap-y-4 gap-x-10">
                    @php
                        $words = explode(' ', $day1Sentence);
                        $i = 0;
                    @endphp
                    @foreach ($words as $word)
                        <!--Word-->
                        <div class = "flex flex-row">
                            @foreach (str_split($word) as $char)
                                @if ($userSentence[$i] !== ' ')
                                    <div
                                        class = "text-[12px] md:text-[24px] w-[25px] h-[25px] md:w-[50px] md:h-[50px] rounded-full bg-[#962e17] text-white font-bold flex justify-center items-center">
                                        {{ $userSentence[$i] }}
                                    </div>
                                @else
                                    <div
                                        class = "text-center text-[12px] md:text-[24px] w-[25px] h-[25px] md:w-[50px] md:h-[50px] text-white font-bold">
                                        __</div>
                                @endif
                                @php
                                    $i += 1;
                                @endphp
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Initialize Swiper -->
    <script>
        $(document).ready(function() {
            var swiper = new Swiper(".mySwiper", {
                allowTouchMove: false,
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

            let percentage = ({{ count($letters) }} / 27) * 100;
            percentage = `${percentage}%`;

            document.getElementById("progress-bar").style.width = percentage;
        });
    </script>
@endsection
