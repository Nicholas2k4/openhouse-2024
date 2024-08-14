@extends('user.layout.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
    <style>
        html,
        body {
            width: 100vw;
            overflow-x: hidden;
        }
    </style>
@endsection

@section('content')
    @if (session()->has('logout'))
        <script>
            Swal.fire('Success', '{{ session('logout') }}', 'success');
        </script>
    @endif
    @if (session()->has('login'))
        <script>
            Swal.fire('Success', '{{ session('login') }}', 'success');
        </script>
    @endif
    
    {{-- Elements --}}
    <img src="{{ asset('assets/Coral_2.png') }}" alt="Coral"
        class="absolute sm:top-[80vh] top-[50vh] md:top-[110vh] xl:top-[120vh] sm:right-[-10vw] right-[-15vw] rotate-[-30deg] sm:w-1/3 w-1/2">
    <img src="{{ asset('assets/Coral_1.png') }}" alt="Coral"
        class="absolute top-[200vh] sm:left-[-10vw] left-[-15vw] rotate-[30deg] sm:w-1/3 w-1/2">
    <img src="{{ asset('assets/Flower_2.png') }}" alt="Flower"
        class="absolute top-[350vh] max-sm:top-[250vh] sm:right-[-10vw] right-[-15vw] rotate-[-30deg] sm:w-1/3 w-1/2">
    <img src="{{ asset('assets/Flower_3.png') }}" alt="Flower"
        class="absolute hidden lg:block top-[450vh] sm:left-[-10vw] left-[-15vw] rotate-[30deg] sm:w-1/3 w-1/2">

    {{-- Maskot --}}
    <img src="{{ asset('assets/CORALIS POSE 1.png') }}" alt="Coralis"
        class="maskot z-[9] max-[475px]:hidden absolute lg:right-[-5vw] right-[-25vw] sm:top-[3000px] md:top-[3200px] lg:top-[3900px] xl:top-[5000px] lg:w-1/3 w-1/2">
    <img src="{{ asset('assets/VERDARA POSE 1.png') }}" alt="Verdara"
        class="maskot z-[9] max-[475px]:hidden absolute lg:left-[-5vw] left-[-18vw] sm:top-[3000px] md:top-[3200px] lg:top-[3900px] xl:top-[5000px] lg:w-1/3 w-1/2">

    {{-- Video --}}
    <section class="video w-full xl:h-[100vh] z-50 overflow-hidden flex items-center">
        <video src="{{ asset('assets/Video OH.mp4') }}" autoplay muted loop preload="auto" class="w-[100vw]"></video>
        <div class="overlay"></div>
    </section>

    {{-- Timeline --}}
    <section class="timeline !z-10" id="timeline">
        <div class="flex justify-center mt-10">
            <h1 data-aos="fade-down" data-aos-once="true"
                class="sm:text-7xl text-5xl font-bold bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text">
                TIMELINE</h1>
        </div>
        <div class="img-container flex items-end w-[300vw] overflow-x-scroll mx-auto no-scrollbar">
            <div class="pulau1 w-[100vw] flex justify-center flex-col space-y-10">
                <img src="{{ asset('assets/SS.png') }}" class="mx-auto sm:w-[300px] w-[250px]" alt="">
                <button type="button" data-twe-ripple-init data-twe-ripple-color="dark"
                    class="16-aug-button mx-auto animated-button">
                    Performances
                </button>
            </div>
            <div class="pulau2 w-[100vw] flex justify-center flex-col space-y-10">
                <img src="{{ asset('assets/Floating Rocks.png') }}" class="mx-auto sm:w-[300px] w-[250px]" alt="">
                <button type="button" data-twe-ripple-init data-twe-ripple-color="dark"
                    class="23-aug-button mx-auto animated-button">
                    Performances
                </button>
            </div>
            <div class="pulau3 w-[100vw] flex justify-center flex-col space-y-10">
                <img src="{{ asset('assets/EO.png') }}" class="mx-auto sm:w-[300px] w-[250px]" alt="">
                <button type="button" data-twe-ripple-init data-twe-ripple-color="dark"
                    class="30-aug-button mx-auto animated-button">
                    Performances
                </button>
            </div>
        </div>
        <div class="timeline mt-10 relative flex justify-center z-[5]">
            <img src="{{ asset('assets/line.png') }}" class="absolute xl:w-10/12 w-full md:top-1 sm:top-3 xl:top-0 top-2"
                alt="">
            <img src="{{ asset('assets/point_passive.png') }}"
                class="absolute md:w-[4%] xl:w-[2%] w-[6%] xl:left-52 left-16" alt="">
            <img src="{{ asset('assets/point_passive.png') }}" class="absolute md:w-[4%] xl:w-[2%] w-[6%]" alt="">
            <img src="{{ asset('assets/point_passive.png') }}"
                class="absolute md:w-[4%] xl:w-[2%] w-[6%] xl:right-52 right-16" alt="">
        </div>
        <div class="active-timeline relative flex justify-center z-[5]">
            <img src="{{ asset('assets/point_active.png') }}"
                class="active1 active-timeline absolute md:w-[4%] xl:w-[2%] w-[6%] xl:left-52 left-16" alt="">
            <img src="{{ asset('assets/point_active.png') }}"
                class="active2 active-timeline absolute md:w-[4%] xl:w-[2%] w-[6%] opacity-0" alt="">
            <img src="{{ asset('assets/point_active.png') }}"
                class="active3 active-timeline absolute md:w-[4%] xl:w-[2%] w-[6%] xl:right-52 right-16 opacity-0"
                alt="">
        </div>
        <div class="text-timeline mt-10 md:space-x-24 font-bold flex justify-around !z-10">
            <h1
                class="sm:text-2xl text-xl font-bold bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text !z-10">
                16 Agustus</h1>
            <h1
                class="sm:text-2xl text-xl font-bold bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text !z-10">
                23 Agustus</h1>
            <h1
                class="sm:text-2xl text-xl font-bold bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text !z-10">
                30 Agustus</h1>
        </div>
    </section>

    {{-- UKM and LK --}}
    <section class="ukm-lk flex justify-center space-x-5 mb-10" id="ukm-lk">
        <a href="{{ route('user.ukm') }}">
            <div
                class="ease-in-out border rounded-xl bg-gradient-to-br from-[#F7EECF] via-[#DF826C] to-transparent  backdrop-blur-sm shadow-black shadow-lg md:min-w-[200px] p-5 space-y-5 flex flex-col justify-center text-center transition-shadow hover:ease-in-out duration-500 hover:shadow-white hover:shadow-xl">
                <span class="text-center mx-auto sm:h-[120px] sm:w-[135px] h-[100px] w-[125px]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="#ffffff"
                            d="M0 80l0 48c0 17.7 14.3 32 32 32l16 0 48 0 0-80c0-26.5-21.5-48-48-48S0 53.5 0 80zM112 32c10 13.4 16 30 16 48l0 304c0 35.3 28.7 64 64 64s64-28.7 64-64l0-5.3c0-32.4 26.3-58.7 58.7-58.7L480 320l0-192c0-53-43-96-96-96L112 32zM464 480c61.9 0 112-50.1 112-112c0-8.8-7.2-16-16-16l-245.3 0c-14.7 0-26.7 11.9-26.7 26.7l0 5.3c0 53-43 96-96 96l176 0 96 0z" />
                    </svg>
                </span>
                <h1
                    class="sm:text-5xl text-2xl font-bold bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text">
                    UKM</h1>
            </div>
        </a>
        <a href="{{ route('user.lk') }}">
            <div
                class="ease-in-out border rounded-xl backdrop-blur-sm bg-gradient-to-bl from-[#074173] via-[#4477CE] to-transparent shadow-black shadow-lg md:min-w-[200px] p-5 space-y-5 flex flex-col justify-center text-center transition-shadow hover:ease-in-out duration-500 hover:shadow-white hover:shadow-xl">
                <span class="text-center mx-auto sm:h-[120px] sm:w-[135px] h-[100px] w-[125px]">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 576 512">
                        <path fill="#ffffff"
                            d="M208 80c0-26.5 21.5-48 48-48l64 0c26.5 0 48 21.5 48 48l0 64c0 26.5-21.5 48-48 48l-8 0 0 40 152 0c30.9 0 56 25.1 56 56l0 32 8 0c26.5 0 48 21.5 48 48l0 64c0 26.5-21.5 48-48 48l-64 0c-26.5 0-48-21.5-48-48l0-64c0-26.5 21.5-48 48-48l8 0 0-32c0-4.4-3.6-8-8-8l-152 0 0 40 8 0c26.5 0 48 21.5 48 48l0 64c0 26.5-21.5 48-48 48l-64 0c-26.5 0-48-21.5-48-48l0-64c0-26.5 21.5-48 48-48l8 0 0-40-152 0c-4.4 0-8 3.6-8 8l0 32 8 0c26.5 0 48 21.5 48 48l0 64c0 26.5-21.5 48-48 48l-64 0c-26.5 0-48-21.5-48-48l0-64c0-26.5 21.5-48 48-48l8 0 0-32c0-30.9 25.1-56 56-56l152 0 0-40-8 0c-26.5 0-48-21.5-48-48l0-64z" />
                    </svg>
                </span>
                <h1
                    class="sm:text-5xl text-2xl font-bold bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text">
                    LK</h1>
            </div>
        </a>
    </section>

    {{-- Game --}}
    <section class="game flex justify-center space-x-5 mb-10" id="game">
        <a href="{{ route('user.game') }}">
            <div
                class="ease-in-out border rounded-xl bg-gradient-to-br from-[#074173] to-[#B18AEA] shadow-black shadow-lg md:min-w-[420px] p-5 space-y-5 flex flex-col justify-center text-center transition-shadow hover:ease-in-out duration-500 hover:shadow-white hover:shadow-xl">
                <span class="text-center mx-auto sm:h-[120px] sm:w-[150px] h-[100px] w-[125px]">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                        <path fill="#ffffff"
                            d="M274.9 34.3c-28.1-28.1-73.7-28.1-101.8 0L34.3 173.1c-28.1 28.1-28.1 73.7 0 101.8L173.1 413.7c28.1 28.1 73.7 28.1 101.8 0L413.7 274.9c28.1-28.1 28.1-73.7 0-101.8L274.9 34.3zM200 224a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zM96 200a24 24 0 1 1 0 48 24 24 0 1 1 0-48zM224 376a24 24 0 1 1 0-48 24 24 0 1 1 0 48zM352 200a24 24 0 1 1 0 48 24 24 0 1 1 0-48zM224 120a24 24 0 1 1 0-48 24 24 0 1 1 0 48zm96 328c0 35.3 28.7 64 64 64l192 0c35.3 0 64-28.7 64-64l0-192c0-35.3-28.7-64-64-64l-114.3 0c11.6 36 3.1 77-25.4 105.5L320 413.8l0 34.2zM480 328a24 24 0 1 1 0 48 24 24 0 1 1 0-48z" />
                    </svg>
                </span>
                <h1
                    class="sm:text-5xl text-2xl font-bold bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text">
                    Game</h1>
            </div>
        </a>
    </section>


    <section class="faq w-screen flex justify-center items-center flex-col top-16 mt-[100px] h-fit !z-50" id="faq">
        <div class="flex justify-center items-center h-24 text-3xl font-bold">
            <h1 data-aos="fade-down" data-aos-once="true"
                class="sm:text-7xl text-5xl font-bold text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mb-5">
                Ask Verdara</h1>
        </div>

        <div
            class="chats grid md:w-[700px] sm:w-[380px] max-sm:w-[310px] h-[550px] bg-gray-200 my-10 rounded-3xl overflow-hidden !z-50">
            <div class="chat-header w-full h-[70px] rounded-t-2xl flex justify-start items-center">
                <img src="{{ asset('assets/VERDARA PP.png') }}" alt="faq-maskot"
                    class="rounded-full h-11 bg-yellow-400 mx-4">
                <p class="text-lg font-bold max-sm:text-base text-[#1A4D2E]" data-aos="fade-down" data-aos-once="true">Verdara</p>
            </div>
            <div class="chat-area pt-4 chat-section overflow-y-scroll overflow-x-hidden">
                <div class="chatAnswer flex">
                    <img src="{{ asset('assets/VERDARA PP.png') }}" alt="faq-maskot"
                        class="rounded-full h-8 bg-yellow-400 ml-4 mr-3">
                    <p
                        class="chat overflow-visible text-[#789461] sm:text-base max-sm:text-sm w-fit px-3 py-2
                        bg-white rounded-tr-2xl rounded-br-2xl rounded-bl-2xl my-5 md:max-w-[450px] max-sm:max-w-[200px]">
                        Halooo 😁, perkenalkan namaku Verdara. Aku akan menjawab pertanyaan kalian seputar acara Open House
                        2024.
                    </p>
                </div>
            </div>

            <div class="chat-footer w-full h-[58px] rounded-b-2xl flex justify-between place-self-end items-center">
                <p class="ml-5 font-bold max-sm:text-xs text-[#1A4D2E]">Choose your question here</p>
                <div class="flex items-center h-full" data-twe-dropdown-position="dropup">
                    <i class="fa-regular fa-comment-dots mx-5 text-2xl hover:cursor-pointer text-[#1A4D2E]" type="button"
                        id="dropdownMenuButton1" data-twe-dropdown-toggle-ref aria-expanded="false" data-twe-ripple-init
                        data-twe-ripple-color="light">
                    </i>
                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max h-[180px] overflow-y-scroll list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-base shadow-lg data-[twe-dropdown-show]:block"
                        aria-labelledby="dropdownMenuButton1" data-twe-dropdown-menu-ref>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="0">Apa Mahasiswa Baru 2024
                                memiliki kewajiban untuk mengikuti UKM / LK ?
                            </p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="1">Bagaimana prosedur untuk
                                mendaftar ke UKM yang diinginkan ?</p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="2">Apakah Mahasiswa Baru 2024
                                diperbolehkan untuk mendaftar lebih dari 1 UKM ?</p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="3">Apakah Mahasiswa Baru 2024
                                boleh membatalkan registrasi setelah membayar uang pendaftaran UKM ?</p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="4">Apakah semua UKM pasti akan
                                menerima Mahasiswa Baru 2024 sebagai calon peserta mereka?</p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="5">Bagaimana prosedur untuk
                                membayar uang pendaftaran ke UKM yang diinginkan?
                            </p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="6">Apakah Mahasiswa Baru 2024
                                diperbolehkan untuk membayar uang pendaftaran melalui rekening teman sesama Mahasiswa Baru
                                2024?
                            </p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="7">Mengapa Mahasiswa Baru 2024
                                belum dapat mendaftar menjadi anggota LK?</p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="8">Apa itu “Collectible Quest”?
                            </p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="9">Kapan Mahasiswa Baru 2024
                                dapat mengumpulkan “Collectible Quest”?</p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="10">Apakah Mahasiswa Baru 2024
                                wajib mengumpulkan “Collectible Quest”?</p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="11">Bagaimana cara mengumpulkan
                                “Collectible Quest”? </p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="12">Bagaimana cara mengetahui
                                pemenang dari “Collectible Quest”?</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    @include('user.components.bubbles')
@endsection

@section('script')
    <script>
        // AOS.init();
        $(document).ready(function() {
            // window.addEventListener("load", function() {
            const tween = gsap.to('.img-container', {
                x: getScrollAmount,
                duration: 3,
                ease: "none"
            });
            ScrollTrigger.create({
                trigger: ".timeline",
                // start: 'top 5%',
                end: () => `+=${getScrollAmount() * -1}`,
                pin: true,
                animation: tween,
                scrub: 1,
            });
            // });
        });
    </script>

    <script>
        var timelines = document.querySelector('.img-container');
        var timeWidth = timelines.offsetWidth;
        var amountToScroll = timeWidth - window.innerwidth;

        function getScrollAmount() {
            var timeWidth = timelines.scrollWidth;
            return -(timeWidth - window.innerWidth);
        }

        function timelineScroll() {
            var pulauElement1 = document.querySelector('.pulau1');
            var pulauElement2 = document.querySelector('.pulau2');
            var pulauElement3 = document.querySelector('.pulau3');

            var timelineElement1 = document.querySelector('.active1');
            var timelineElement2 = document.querySelector('.active2');
            var timelineElement3 = document.querySelector('.active3');

            var width = (window.innerWidth / pulauElement1.getBoundingClientRect().left) * 100;

            if (width != Infinity) {
                if (width > -130) {
                    timelineElement1.classList.remove('opacity-1');
                    timelineElement1.classList.add('opacity-0');
                } else {
                    timelineElement1.classList.remove('opacity-0');
                    timelineElement1.classList.add('opacity-1');
                }

                if (width < -130 || width > -55) {
                    timelineElement2.classList.remove('opacity-1');
                    timelineElement2.classList.add('opacity-0');

                } else {
                    timelineElement2.classList.remove('opacity-0');
                    timelineElement2.classList.add('opacity-1');
                }

                if (width < -55) {
                    timelineElement3.classList.remove('opacity-1');
                    timelineElement3.classList.add('opacity-0');
                } else {
                    timelineElement3.classList.remove('opacity-0');
                    timelineElement3.classList.add('opacity-1');
                }
            } else {
                timelineElement1.classList.remove('opacity-0');
                timelineElement1.classList.add('opacity-1');
            }

            // Navbar ganti transparent pas di homepage
            if (window.pageYOffset <= 60) {
                document.querySelector('nav').classList.remove('bg-gradient-to-r', 'bg-gradient-to-r',
                    'from-[#4477CE]',
                    'to-[#F1C1AC]');
                document.querySelector('nav').classList.add('bg-transparent');
            } else {
                document.querySelector('nav').classList.remove('bg-transparent');
                document.querySelector('nav').classList.add('bg-gradient-to-r', 'bg-gradient-to-r',
                    'from-[#4477CE]',
                    'to-[#F1C1AC]');
            }
        }
        window.addEventListener('scroll', timelineScroll);

        function adjustOverlayHeight() {
            const videoElement = document.querySelector('.video');
            const overlayElement = document.querySelector('.overlay');

            if (videoElement && overlayElement) {
                overlayElement.style.height = `${videoElement.clientHeight}px`;
            }
        }

        // Adjust height initially
        adjustOverlayHeight();

        // Adjust height on window resize
        window.addEventListener('resize', adjustOverlayHeight);

        const chatSection = document.querySelector('.chat-section');

        const answerArray = [
            'Mahasiswa Baru tidak diwajibkan untuk mengikuti UKM, tetapi UKM dapat menjadi salah satu wadah bagi Mahasiswa Baru 2024 untuk mengekspresikan diri dan mengembangkan dalam bidang non-akademik, khususnya bakat dan minat.',
            'Silahkan Contact OA Line untuk informasi selengkapnya !',
            'Mahasiswa Baru 2024 diperbolehkan untuk mendaftar lebih dari 1 (satu) UKM dengan batas maksimal 3 (tiga) UKM. Namun, Mahasiswa Baru juga perlu memperhatikan jadwal perkuliahan dan jadwal pelaksanaan setiap UKMnya agar tidak saling bertabrakan.',
            'Tidak boleh! Mahasiswa Baru yang telah melakukan pembayaran kepada suatu UKM dianggap sebagai peserta resmi dari UKM tersebut dan memiliki kewajiban untuk mengikuti seluruh rangkaian kegiatan dari UKM yang bersangkutan. ',
            'Tidak! Ada beberapa UKM yang mewajibkan calon pesertanya untuk mengikuti proses seleksi sebelum menjadi peserta resmi. Namun, perlu diketahui bahwa Mahasiswa Baru akan langsung diterima apabila mendaftar ke UKM yang tidak memiliki prosedur seleksi. ',
            'Silahkan Contact OA Line untuk informasi selengkapnya !',
            'Mahasiswa Baru tidak diperbolehkan untuk melakukan pembayaran menggunakan rekening sesama Mahasiswa Baru untuk menjaga transparansi pembayaran.',
            'Hal ini dikarenakan PCU menerapkan program Pola Pengembangan Mahasiswa (POLBANGMAWA) yang bertujuan untuk mempersiapkan Mahasiswa Baru untuk mempersiapkan diri untuk menjadi Fungsionaris LK dengan mengikuti Servant Leadership Training (SLT) sebagai persyaratan sebelum Mahasiswa Baru bergabung ke dalam LK.',
            'Collectible Quest adalah sebuah misi yang dapat diselesaikan tiap minggunya. Apabila misi ini telah terselesaikan, maka Mahasiswa Baru bisa mendapatkan sebuah hadiah dengan mengumpulkan beberapa huruf hingga membentuk kata-kata yang tersembunyi. Kata-kata yang akan dikumpulkan berbeda untuk setiap minggunya, sehingga kata yang telah dikumpulkan di minggu pertama tidak berlaku untuk minggu berikutnya.',
            'Setiap minggunya pada jam buka Open House 2024.',
            'Tidak, tetapi bagi Mahasiswa Baru yang mengumpulkan “Collectible Quest” akan mendapatkan subsidi potongan harga uang pendaftaran sejumlah Rp50.000,00/orangnya. Panitia Open House 2024 akan mengumumkan pemenang melalui akun Instagram resmi @openhouse.pcu',
            'Mahasiswa Baru harus memainkan dan memenangkan activity yang diadakan pada setiap booth UKM. Nantinya, para penjaga booth akan memberikan collectibles kepada Mahasiswa Baru melalui website Open House: openhouse.petra.ac.id',
            'Setiap minggunya akan terdapat 5 orang pemenang dari Collectible Quest. Pemenang ini akan ditentukan oleh panitia berdasarkan 5 orang pertama yang berhasil mengumpulkan collectibles secara lengkap.'
        ]

        var replyUser = function(answer) {
            const chatResponse = document.createElement('div');
            chatResponse.classList.add('chatAnswer', 'pt-4', 'flex');

            const chatProfile = document.createElement('img');
            chatProfile.src = 'assets/VERDARA PP.png';
            chatProfile.alt = 'faq-maskot';
            chatProfile.classList.add('rounded-full', 'h-8', 'bg-yellow-400', 'ml-4', 'mr-3');

            const replyText = document.createElement('div');
            replyText.classList.add('chat', 'overflow-visible', 'text-[#789461]', 'sm:text-base', 'max-sm:text-sm',
                'w-fit', 'sm:max-w-[250px]', 'md:max-w-[450px]', 'max-sm:max-w-[200px]',
                'px-3', 'py-2',
                'bg-white', 'rounded-tr-2xl', 'rounded-br-2xl', 'rounded-bl-2xl', 'my-5');
            replyText.innerHTML = `
    <div class="chat-istyping-container">
        <div class="chat-istyping-circle-1"></div>
        <div class="chat-istyping-circle-2"></div>
        <div class="chat-istyping-circle-3"></div>
    </div>
`;
            setTimeout(function() {
                // const chatElements = document.querySelectorAll('.chat');
                // const lastChatElement = chatElements[chatElements.length - 1];

                replyText.style.width = '0px';
                replyText.style.height = '0px';
            }, 1700);

            setTimeout(function() {
                replyText.style.width = '900px';
                replyText.style.height = 'auto';
                replyText.innerHTML = answer;
                chatSection.scrollTop = chatSection.scrollHeight;
            }, 2000);
            chatResponse.appendChild(chatProfile);
            chatResponse.appendChild(replyText);

            chatSection.appendChild(chatResponse);
        }

        function makeChat(e) {
            var questionText = e.currentTarget.innerHTML;
            var questionCode = e.currentTarget.getAttribute('question-code');

            const userChat = document.createElement('div');
            userChat.classList.add('userAnswer', 'pt-5', 'flex', 'justify-end');
            const textChat = document.createElement('p');
            textChat.classList.add('chat', 'user-chat', 'overflow-visible', 'text-white', 'sm:text-base', 'max-sm:text-sm',
                'px-3', 'py-2', 'backdrop-opacity-80', 'rounded-tr-2xl', 'rounded-bl-2xl', 'rounded-tl-2xl', 'mr-4',
                'w-fit', 'sm:max-w-[250px]', 'md:max-w-[450px]', 'max-sm:w-[200px]');

            textChat.textContent = questionText;

            userChat.appendChild(textChat);
            chatSection.appendChild(userChat);
            chatSection.scrollTop = chatSection.scrollHeight;
            setTimeout(function() {
                replyUser(answerArray[questionCode]);
                chatSection.scrollTop = chatSection.scrollHeight;
            }, 400);
        }

        document.querySelectorAll('.question').forEach(item => {
            item.addEventListener('click', makeChat);
        });

        $('.16-aug-button').on('click', function() {
            Swal.fire({
                title: 'Performance of the Week',
                width: 600,
                html: `<h5 class="font-bold text-xl text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text">16 Agustus 2024</h5>
                <h3 class="font-bold text-3xl text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mt-5"> Gedung W </h3>
                <ul class="list-disc text-start ms-3 mt-3">
                    <li>
                        <p>UKM Paduan Suara</p>
                    </li>
                    <li>
                        <p>UKM Taekwondo</p>
                    </li>
                    <li>
                        <p>UKM Teater</p>
                    </li>
                </ul>
                <h3 class="font-bold text-3xl text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mt-5"> Gedung Q </h3>
                <ul class="list-disc text-start ms-3 mt-3">
                    <li>
                        <p>UKM Chinese Art</p>
                    </li>
                    <li>
                        <p>UKM Dance</p>
                    </li>
                    <li>
                        <p>UKM ASFS</p>
                    </li>
                </ul>
                <h3 class="font-bold text-3xl text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mt-5"> PCR Featuring Openhouse 2024 </h3>
                <ul class="list-disc text-start ms-3 mt-3">
                    <li>
                        <p>UKM Voli</p>
                    </li>
                    <li>
                        <p>UKM Catur</p>
                    </li>
                    <li>
                        <p>UKM Futsal</p>
                    </li>
                    <li>
                        <p>UKM Badminton</p>
                    </li>
                    <li>
                        <p>UKM Tenis Meja</p>
                    </li>
                    <li>
                        <p>UKM Renang</p>
                    </li>
                    <li>
                        <p>UKM Tenis Lapangan</p>
                    </li>
                    <li>
                        <p>UKM Basket</p>
                    </li>
                </ul>
                `,
            });
        });

        $('.23-aug-button').on('click', function() {
            Swal.fire({
                title: 'Performance of the Week',
                width: 600,
                html: `<h5 class="font-bold text-xl text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text">23 Agustus 2024</h5>
                <h3 class="font-bold text-3xl text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mt-5"> Gedung W </h3>
                <ul class="list-disc text-start ms-3 mt-3">
                    <li>
                        <p>UKM Resimen Mahasiswa & EMR</p>
                    </li>
                    <li>
                        <p>UKM Dance</p>
                    </li>
                </ul>
                <h3 class="font-bold text-3xl text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mt-5"> Gedung Q </h3>
                <ul class="list-disc text-start ms-3 mt-3">
                    <li>
                        <p>UKM Teater</p>
                    </li>
                    <li>
                        <p>UKM Taekwondo</p>
                    </li>
                </ul>
                <h3 class="font-bold text-3xl text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mt-5"> PCR Featuring Openhouse 2024 </h3>
                <ul class="list-disc text-start ms-3 mt-3">
                    <li>
                        <p>UKM English Debate Society</p>
                    </li>
                    <li>
                        <p>UKM Pengembangan Diri</p>
                    </li>
                    <li>
                        <p>UKM Esport</p>
                    </li>
                    <li>
                        <p>UKM Matrapenza</p>
                    </li>
                    <li>
                        <p>LK BEM</p>
                    </li>
                    <li>
                        <p>LK PELMA</p>
                    </li>
                    <li>
                        <p>LK PERSMA</p>
                    </li>
                </ul>
                `,
            });
        });

        $('.30-aug-button').on('click', function() {
            Swal.fire({
                title: 'Performance of the Week',
                width: 600,
                html: `<h5 class="font-bold text-xl text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text">30 Agustus 2024</h5>
                <h3 class="font-bold text-3xl text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mt-5"> Gedung W </h3>
                <ul class="list-disc text-start ms-3 mt-3">
                    <li>
                        <p>UKM Vocal Group & Modeling</p>
                    </li>
                </ul>
                <h3 class="font-bold text-3xl text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mt-5"> Gedung Q </h3>
                <ul class="list-disc text-start ms-3 mt-3">
                    <li>
                        <p>UKM Chinese Art</p>
                    </li>
                </ul>
                <h3 class="font-bold text-3xl text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mt-5"> PCR Featuring Openhouse 2024 </h3>
                <ul class="list-disc text-start ms-3 mt-3">
                    <li>
                        <p>UKM ASFS</p>
                    </li>
                    <li>
                        <p>UKM Dekorasi</p>
                    </li>
                    <li>
                        <p>UKM Ilustrasi</p>
                    </li>
                    <li>
                        <p>UKM Martografi</p>
                    </li>
                    <li>
                        <p>UKM EMR - Menwa</p>
                    </li>
                    <li>
                        <p>UKM Vocal Group - Modelling</p>
                    </li>
                    <li>
                        <p>UKM Tenis Paduan Suara - Orchestra</p>
                    </li>
                    <li>
                        <p>UKM Matrapala</p>
                    </li>
                </ul>`,
            });
        });
    </script>
@endsection
