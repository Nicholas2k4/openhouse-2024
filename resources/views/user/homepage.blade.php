@extends('user.layout.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bubble.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
@endsection

@section('content')
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
        class="maskot absolute lg:right-[-5vw] right-[-25vw] sm:top-[2600px] md:top-[3000px] lg:top-[3550px] xl:top-[4700px] top-[1900px] lg:w-1/3 w-1/2">
    <img src="{{ asset('assets/VERDARA POSE 1.png') }}" alt="Verdara"
        class="maskot absolute lg:left-[-5vw] left-[-18vw] sm:top-[2600px] md:top-[3000px] lg:top-[3550px] xl:top-[4700px] top-[1900px] lg:w-1/3 w-1/2">
    <section class="video w-full xl:h-[120vh] z-50">
        <video src="{{ asset('assets/Video OH.mp4') }}" autoplay muted loop preload="auto"></video>
    </section>
    <div class="flex justify-center mt-10">
        <h1 data-aos="fade-down" data-aos-once="true"
            class="text-7xl font-bold bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text">
            TIMELINE</h1>
    </div>
    <section class="timeline" id="timeline">
        <div class="img-container flex items-end w-[300vw] overflow-x-scroll mx-auto no-scrollbar">
            <div class="pulau1 w-[100vw] flex justify-center">
                <img src="{{ asset('assets/SS.png') }}" class="sm:w-[200px] w-[150px]" alt="">
            </div>
            <div class="pulau2 w-[100vw] flex justify-center">
                <img src="{{ asset('assets/Floating Rocks.png') }}" class="sm:w-[200px] w-[150px]" alt="">
            </div>
            <div class="pulau3 w-[100vw] flex justify-center">
                <img src="{{ asset('assets/EO.png') }}" class="sm:w-[200px] w-[150px]" alt="">
            </div>
        </div>
        <div class="timeline mt-10 relative flex justify-center">
            <img src="{{ asset('assets/line.png') }}" class="absolute xl:w-10/12 w-full md:top-1 sm:top-3 xl:top-0 top-2" alt="">
            <img src="{{ asset('assets/point_passive.png') }}" class="absolute md:w-[4%] xl:w-[2%] w-[6%] xl:left-52 left-16"
                alt="">
            <img src="{{ asset('assets/point_passive.png') }}" class="absolute md:w-[4%] xl:w-[2%] w-[6%]" alt="">
            <img src="{{ asset('assets/point_passive.png') }}" class="absolute md:w-[4%] xl:w-[2%] w-[6%] xl:right-52 right-16"
                alt="">
        </div>
        <div class="active-timeline relative flex justify-center">
            <img src="{{ asset('assets/point_active.png') }}" class="active1 absolute md:w-[4%] xl:w-[2%] w-[6%] xl:left-52 left-16"
                alt="">
            <img src="{{ asset('assets/point_active.png') }}" class="active2 absolute md:w-[4%] xl:w-[2%] w-[6%] opacity-0"
                alt="">
            <img src="{{ asset('assets/point_active.png') }}"
                class="active3 absolute md:w-[4%] xl:w-[2%] w-[6%] xl:right-52 right-16 opacity-0" alt="">
        </div>
        <div class="text-timeline mt-10 md:space-x-24 font-bold flex justify-around">
            <h1
                class="text-xl font-bold bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text">
                16 Agustus</h1>
            <h1
                class="text-xl font-bold bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text">
                23 Agustus</h1>
            <h1
                class="text-xl font-bold bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text">
                30 Agustus</h1>
        </div>
        <div
            class="content mt-10 p-5 lg:w-1/2 h-[300px] overflow-y-auto overflow-x-hidden w-10/12 rounded-2xl text-center bg-[#3586ff3d] mx-auto text-black shadow-black shadow-lg backdrop-blur-md">
            <div class="content1 hidden">
                <h1 class="font-bold text-3xl">Performance of the Week</h1>
                <h5 class="font-bold text-xl">16 Agustus 2024</h5>

                <ul class="list-disc text-start ms-3 mt-5">
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, error?</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, molestias.</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed, delectus.</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, unde.</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, unde.</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, unde.</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, unde.</p>
                    </li>
                </ul>
            </div>
            <div class="content2 hidden">
                <h1 class="font-bold text-3xl">Performance of the Week</h1>
                <h5 class="font-bold text-xl">23 Agustus 2024</h5>

                <ul class="list-disc text-start ms-3">
                    <li>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus, reprehenderit.</p>
                    </li>
                    <li>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore, suscipit?</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, ea.</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, unde.</p>
                    </li>
                </ul>
            </div>
            <div class="content3 hidden">
                <h1 class="font-bold text-3xl">Performance of the Week</h1>
                <h5 class="font-bold text-xl">30 Agustus 2024</h5>

                <ul class="list-disc text-start ms-3">
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, odit!</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, totam.</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, sint.</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, minima.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="game-ukm flex justify-center space-x-5 mb-10" id="game-ukm">
        <a href="#">
            <div
                class="border rounded-xl bg-[#074174b3] backdrop-blur-sm shadow-white shadow-lg md:min-w-[200px] p-5 space-y-5 flex flex-col justify-center text-center transition-shadow hover:ease-in-out duration-200 hover:shadow-white hover:shadow-xl">
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
        <a href="#">
            <div
                class="border rounded-xl bg-[#074174b3] backdrop-blur-sm shadow-white shadow-lg md:min-w-[200px] p-5 space-y-5 flex flex-col justify-center text-center transition-shadow hover:ease-in-out duration-200 hover:shadow-white hover:shadow-xl">
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
    </section>

    <div id="background-wrap">
        <div id="pop1" class="bubble x1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="pop2" class="bubble x2">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="pop3" class="bubble x3">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="pop4" class="bubble x4">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="pop5" class="bubble x5">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="pop6" class="bubble x6">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="pop7" class="bubble x7">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="pop8" class="bubble x8">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="pop9" class="bubble x9">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="pop10" class="bubble x10">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div id="pop11" class="bubble x11">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    </div>
@endsection

@section('script')
    <script>
        AOS.init();

        const timelines = document.querySelector('.img-container');
        let timeWidth = timelines.offsetWidth;
        let amountToScroll = timeWidth - window.innerwidth;

        function getScrollAmount() {
            let timeWidth = timelines.scrollWidth;
            return -(timeWidth - window.innerWidth);
        }

        const tween = gsap.to(timelines, {
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

        function timelineScroll() {
            var pulauElement1 = document.querySelector('.pulau1');
            var pulauElement2 = document.querySelector('.pulau2');
            var pulauElement3 = document.querySelector('.pulau3');

            var timelineElement1 = document.querySelector('.active1');
            var timelineElement2 = document.querySelector('.active2');
            var timelineElement3 = document.querySelector('.active3');

            var content1 = document.querySelector('.content1');
            var content2 = document.querySelector('.content2');
            var content3 = document.querySelector('.content3');

            var width = (window.innerWidth / pulauElement1.getBoundingClientRect().left) * 100;

            // Clear previous animations
            content1.classList.remove('slide-in', 'slide-out');
            content2.classList.remove('slide-in', 'slide-out');
            content3.classList.remove('slide-in', 'slide-out');

            if (width != Infinity) {
                if (width > -130) {
                    timelineElement1.classList.remove('opacity-1');
                    timelineElement1.classList.add('opacity-0');
                } else {
                    timelineElement1.classList.remove('opacity-0');
                    timelineElement1.classList.add('opacity-1');

                    if (!content1.classList.contains('slide-in')) {
                        content1.classList.remove('hidden');
                        content1.classList.add('slide-in');
                        content2.classList.add('hidden');
                        content3.classList.add('hidden');
                    }
                }

                if (width < -130 || width > -55) {
                    timelineElement2.classList.remove('opacity-1');
                    timelineElement2.classList.add('opacity-0');

                } else {
                    timelineElement2.classList.remove('opacity-0');
                    timelineElement2.classList.add('opacity-1');

                    if (!content2.classList.contains('slide-in')) {
                        content2.classList.remove('hidden');
                        content2.classList.add('slide-in');
                        content1.classList.add('hidden');
                        content3.classList.add('hidden');
                    }
                }

                if (width < -55) {
                    timelineElement3.classList.remove('opacity-1');
                    timelineElement3.classList.add('opacity-0');
                } else {
                    timelineElement3.classList.remove('opacity-0');
                    timelineElement3.classList.add('opacity-1');

                    if (!content3.classList.contains('slide-in')) {
                        content3.classList.remove('hidden');
                        content3.classList.add('slide-in');
                        content2.classList.add('hidden');
                        content1.classList.add('hidden');
                    }
                }
            } else {
                timelineElement1.classList.remove('opacity-0');
                timelineElement1.classList.add('opacity-1');

                if (!content1.classList.contains('slide-in')) {
                    content1.classList.remove('hidden');
                    content1.classList.add('slide-in');
                    content2.classList.add('hidden');
                    content3.classList.add('hidden');
                }
            }
        }

        window.addEventListener('scroll', timelineScroll);
    </script>
@endsection
