<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembayaran UKM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      body{
        background-image: url('/img/EO_Edit.jpg');
        background-size:cover;
        background-repeat: no-repeat;
        background-position: center;
      }

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
          $('#myButton').on('click', function() {
            Swal.fire({
              title: 'Panduan pembayaran UKM',
              html: '1.ABC <br> 2.CDE <br> 3.EFG',
              confirmButtonText: 'Tutup',
              showCloseButton: true
            });
          });
        });
      </script>  
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen px-4 sm:px-6">
    <div class="bg-black bg-opacity-50 rounded-lg p-6 shadow-lg max-w-3xl w-full mt-8 mb-8 backdrop-blur">
    @if($status_pembayaran == 0 && !$url)
    {{-- belum bayar & belum disetujui --}}
    <form method="POST" action={{ route('user.pendaftaran.payment') }} enctype="multipart/form-data">
      @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base text-slate-50 leading-7 pb-6">Pembayaran UKM</h2>
            <h2 class="text-base text-slate-50 text-center leading-7 pb-2">Nominal: Rp. {{$price}}</h2>
            <h1 class="font-semibold text-xl text-center text-slate-50 leading-7">Kode Unik Anda:</h1>
            <h1 class="font-semibold text-xl text-center text-slate-50 leading-7">{{$code}}</h1>

          <div class="flex items-center justify-center mt-6">
            <button type="button" id="myButton" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Lihat Panduan Pembayaran</button>
          </div>

          <div class="flex items-center justify-center mt-6 pb-6">
            <img src="\img\image.png"  style="width:60%; height:60%" alt="">
          </div>

          
<label class="block pt-2 mt-2 mb-2 text-sm font-medium text-slate-50 dark:text-white" for="file_input">Upload Bukti Pembayaran</label>
              <input type="file"
                class="w-full text-gray-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 file:py-2 file:px-4 file:mr-4 file:bg-indigo-600 file:hover:bg-indigo-500 file:text-white rounded" name="payment" />
              {{-- <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p> --}}
              <input type="hidden" name="ukm_id" value={{ $ukm_id }}>

          


      
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="{{ route('user.home') }}"><button type="button" class="text-sm font-semibold leading-6 text-slate-50">Batal</button></a>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
        </div>

        
      </form>
      @elseif($status_pembayaran == 1)
      <!-- Pesan pembayaran disetujui -->
      <h1 class="font-semibold text-xl text-center text-slate-50 leading-7">Selamat!</h1>
      <h1 class="font-semibold text-xl text-center text-slate-50 leading-7">Pembayaran disetujui. <br>Anda telah diterima di {{$ukm_name}}.</h1>
      <div class="flex justify-center mt-6">
        <a href="{{ route('user.home') }}">
            <button type="button" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kembali ke home</button>
        </a>
      </div>
      @elseif($url)
        <!-- Pesan pembayaran sedang direview -->
        <h1 class="font-semibold text-xl text-center text-slate-50 leading-7">Pembayaran sedang di review</h1>
      <h1 class="font-semibold text-xl text-center text-slate-50 leading-7">Cek halaman ini secara berkala untuk melihat status pembayaran</h1>
      <div class="flex justify-center mt-6">
        <a href="{{ route('user.home') }}">
            <button type="button" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kembali ke home</button>
        </a>
      </div>
      @endif
    </div>
    @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: '{{ session('success') }}',
            confirmButtonText: 'Tutup'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '{{ route("user.home") }}';
            }
        });
    </script>
@endif

@if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: '{{ session('error') }}',
            confirmButtonText: 'Tutup'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = '{{ route("user.home") }}';
            }
        });
    </script>
@endif

    
</body>
</html>