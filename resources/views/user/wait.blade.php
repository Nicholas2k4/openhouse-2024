<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembayaran UKM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('assets/LOGO OPENHOUSE SEMIFINAL.png') }}">
    <style>
        body {
            background-image: url('/img/EO_Edit.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .image {
            max-width: 30%;
            height: auto;
            margin-bottom: 20px;
        }

        a:hover {
            text-decoration: underline !important;
        }

        @font-face {
            font-family: GeneralSans;
            src: url('{{ asset('font/GeneralSans-Regular.otf') }}');
        }

        @font-face {
            font-family: GeneralSansBold;
            src: url('{{ asset('font/GeneralSans-Bold.otf') }}');
        }

        @font-face {
            font-family: GeneralSansSemiBold;
            src: url('{{ asset('font/GeneralSans-Semibold.otf') }}');
        }

        @font-face {
            font-family: GeneralSansItalic;
            src: url('{{ asset('font/GeneralSans-Italic.otf') }}');
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        span,
        button {
            font-family: GeneralSansBold !important;
        }

        p {
            font-family: GeneralSans !important;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen px-4 sm:px-6">
    @if($status_file == 0)
    <div class="bg-black bg-opacity-50 rounded-lg p-6 shadow-lg max-w-3xl w-full mt-8 mb-8 backdrop-blur container">
        <h1 class="sm:text-2xl text-2xl font-bold text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mb-5">Pendaftaran berhasil</h1>
        <br>
        <h2 class="font-semibold text-xl text-center text-slate-50 leading-7">Silakan cek halaman ini <br>secara berkala untuk melanjutkan <br>ke pembayaran</h2>
        <img src="/assets/VERDARA POSE 1.png" alt="" class="image">
        @if($ukm_slug == 'vg')
        <h2 class="font-semibold text-xl text-center text-slate-50 leading-7">Bagi UKM Vocal Group: harap mengisi jadwal wawancara di link berikut</h2>
        <a href="https://petra.id/Audisi_VocalGroup_OH24" class="sm:text-2xl text-2xl font-bold text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mb-5 hover:underline">
            petra.id/Audisi_VocalGroup_OH24
        </a>
        @elseif($ukm_slug == 'esport')
        <h2 class="font-semibold text-xl text-center text-slate-50 leading-7">Mohon mengisi google form seleksi di bawah ini sesuai cabang e-sport Anda:</h2>
        <a href="https://forms.gle/V1wkf3Kng1jxF1C19" class="sm:text-2xl text-2xl font-bold text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mb-5 hover:underline">
            Mobile Legends
        </a>
        <a href="https://forms.gle/vVi1tuWstnvgzUba7" class="sm:text-2xl text-2xl font-bold text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mb-5 hover:underline">
            Valorant
        </a>
        <a href="https://docs.google.com/forms/d/1NVeJYBNW-tAEnk5-8VozH35iaiOImc4w8VhJvAwwOcs/edit?ts=66b7753d#responses" class="sm:text-2xl text-2xl font-bold text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mb-5 hover:underline">
            Ladies + selain ML & Valorant
        </a>
        @endif
        <a href="{{ route('user.home') }}" class="button">
            <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kembali ke halaman utama</button>
        </a>
    </div>
    @elseif($status_file == 2)
    <div class="bg-black bg-opacity-50 rounded-lg p-6 shadow-lg max-w-3xl w-full mt-8 mb-8 backdrop-blur container">
        <h1 class="sm:text-2xl text-2xl font-bold text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mb-5">Pemberitahuan</h1>
        <br>
        <h2 class="font-semibold text-xl text-center text-slate-50 leading-7">Mohon maaf, anda belum lolos UKM {{$ukm_slug}}.</h2>
        <img src="/assets/VERDARA POSE 1.png" alt="" class="image">
        <a href="{{ route('user.home') }}" class="button">
            <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kembali ke halaman utama</button>
        </a>
    </div>
    @endif
</body>

</html>
