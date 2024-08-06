<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    {{-- CDN for tailwind --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="{{ asset('css/bubble.css') }}">

    <style>
        @font-face {
            font-family: GeneralSansBold;
            src: url('{{ asset('font/GeneralSans-Bold.otf') }}');
        }

        a,
        h1 {
            font-family: GeneralSansBold !important;
        }

        body {
            background-image: url('{{ asset('assets/SS_Edit.png') }}');
            padding: 0;
            overflow-x: hidden;
            overflow-y: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .login-button {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 1vh;
            padding-bottom: 2vh;
        }

        .google-logo {
            width: 60px;
            padding-right: 20px;
        }

        .login-button a,
        login-container {
            user-select: none;
            background: rgb(0, 0, 0, 0.2);
            height: 80px;
            width: 400px;
            border-radius: 20px;
            font-size: 26px;
            border: none;
            color: white;
            cursor: pointer;
            transition: transform .25s;
            font-weight: bold;
            overflow: hidden;
            display: flex;
            justify-content: center;
            box-shadow: 0 0 3px lightyellow, 0 0 15px lightyellow, 0 0 20px lightyellow;
            align-items: center;
            transform: 0.3s ease;
        }

        .login-button a:hover {
            transform: scale(1.04);
        }

        @media screen and (max-width: 425px) {
            .login-button a {
                width: 350px;
                height: 150px;
                flex-direction: column;
                text-align: center;
                padding: 1rem;
            }

            .google-logo {
                padding-right: 0;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    {{-- sptw dpt video res tinggi :D --}}
    {{-- <video src="{{ asset('assets/SS_Motion.mp4') }}" loop autoplay muted class="absolute w-[100vh] h-[100vh]"></video> --}}

    <section class="login-container space-y-10 bg-[#0000004d] sm:p-10 rounded-2xl backdrop-blur-sm">
        <h1
            class="font-bold sm:text-8xl text-6xl text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] inline-block text-transparent bg-clip-text">
            Open House 2024</h1>
        <div class="login-button flex flex-col justify-center mx-auto">
            <a href="{{ route('user.auth') }}"><img src="{{ asset('assets/Google.png') }}" class="google-logo"> <span
                    class="span1">Sign In with PCU Email</span></button>
        </div>

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
    </section>
</body>

</html>
