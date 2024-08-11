<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembayaran UKM</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
        margin-bottom: 20px; /* Adds some space between the image and button */
      }

      .button {
        margin-top: 20px;
      }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen px-4 sm:px-6">
    <div class="bg-black bg-opacity-50 rounded-lg p-6 shadow-lg max-w-3xl w-full mt-8 mb-8 backdrop-blur container">
        <h1 class="font-semibold text-xl text-center text-slate-50 leading-7">Pendaftaran berhasil</h1>
        <br>
        <h2 class="font-semibold text-xl text-center text-slate-50 leading-7">Silakan cek halaman ini <br>secara berkala untuk melanjutkan <br>ke pembayaran</h2>
        <img src="/assets/VERDARA POSE 1.png" alt="" class="image">
        @if($ukm_slug == 'vg')
        <h2 class="font-semibold text-xl text-center text-slate-50 leading-7">Bagi UKM Vocal Group: harap mengisi jadwal wawancara di link berikut</h2>
        <h2 class="font-semibold text-xl text-center text-slate-50 leading-7">ini link google sheet</h2>
        @endif
        <a href="{{ route('user.home') }}" class="button">
            <button class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kembali ke halaman utama</button>
        </a>
    </div>
</body>
</html>
