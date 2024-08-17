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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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

        @media screen and (min-width: 500px) and (max-width: 700px) {

            .login-button a {
                width: 350px;
                height: 60px;
                font-size: 24px;
            }

            .google-logo {
                width: 40px;
            }
        }

        @media screen and (max-width: 500px) {

            .login-container {
                padding-right: 2rem !important;
                padding-left: 2rem !important;
            }

            .login-button a {
                width: 280px;
                height: 50px;
                font-size: 20px;
            }

            .google-logo {
                width: 30px;
                padding-right: 10px;
            }

        }
    </style>
</head>

<body>
    {{-- sptw dpt video res tinggi :D --}}
    {{-- <video src="{{ asset('assets/SS_Motion.mp4') }}" loop autoplay muted class="absolute w-[100vh] h-[100vh]"></video> --}}
@if (session()->has('guest'))
    <script>
        Swal.fire('Error', '{{ session('guest') }}', 'error');
    </script>
@endif
{{-- @dd(session('ukm_redirect_slug')) --}}
    <section class="login-container sm:space-y-10 space-y-3 bg-[#0000004d] sm:p-10 rounded-2xl backdrop-blur-sm p-5">
        <h1
            class="font-bold sm:text-6xl md:text-8xl text-5xl text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text">
            Open House 2024</h1>
        <div class="login-button flex flex-col justify-center mx-auto">
            <a href="{{ route('user.auth', ['type' => 'user']) }}"><img src="{{ asset('assets/Google.png') }}"
                    class="google-logo p-2"> <span class="span1">Sign In with PCU Email</span>
        </div>
    </section>
</body>

</html>
