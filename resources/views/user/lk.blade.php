<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/fc45e0c6e7.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-long-right.css' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>

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

  /* Apply the animation to the images */
  .rotate-animation-2 {
    animation: rotateLeftRight2 3s infinite alternate;
  }

  .rotate-animation-1 {
    animation: rotateLeftRight1 3s infinite alternate;
  }

.reveal{
            position: relative;
            transform: translateY(50px);
            opacity:0;
            transition: all 1s ease;
        }

        .reveal.active{
            opacity:1;
            transform: translateY(0px);

        }

        .glow-text {
            text-shadow:
                0 0 5px #57C7D4,
                0 0 10px #57C7D4;

            animation: glow 5s infinite;
        }

        @keyframes glow {
            100% {
                text-shadow:
                    0 0 5px #57C7D4,
                    0 0 10px #57C7D4,
                    0 0 20px #57C7D4,
                    0 0 30px #57C7D4
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

    @vite('resources/css/app.css')

</head>

<body>

    <div class = "fixed h-screen w-full bg-gradient-to-t from-[#4476CB] to-[#57C7D4] from-20% overflow-hidden">
    </div>
    <div
        class="fixed top-[-800px] left-[-500px] w-[1200px] h-[1200px] rounded-full blur-[500px] bg-[#4476CB] animation-blob">
    </div>
    <div
        class="fixed bottom-[-800px] right-[-800px] w-[1200px] h-[1200px] rounded-full blur-[500px] bg-[#79FFEF] animation-blob">
    </div>
    <!--Header-->
    <nav
        class="relative top-0 left-0 w-[100%] flex justify-between px-10 py-4 items-center h-[64px]">
        <div class="text-2xl text-white">
            <i class="cursor-pointer fa-solid fa-chevron-left"></i>
        </div>
    </nav>

    <!--First section-->
    <section id="first-section" class = "overflow-hidden relative">
        
        <div class = "mt-[-64px] px-[30px] md:px-[50px] xl:px-[100px] mx-auto text-center flex flex-row h-screen items-center">
            <img src = "{{ URL('asset/Artboard 1_SS_4.png') }}"
                class = "rotate-animation-1 img-shadow-1 absolute bottom-[0px] left-[-70px] w-[300px] md:w-[400px] rotate-[50deg]">
            <img src = "{{ URL('asset/Artboard 1_SS_3.png') }}"
                class = "rotate-animation-2 img-shadow-2 absolute bottom-[90px] right-[-60px] w-[325px] md:w-[450px] rotate-[-50deg]">
            <div class = "mx-auto w-3/4 z-10">
                <h3
                    class = "glow-text text-white font-bold text-3xl text-center sm:text-5xl">
                    Lembaga
                    Kemahasiswaan
                </h3>

                <div class = "group mt-7 slide-in-from-bottom">
                    <a class = "backdrop-blur-sm bg-white/10 border-[1px] border-[#79FFEF] rounded-full py-3 px-7 space-x-3  group-hover:bg-[#79FFEF] group-hover:shadow-no-offset"
                        id = "explore-button" href = "#card-section">
                        <span class = "font-bold text-white group-hover:text-[#30518A]">Explore</span>
                        <i class="text-white fa-solid fa-chevron-down group-hover:text-[#30518A]"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!--Card Section-->
    <section id="card-section" class = "">
        <div class = "px-[30px] md:px-[50px] xl:px-[100px]">
            <div class = "reveal group z-10 w-full sticky top-[30px] px-[0px] lg:px-[300px]">
                <a href=""
                    class="flex justify-center items-center w-full gap-2 backdrop-blur-sm bg-white/10 border-[1px] border-[#30518A] py-2 rounded-full group-hover:bg-[#30518A]">
                    <i class="text-[#30518A] group-hover:text-white fa-solid fa-magnifying-glass"></i>
                    <span class = "text-[#30518A] text-[16px] font-bold group-hover:text-white">Search LK</span>
                </a>
            </div>

            <!--Card Contain-->
            <div class="w-full py-[200px] gap-y-[200px] mx-auto text-center flex flex-wrap">
            
                @foreach ($ukms as $ukm)
                @if (in_array($ukm->name, ['LK BEM', 'LK TPS', 'LK MPM', 'LK BPMF', 'LK PERSMA', 'LK PELMA']))
                    <!--Card Start-->
                    <div
                        class = "reveal relative backdrop-blur-sm bg-white/30 mx-auto py-10 pb-20 px-10 h-[220px] w-[270px] flex flex-col justify-center items-center gap-[25px] rounded-[25px]">

                        <div class = "absolute w-[150px] h-[150px] top-[-90px] flex justify-center items-center">

                            @if ($ukm->logo_url)
                                <img src="{{ URL($ukm->logo_url) }}" alt="{{ $ukm->name }}">
                            @else
                            @endif
                        </div>
                        <div class = " text-white font-bold text-[24px] leading-none text-center pt-[80px]">
                            {{ $ukm->name }}
                        </div>
                        <!--Slot & Price + Button -->
                        <!--Button-->
                        <div class = "group button-animate">
                            <form action="{{ route('user.lk.id', ['id' => $ukm->id]) }}" class="action">
                                <button
                                    class = "px-[70px] bg-white rounded-full py-2 space-x-3  group-hover:bg-[#79FFEF] group-hover:shadow-no-offset">
                                    <span class = "text-black group-hover:text-[#30518A]">Details</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!--Card End-->
                @endif
            @endforeach
    
            </div>
        </div>
        
    </section>
</body>
<script>
    document.getElementById("explore-button").addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('card-section').scrollIntoView({
            behavior: 'smooth'
        });
    });

    window.addEventListener("scroll", function(){
        var reveals = document.querySelectorAll(".reveal");
        reveals.forEach(function(reveal){
            var windowHeight = window.innerHeight;
            var revealTop = reveal.getBoundingClientRect().top;
            var revealPoint = 0;

            if(revealTop < windowHeight-revealPoint){
                reveal.classList.add("active");
            }else{
                reveal.classList.remove("active");
            }
        });
    });
</script>

</html>
