@extends('user.layout.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
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
        class="maskot absolute lg:right-[-5vw] right-[-25vw] sm:top-[3000px] md:top-[3500px] lg:top-[4000px] xl:top-[5000px] lg:w-1/3 w-1/2">
    <img src="{{ asset('assets/VERDARA POSE 1.png') }}" alt="Verdara"
        class="maskot absolute lg:left-[-5vw] left-[-18vw] sm:top-[3000px] md:top-[3500px] lg:top-[4000px] xl:top-[5000px] lg:w-1/3 w-1/2">

    {{-- Video --}}
    <section class="video w-full xl:h-[120vh] z-50">
        <video src="{{ asset('assets/Video OH.mp4') }}" autoplay muted loop preload="auto"></video>
    </section>

    {{-- Timeline --}}
    <div class="flex justify-center mt-10">
        <h1 data-aos="fade-down" data-aos-once="true"
            class="text-7xl font-bold bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text">
            TIMELINE</h1>
    </div>
    <section class="timeline" id="timeline">
        <div class="img-container flex items-end w-[300vw] overflow-x-scroll mx-auto no-scrollbar">
            <div class="pulau1 w-[100vw] flex justify-center flex-col space-y-10">
                <img src="{{ asset('assets/SS.png') }}" class="mx-auto sm:w-[300px] w-[150px]" alt="">
                <button type="button"
                    class="16-aug-button inline-block w-1/4 rounded bg-primary px-6 pb-2 pt-2.5 mx-auto font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none">
                    Performances
                </button>
            </div>
            <div class="pulau2 w-[100vw] flex justify-center flex-col space-y-10">
                <img src="{{ asset('assets/Floating Rocks.png') }}" class="mx-auto sm:w-[300px] w-[150px]" alt="">
                <button type="button"
                    class="23-aug-button inline-block w-1/4 rounded bg-primary px-6 pb-2 pt-2.5 mx-auto font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none">
                    Performances
                </button>
            </div>
            <div class="pulau3 w-[100vw] flex justify-center flex-col space-y-10">
                <img src="{{ asset('assets/EO.png') }}" class="mx-auto sm:w-[300px] w-[150px]" alt="">
                <button type="button"
                    class="30-aug-button inline-block w-1/4 rounded bg-primary px-6 pb-2 pt-2.5 mx-auto font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none">
                    Performances
                </button>
            </div>
        </div>
        <div class="timeline mt-10 relative flex justify-center">
            <img src="{{ asset('assets/line.png') }}" class="absolute xl:w-10/12 w-full md:top-1 sm:top-3 xl:top-0 top-2"
                alt="">
            <img src="{{ asset('assets/point_passive.png') }}"
                class="absolute md:w-[4%] xl:w-[2%] w-[6%] xl:left-52 left-16" alt="">
            <img src="{{ asset('assets/point_passive.png') }}" class="absolute md:w-[4%] xl:w-[2%] w-[6%]" alt="">
            <img src="{{ asset('assets/point_passive.png') }}"
                class="absolute md:w-[4%] xl:w-[2%] w-[6%] xl:right-52 right-16" alt="">
        </div>
        <div class="active-timeline relative flex justify-center">
            <img src="{{ asset('assets/point_active.png') }}"
                class="active1 active-timeline absolute md:w-[4%] xl:w-[2%] w-[6%] xl:left-52 left-16" alt="">
            <img src="{{ asset('assets/point_active.png') }}"
                class="active2 active-timeline absolute md:w-[4%] xl:w-[2%] w-[6%] opacity-0" alt="">
            <img src="{{ asset('assets/point_active.png') }}"
                class="active3 active-timeline absolute md:w-[4%] xl:w-[2%] w-[6%] xl:right-52 right-16 opacity-0"
                alt="">
        </div>
        <div class="text-timeline mt-10 md:space-x-24 font-bold flex justify-around">
            <h1
                class="text-2xl font-bold bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text">
                16 Agustus</h1>
            <h1
                class="text-2xl font-bold bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text">
                23 Agustus</h1>
            <h1
                class="text-2xl font-bold bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text">
                30 Agustus</h1>
        </div>
    </section>

    {{-- Game & UKM --}}
    <section class="game-ukm flex justify-center space-x-5 mb-10" id="game-ukm">
        <a href="#">
            <div
                class="border rounded-xl bg-[#074174b3] backdrop-blur-sm shadow-black shadow-lg md:min-w-[200px] p-5 space-y-5 flex flex-col justify-center text-center transition-shadow hover:ease-in-out duration-200 hover:shadow-white hover:shadow-xl">
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
                class="border rounded-xl bg-[#074174b3] backdrop-blur-sm shadow-black shadow-lg md:min-w-[200px] p-5 space-y-5 flex flex-col justify-center text-center transition-shadow hover:ease-in-out duration-200 hover:shadow-white hover:shadow-xl">
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

    <section class="faq w-screen flex justify-center items-center flex-col top-16 mt-[100px] h-fit" id="faq">
        <div class="flex justify-center items-center h-24 text-3xl font-bold">
            <h1 class="faq-title text lg:text-5xl md:text-4xl text-center leading-normal w-4/5 max-md:text-3xl"
                data-text="Frequently Asked Questions">Frequently Asked Questions</h1>
        </div>

        <div class="chats grid sm:w-[380px] max-sm:w-[310px] h-[550px] bg-gray-200 my-10 rounded-3xl overflow-hidden">
            <div class="chat-header w-full h-[70px] rounded-t-2xl flex justify-start items-center">
                <img src="{{ asset('assets/VERDARA POSE 1.png') }}" alt="faq-maskot"
                    class="rounded-full h-11 bg-yellow-400 mx-4">
                <p class="text-lg font-bold max-sm:text-base">Bomby</p>
            </div>
            <div class="chat-area pt-4 chat-section overflow-y-scroll overflow-x-hidden">
                <div class="bombyAnswer flex">
                    <img src="{{ asset('assets/VERDARA POSE 1.png') }}" alt="faq-maskot"
                        class="rounded-full h-8 bg-yellow-400 ml-4 mr-3">
                    <p
                        class="chat overflow-visible text-black sm:text-base max-sm:text-sm sm:w-[250px] max-sm:w-[200px] px-3 py-2
                        bg-white rounded-tr-2xl rounded-br-2xl rounded-bl-2xl my-5">
                        Halooo 😁, perkenalkan namaku Bomby. Aku akan menjawab pertanyaan kalian seputar acara Battle of
                        Minds.
                    </p>
                </div>
            </div>

            <div class="chat-footer w-full h-[58px] rounded-b-2xl flex justify-between place-self-end items-center">
                <p class="ml-5 font-bold max-sm:text-xs">Choose your question here</p>
                <div class="flex items-center h-full" data-twe-dropdown-position="dropup">
                    <i class="fa-regular fa-comment-dots mx-5 text-2xl hover:cursor-pointer" type="button"
                        id="dropdownMenuButton1" data-twe-dropdown-toggle-ref aria-expanded="false" data-twe-ripple-init
                        data-twe-ripple-color="light">
                    </i>
                    <ul class="absolute z-[1000] float-left m-0 hidden min-w-max h-[180px] overflow-y-scroll list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-base shadow-lg data-[twe-dropdown-show]:block"
                        aria-labelledby="dropdownMenuButton1" data-twe-dropdown-menu-ref>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="0">Apa itu Battle of Minds
                                (BoM)?
                            </p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="1">Ada berapa babak dalam
                                acara
                                BoM?</p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="2">BoM diadakan secara
                                onsite/online?</p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="3">Siapa saja yang boleh
                                mendaftar
                                BoM?</p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="4">Apakah satu orang bisa
                                mendaftar
                                lebih dari satu tim?</p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="5">Berapa biaya pendaftaran
                                BoM?
                            </p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="6">Apakah uang deposit akan
                                dikembalikan setelah acara berakhir?
                            </p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="7">Bagaimana proses validasi
                                pembayaran?</p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="8">Apabila tim tidak dapat
                                hadir
                                pada hari - h acara apa konsekuensinya?</p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="9">Apakah peserta akan
                                mendapatkan
                                konsumsi?</p>
                        </li>
                        <li>
                            <p class="question w-[400px] max-sm:w-[300px] block border-b-2 bg-white px-4 py-2 text-sm max-sm:text-xs font-bold hover:cursor-pointer"
                                href="#" data-twe-dropdown-item-ref question-code="10">Apakah acara ini
                                menyediakan
                                transportasi untuk peserta?</p>
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

            console.log(width);

        }

        window.addEventListener('scroll', timelineScroll);

        const chatSection = document.querySelector('.chat-section');

        const answerArray = [
            'Battle of Minds adalah lomba yang memadukan konsep logika matematika dengan permainan yang seru dan menantang di bidang Science🧪, Technology💻, Engineering⚙️, and Math✖️. ',
            'Lomba ini terdiri dari tiga babak, yakni dua babak eliminasi dan satu babak final. Untuk mendapatkan informasi lebih rinci, akan diadakan TM 1 untuk babak pertama dan TM 2 untuk babak kedua.',
            'Setiap peserta yang mengikuti kompetisi Battle of Minds diwajibkan hadir secara ONSITE, di Petra Christian University untuk babak 1. Lalu, untuk babak 2 dan babak final akan dilakukan ONSITE di Fairway Nine Mall Surabaya 🔥🔥',
            'Kamu dapat mengikuti kompetisi Battle Of Minds 2024 jika kamu adalah siswa/i SMA/SMK di Indonesia yaaa 😙🏫',
            'Tidak, setiap peserta tidak boleh mewakili lebih dari 1 tim 😑😑',
            'Pendaftaran BoM free 🤩🤩!! Eitssss tapi peserta diwajibkan melakukan deposit sebesar Rp200.000 yang dibayarkan melalui Rekening BCA 2981104724 A.n/ MARCELINUS ANTHONY TEGUH, dan memberikan kode 1 pada akhir nominal seperti: 200.001 dan memberikan keterangan berita acara: BOM24-(namatim) contoh: BOM24-timhore',
            'Iyaaa tenang aja uang deposit pasti dikembalikan, selama kalian mengikuti acara dengan baik, mematuhi peraturan, dan tidak terdiskualifikasi 😙😙',
            'Setelah pendaftaran melalui website telah berhasil, panitia akan memberikan email konfirmasi dalam waktu 1 x 24 jam bahwa pendaftaran kalian tervalidasi.',
            'Sayang sekali jika ada tim yang tidak hadir pada hari-h acara, maka tim tersebut akan didiskualifikasi dan uang deposit tidak akan dikembalikan 🥲🥲',
            'Tenang aja, setiap peserta akan mendapatkan konsumsi kok 🥰🍴',
            'Sayang sekali, tetapi pihak Battle of Minds tidak menyediakan fasilitas transportasi untuk peserta 😔😔'

        ]

        var replyUser = function(answer) {
            const bombyResponse = document.createElement('div');
            bombyResponse.classList.add('bombyAnswer', 'pt-4', 'flex');

            const bombyProfile = document.createElement('img');
            bombyProfile.src = 'assets/VERDARA POSE 1.png';
            bombyProfile.alt = 'faq-maskot';
            bombyProfile.classList.add('rounded-full', 'h-8', 'bg-yellow-400', 'ml-4', 'mr-3');

            const replyText = document.createElement('p');
            replyText.classList.add('chat', 'overflow-visible', 'text-black', 'sm:text-base', 'max-sm:text-sm',
                'sm:w-[250px]', 'max-sm:w-[200px]', 'px-3', 'py-2',
                'bg-white', 'rounded-tr-2xl', 'rounded-br-2xl', 'rounded-bl-2xl', 'my-5');
            replyText.textContent = answer;

            bombyResponse.appendChild(bombyProfile);
            bombyResponse.appendChild(replyText);

            chatSection.appendChild(bombyResponse);
        }

        function makeChat(e) {
            var questionText = e.currentTarget.innerHTML;
            var questionCode = e.currentTarget.getAttribute('question-code');

            const userChat = document.createElement('div');
            userChat.classList.add('userAnswer', 'pt-5', 'flex', 'justify-end');
            const textChat = document.createElement('p');
            textChat.classList.add('chat', 'user-chat', 'overflow-visible', 'text-white', 'sm:text-base', 'max-sm:text-sm',
                'px-3', 'py-2',
                'backdrop-opacity-80', 'rounded-tr-2xl', 'rounded-bl-2xl', 'rounded-tl-2xl', 'mr-4', 'sm:w-[250px]',
                'max-sm:w-[200px]');
            textChat.textContent = questionText;

            userChat.appendChild(textChat);
            chatSection.appendChild(userChat);
            chatSection.scrollTop = chatSection.scrollHeight;

            setTimeout(function() {
                replyUser(answerArray[questionCode]);
                chatSection.scrollTop = chatSection.scrollHeight;
            }, 1000);
        }

        document.querySelectorAll('.question').forEach(item => {
            item.addEventListener('click', makeChat);
        });

        $('.16-aug-button').on('click', function() {
            Swal.fire({
                title: 'Performance of the Week',
                width: 1200,
                html: `<h5 class="font-bold text-xl text-center">16 Agustus 2024</h5>
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
                </ul>`,
            });
        });

        $('.23-aug-button').on('click', function() {
            Swal.fire({
                title: 'Performance of the Week',
                width: 1200,
                html: `<h5 class="font-bold text-xl text-center">23 Agustus 2024</h5>
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
                </ul>`,
            });
        });

        $('.30-aug-button').on('click', function() {
            Swal.fire({
                title: 'Performance of the Week',
                width: 1200,
                html: `<h5 class="font-bold text-xl text-center">30 Agustus 2024</h5>
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
                </ul>`,
            });
        });
    </script>
@endsection
