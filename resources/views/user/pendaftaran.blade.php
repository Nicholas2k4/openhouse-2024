<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OPENHOUSE | Pendaftaran UKM</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('assets/LOGO OPENHOUSE SEMIFINAL.png') }}">
    <style>
        body {

            background-image: url('/img/EO_Edit.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        input,
        textarea {
            font-family: GeneralSans !important;
            font-size: 14px;
            /* Optional: Adjust the font size as needed */
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
    </style>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen px-4 sm:px-6">
    @if (session()->has('login'))
        <script>
            Swal.fire('Success', '{{ session('login') }}', 'success');
        </script>
    @endif
    <div class="bg-black bg-opacity-50 rounded-lg p-6 shadow-lg max-w-3xl w-full mt-8 mb-8 backdrop-blur">
        <form method="POST" action={{ route('pendaftaran.store') }}>
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-2">
                    <h2
                        class="sm:text-2xl text-2xl font-bold text-center bg-gradient-to-r from-[#DEC47C] via-[#F7EECF] to-[#DEC47C] text-transparent bg-clip-text mb-5">
                        Pendaftaran {{$ukm_name}}</h2>
                    <p class=" text-base leading-6 text-slate-50 text-center">Silakan mengisi form ini dengan benar.</p>


                    <div class="border-b border-gray-900/10 pb-6">

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="first-name"
                                    class="block max-sm:text-sm font-medium leading-6 text-slate-50 ">Nama
                                    lengkap</label>
                                <div class="mt-2">
                                    <input type="text" value="{{ $name }}" name="name" id="first-name"
                                        autocomplete="given-name"
                                        class="px-2 bg-[#f7eecf] block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 max-sm:text-sm sm:leading-6"
                                        readonly required>
                                </div>

                            </div>

                            <div class="sm:col-span-3">
                                <label for="last-name"
                                    class="block max-sm:text-sm font-medium leading-6 text-slate-50">NRP</label>
                                <div class="mt-2">
                                    <input type="text" value="{{ $nrp }}" name="nrp" id="last-name"
                                        autocomplete="family-name"
                                        class="px-2 bg-[#f7eecf] block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 max-sm:text-sm sm:leading-6"
                                        readonly required>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="last_name"
                                    class="block max-sm:text-sm font-medium leading-6 text-slate-50">ID line</label>
                                <div class="mt-2">
                                    <input type="text" name="line_id" id="last-name" autocomplete="family-name"
                                        required
                                        class="px-2 bg-[#f7eecf] block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 max-sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="last_name"
                                    class="block max-sm:text-sm font-medium leading-6 text-slate-50">No. Telp</label>
                                <div class="mt-2">
                                    <input type="text" name="phone" id="last-name" autocomplete="family-name"
                                        required
                                        class="px-2 bg-[#f7eecf] block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 max-sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            @if ($ukm_slug == 'ilustrasi')
                                <div class="col-span-full">
                                    <label for="about"
                                        class="block max-sm:text-sm font-medium leading-6 text-slate-50">Link google
                                        drive (Portfolio)</label>
                                    <div class="mt-2">
                                        <input id="about" name="drive_url" rows="3" type="url" required
                                            class="px-2 bg-[#f7eecf] block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 max-sm:text-sm sm:leading-6"></input>
                                    </div>
                                    {{-- <p class="mt-3  leading-6 text-gray-600">*Jika UKM meminta CV / Portofolio, silakan sematkan link google drive di sini.</p> --}}
                                </div>
                            @elseif($ukm_slug == 'vg')
                                <div class="col-span-full">
                                    <label for="about"
                                        class="block max-sm:text-sm font-medium leading-6 text-slate-50">Mohon mengisi
                                        jadwal seleksi di bawah ini</label>
                                    <div class="mt-2">
                                        <a class="block max-sm:text-sm font-medium leading-6 text-slate-50"
                                            href="https://petra.id/Audisi_VocalGroup_OH24"
                                            target="blank">petra.id/Audisi_VocalGroup_OH24</a>
                                    </div>
                                    {{-- <p class="mt-3  leading-6 text-gray-600">*Jika UKM meminta CV / Portofolio, silakan sematkan link google drive di sini.</p> --}}
                                </div>
                            @else
                                <input type="hidden" name="drive_url" value="">
                            @endif
                            <input type="hidden" name="ukm_id" value={{ $ukm_id }}>

                        </div>


                        <div class="mt-6 flex items-center justify-end gap-x-6 pt-6">
                            <a href="{{ route('user.home') }}"><button type="button"
                                    class=" font-semibold leading-6 text-slate-50">Batal</button></a>
                            <button type="submit"
                                class="rounded-md bg-indigo-600 px-3 py-2 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Daftar</button>
                        </div>
        </form>

    </div>

    @if (session('warning'))
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Slot habis',
                text: '{{ session('warning') }}',
            });
        </script>
    @endif

    @if (session('limit'))
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Anda telah mencapai limit',
                text: '{{ session('limit') }}',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '{{ route('user.home') }}';
                }
            });
        </script>
    @endif

    @if (session('info'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '{{ session('success') }}',
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: '{{ session('error') }}',
            });
        </script>
    @endif
</body>

</html>
