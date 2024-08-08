<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/fc45e0c6e7.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-long-right.css' rel='stylesheet'>


    <style>
        .button-animate {}

        .slide-in-from-left {}

        .slide-in-from-right {}

        .slide-in-from-bottom {}


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
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- @vite('resources/css/app.css') --}}

</head>

<body>

    <div
        class = "animated-background fixed h-screen w-full bg-gradient-to-t from-[#4476CB] to-[#57C7D4] from-20% overflow-hidden">
    </div>
    <div
        class="fixed top-[-800px] left-[-500px] w-[1200px] h-[1200px] rounded-full blur-[500px] bg-[#4476CB] animation-blob">
    </div>
    <div
        class="fixed bottom-[-800px] right-[-800px] w-[1200px] h-[1200px] rounded-full blur-[500px] bg-[#79FFEF] animation-blob">
    </div>
    <!--Header-->
    <nav
        class="bg-[white]/10 z-20 backdrop-blur-md fixed top-0 left-0 w-[100%] flex justify-between px-10 py-4 items-center h-[64px]">
        <div class="text-2xl text-white">
            <i class="cursor-pointer fa-solid fa-chevron-left"></i>
        </div>
        <div class = "group z-10 button-animate">
            <a href=""
                class="backdrop-blur-sm bg-white/10 border-[1px] border-[#30518A] space-x-1 pl-3 pr-10 sm:pr-[100px] py-1 rounded-full  group-hover:bg-[#30518A]">
                <i class="text-[#30518A] group-hover:text-white fa-solid fa-magnifying-glass"></i>
                <span class = "text-[#30518A] group-hover:text-white">Search UKM</span>
            </a>

        </div>

    </nav>

    <!--First section-->
    <section id="first-section" class = "overflow-hidden relative">
        <div class = "px-[30px] md:px-[50px] xl:px-[100px] mx-auto text-center flex flex-row h-screen items-center">
            <img src = "{{ URL('img/Artboard 1_SS_4.png') }}"
                class = "slide-in-from-left img-shadow-1 absolute bottom-[0px] left-[-70px] w-[300px] md:w-[400px] rotate-[50deg]">
            <img src = "{{ URL('img/Artboard 1_SS_3.png') }}"
                class = "slide-in-from-right float img-shadow-2 absolute bottom-[90px] right-[-60px] w-[325px] md:w-[450px] rotate-[-50deg]">
            <div class = "mx-auto w-3/4 z-10">
                <h3 class = "slide-in-from-bottom text-white font-bold text-3xl text-center sm:text-5xl">Unit Kegiatan
                    Mahasiswa
                </h3>

                <div class = "group mt-7 button-animate slide-in-from-bottom">
                    <a
                        class = "backdrop-blur-sm bg-white/10 border-[1px] border-[#79FFEF] rounded-full py-3 px-7 space-x-3  group-hover:bg-[#79FFEF] group-hover:shadow-no-offset" id = "explore-button" href = "#card-section">
                        <span class = "font-bold text-white group-hover:text-[#30518A]">Explore</span>
                        <i class="text-white fa-solid fa-chevron-down group-hover:text-[#30518A]"></i>
                </a>
                </div>

            </div>
        </div>
    </section>

    <!--Card Section-->
    <section id="card-section" class = "">
        <!--Grid-->
        <div class="px-[30px] md:px-[50px] xl:px-[100px] py-[200px] gap-y-[200px] mx-auto text-center flex flex-wrap">
            @foreach ($ukms as $ukm){
                @if (!in_array($ukm->name, ['LK BEM', 'LK TPS', 'LK MPM', 'LK BPMF', 'LK PERSMA', 'LK PELMA'])){
                <!--Card Start-->
                <div
                    class = "slide-in-from-bottom relative backdrop-blur-sm bg-white/30 mx-auto py-10 pb-20 px-10 h-[315px] w-[270px] flex flex-col justify-center items-center gap-[15px] rounded-[25px]">
                    @if ($ukm->name =='UKM Orkestra' || $ukm->name =='UKM ASFS')
                    <div
                        class = "absolute w-[200px] h-[200px] top-[-90px] flex justify-center items-center">
                        <img src="{{ URL($ukm->logo_url) }}" alt="{{ $ukm->name }}">
                    </div>
                    @else
                    <div
                        class = "absolute w-[150px] h-[150px] top-[-90px] flex justify-center items-center">
                        <img src="{{ URL($ukm->logo_url) }}" alt="{{ $ukm->name }}">
                    </div>
                    @endif
                    <div class = "text-white font-bold text-[24px] leading-none text-center pt-[80px]">{{$ukm->name}}
                    </div>
                    <!--Slot & Price + Button -->
                    <div class = "flex flex-col justify-center items-center gap-[15px]">
                        <!--Slot & Price-->
                        <div class = "py-[5px] flex">
                            <div id = "show-slot"
                                class = "flex flex-col justify-center pl-[20px] pr-[20px] border-r-[1px]">
                                <div class = "text-white text-[40px] font-bold leading-tight">{{$ukm->current_slot}}</div>
                                <div class = "text-white text-[12px] m-[-2px] pb-[4px]">Slot left</div>
                            </div>

                            <div id = "show-price" class = "flex flex-col justify-center pr-[20px] pl-[20px]">
                                <div class = "text-white text-[40px] font-bold leading-tight">
                                        @if ($ukm->regist_fee == 0)
                                            0K
                                        @else
                                            {{ substr($ukm->regist_fee, 0, -3) }}K
                                        @endif
                                    </div>
                                <div class = "text-white text-[12px] m-[-2px] pb-[4px]">Price</div>
                            </div>
                        </div>
                        <!--Button-->
                        <div class = "group button-animate">
                            <form action="{{ route('user.ukm.id', ['id' => $ukm->id]) }}" method="GET">
                            <button
                                type = "submit" class = "px-[70px] bg-white rounded-full py-2 space-x-3  group-hover:bg-[#79FFEF] group-hover:shadow-no-offset" value = {{$ukm->id}}>
                                <span class = "text-black group-hover:text-[#30518A]">Details</span>
                            </button>
                        </form>
                        </div>
                    </div>
                </div>
                <!--Card End-->
            }
            @endif
                }
                @endforeach

        </div>
    </section>
</body>
<script>
    document.getElementById("explore-button").addEventListener('click', function(e){
        e.preventDefault();
        document.getElementById('card-section').scrollIntoView({behavior: 'smooth'});
    })
</script>

</html>
