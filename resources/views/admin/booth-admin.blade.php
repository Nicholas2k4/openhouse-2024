@extends('admin.layouts.layout')

@section('content')
    <script>
        $(document).ready(function() {
            document.querySelector(".loader").classList.add("loader--hidden");
            body.css("overflow-y", "auto");
        })
    </script>
    @if (session()->has('success'))
        <script>
            Swal.fire('Success', '{{ session('success ') }}', 'success');
        </script>
    @endif
    @if (session()->has('unique'))
        <script>
            Swal.fire('ERROR', '{{ session('unique ') }}', 'error');
        </script>
    @endif
    <div class="h-full flex justify-center px-4">
        <div
            class="h-auto w-auto mx-auto mt-56 mb-auto lg:my-auto bg-gradient-to-tl from-indigo-300 to-blue-800 p-6 rounded-xl drop-shadow-lg z-10">
            <p class="text-3xl text-white font-bold text-center mb-4">Input Data Admin Penjaga Booth UKM</p>
            <form id="" action="{{ route('admin.store-admin-booth') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                <input type="text" name="nrp" placeholder="NRP" class="h-12 p-2 border-2 rounded" required>
                <input type="text" name="name" placeholder="Nama Lengkap" class="h-12 p-2 border-2 rounded" required>
                <select name="ukm" required class="p-2 rounded-lg mb-3">
                    <option value="" selected>Select UKM</option>
                    @foreach ($ukms as $ukm)
                        @if (
                            $ukm->slug != 'mpm' &&
                                $ukm->slug != 'persma' &&
                                $ukm->slug != 'pelma' &&
                                $ukm->slug != 'bpmf' &&
                                $ukm->slug != 'tps' &&
                                $ukm->slug != 'bem')
                            <option value="{{ $ukm->id }}">{{ $ukm->name }}</option>
                        @endif
                    @endforeach
                </select>
                <input type="submit"
                    class="font-semibold mb-2 h-12 border-2 bg-white hover:bg-green-400 transition rounded-lg">
            </form>
        </div>
        <img src="{{ asset('assets/CORALIS POSE 1.png') }}" alt="Coralis"
            class="absolute w-80 drop-shadow-lg mt-14 ms-10 z-1">
    </div>
@endsection
