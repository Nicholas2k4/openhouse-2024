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

        p{
          font-family: GeneralSans !important;
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
                  html: '<div style="text-align: justify; text-justify: left;">' +
                        '<p><b>1.</b> Scan QRIS yang tertera di layar</p>' +
                        '<p><b>2.</b> Masukan nominal pembayaran sesuai yang tertera di layar</p>' +
                        '<p><b>3.</b> Berita acara ditulis: (NRP) (UKM) (Kode unik). Kode unik berupa 4 karakter sesuai yang tertera di layar. Contoh: C14229999 Basket XyZa</p>' +
                        '<p><b>4.</b> Screenshot dan upload bukti pembayaran di tempat yang sudah disediakan dengan format (.PNG/.JPG/.JPEG/.HEIC) dengan ukuran maksimal 5 MB</p>' +
                        '<p><b>5.</b> Tekan tombol submit</p>' +
                        '<p><b>6.</b> Cek halaman ini secara berkala untuk melihat status pembayaran Anda</p>' +
                        '</div>',
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
    <form method="POST" action={{ route('pendaftaran.payment') }} enctype="multipart/form-data">
      @csrf
        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="sm:text-2xl text-2xl font-bold text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mb-5">Pembayaran UKM</h2>
            <h2 class="text-base text-slate-50 text-center leading-7 pb-2">Nominal: Rp. {{ number_format($price, 0, ',', '.') }}</h2>
            <h1 class="font-semibold text-xl text-center text-slate-50 leading-7">Kode Unik Anda:</h1>
            <h1 class="sm:text-2xl text-2xl font-bold text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mb-5">{{$code}}</h1>

          <div class="flex items-center justify-center mt-6">
            <button type="button" id="myButton" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Lihat Panduan Pembayaran</button>
          </div>

          <div class="flex items-center justify-center mt-6 pb-6">
            <img src="{{ asset('/assets/QR code.png') }}"  style="width:60%; height:60%" alt="QR CODE">
          </div>

          
<label class="block pt-2 mt-2 mb-2 text-sm font-medium text-slate-50 dark:text-white" for="file_input">Upload Bukti Pembayaran</label>
              <input type="file"
                class="w-full text-gray-500 font-medium text-sm bg-gray-100 file:cursor-pointer cursor-pointer file:border-0 file:py-2 file:px-4 file:mr-4 file:bg-indigo-600 file:hover:bg-indigo-500 file:text-white rounded" name="payment" />
              {{-- <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p> --}}
              <input type="hidden" name="ukm_id" value={{ $ukm_id }}>
              @error('payment')
            <div class="text-red-500">{{ $message }}</div>
        @enderror

          


      
      
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="{{ route('user.home') }}"><button type="button" class="text-sm font-semibold leading-6 text-slate-50">Batal</button></a>
          <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
        </div>

        
      </form>
      @elseif($status_pembayaran == 1)
      <!-- Pesan pembayaran disetujui -->
      <h1 class="font-semibold text-xl text-center text-slate-50 leading-7">Selamat!</h1>
      @if($ukm_name == 'UKM Esport' || $ukm_name == 'UKM Menwa' || $ukm_name == 'UKM Orkestra')
      <h1 class="font-semibold text-xl text-center text-slate-50 leading-7">Anda telah diterima di {{$ukm_name}}.</h1>
      @else
      <h1 class="font-semibold text-xl text-center text-slate-50 leading-7">Pembayaran disetujui. <br>Anda telah diterima di {{$ukm_name}}.</h1>
      @endif
      <div class="flex justify-center mt-6">
        <a href="{{ route('user.home') }}">
            <button type="button" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kembali ke home</button>
        </a>
      </div>
      @elseif($status_pembayaran == 2)
      {{-- ditolak --}}
      <h1 class="font-semibold text-xl text-center text-slate-50 leading-7">Pembayaran ditolak</h1>
      <h1 class="font-semibold text-xl text-center text-slate-50 leading-7">Silakan hubungi admin untuk memproses hal ini.</h1>
      <div class="flex justify-center mt-6">
        <a href="{{ route('user.home') }}">
            <button type="button" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kembali ke home</button>
        </a>
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