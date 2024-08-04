@extends('user.layout.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bubble.css') }}">
@endsection

@section('content')
    <img src="{{ asset('assets/Coral_2.png') }}" alt="Coral"
        class="absolute sm:max-md:top-[1000px] md:max-lg:top-[600px] lg:top-[1000px] top-[400px] right-[-8vw] rotate-[-30deg] w-1/4">
    <img src="{{ asset('assets/Coral_1.png') }}" alt="Coral"
        class="absolute sm:max-md:top-[1500px] top-[800px] lg:top-[1500px] left-[-8vw] rotate-[30deg] w-1/4">
    <img src="{{ asset('assets/Flower_2.png') }}" alt="Flower"
        class="absolute sm:max-md:top-[2000px] top-[1200px] lg:top-[2000px] right-[-8vw] rotate-[-30deg] w-1/4">
    <img src="{{ asset('assets/Flower_3.png') }}" alt="Flower"
        class="absolute sm:max-md:top-[2500px] top-[1600px] lg:top-[2500px] left-[-8vw] rotate-[30deg] w-1/4">
    <section class="video w-full md:h-screen lg:h-[120vh] z-50">
        <video src="{{ asset('assets/Video OH.mp4') }}" autoplay muted loop preload="auto"></video>
    </section>
    <section class="timeline">
        <div class="flex justify-center">
            <h1 data-aos="fade-down" data-aos-once="true"
                class="text-7xl font-bold bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text">
                TIMELINE</h1>
        </div>
        <div class="img-container flex items-end w-[300vw] overflow-x-scroll mx-auto no-scrollbar">
            <div class="pulau1 w-[100vw] flex justify-center">
                <img src="{{ asset('assets/SS.png') }}" class="w-[200px]" alt="">
            </div>
            <div class="pulau2 w-[100vw] flex justify-center">
                <img src="{{ asset('assets/Floating Rocks.png') }}" class="w-[200px]" alt="">
            </div>
            <div class="pulau3 w-[100vw] flex justify-center">
                <img src="{{ asset('assets/EO.png') }}" class="w-[200px]" alt="">
            </div>
        </div>
        <div class="timeline mt-10 relative flex justify-center">
            <img src="{{ asset('assets/line.png') }}" class="absolute w-10/12 top-1 sm:top-0" alt="">
            <img src="{{ asset('assets/point_passive.png') }}" class="absolute md:w-[2%] w-[5%] md:left-52 left-16"
                alt="">
            <img src="{{ asset('assets/point_passive.png') }}" class="absolute md:w-[2%] w-[5%]" alt="">
            <img src="{{ asset('assets/point_passive.png') }}" class="absolute md:w-[2%] w-[5%] md:right-52 right-16"
                alt="">
        </div>
        <div class="active-timeline relative flex justify-center">
            <img src="{{ asset('assets/point_active.png') }}" class="active1 absolute md:w-[2%] w-[5%] md:left-52 left-16"
                alt="">
            <img src="{{ asset('assets/point_active.png') }}" class="active2 absolute md:w-[2%] w-[5%] opacity-0"
                alt="">
            <img src="{{ asset('assets/point_active.png') }}"
                class="active3 absolute md:w-[2%] w-[5%] md:right-52 right-16 opacity-0" alt="">
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
        <div class="content mt-10 p-5 w-1/2 rounded-2xl text-center bg-white mx-auto">
            <h1 class="content1 font-bold text-5xl hidden">Content1</h1>
            <h1 class="content2 font-bold text-5xl hidden">Content2</h1>
            <h1 class="content3 font-bold text-5xl hidden">Content3</h1>
        </div>
    </section>

    <section class="game-ukm flex justify-center space-x-5 mb-10">
        <a href="#">
            <div
                class="border rounded-xl bg-[#B18AEA5a] backdrop-blur-xl shadow-white shadow-lg md:min-w-[200px] p-5 space-y-5 flex flex-col justify-center text-center transition-shadow hover:ease-in-out duration-200 hover:shadow-white hover:shadow-xl">
                <span class="text-center mx-auto sm:h-[120px] sm:w-[150px] h-[60px] w-[75px]">
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
                class="border rounded-xl bg-[#B18AEA5a] backdrop-blur-xl shadow-white shadow-lg md:min-w-[200px] p-5 space-y-5 flex flex-col justify-center text-center transition-shadow hover:ease-in-out duration-200 hover:shadow-white hover:shadow-xl">
                <span class="text-center mx-auto sm:h-[120px] sm:w-[135px] h-[60px] w-[75px]">
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
