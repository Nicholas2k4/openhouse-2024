@extends('admin.layouts.layout')
@section('content')
<script>
    $(document).ready(function() {
        document.querySelector(".loader").classList.add("loader--hidden");
        body.css("overflow-y", "auto");

        $('#generateForm').on('submit', function(event) {
            event.preventDefault();

            Swal.fire({
                title: "Are you sure?",
                text: "You will generate letter for this participant",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, generate!"
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    });
</script>

<div class="h-full flex justify-center px-4">
    <div class="h-auto w-auto mx-auto mt-56 mb-auto lg:my-auto bg-gradient-to-tl from-indigo-300 to-blue-800 p-6 rounded-xl drop-shadow-lg z-10">
        <p class="text-3xl text-white font-bold text-center mb-2">OpenHouse Game Letters Generator</p>
        <p class="text-white text-center mb-6">Input participants NRP to generate their collectible Letters.</p>
        <form id="generateForm" action="{{ route('admin.giveLetter') }}" method="POST" class="flex flex-col gap-4">
            @csrf
            <input type="text" name="nrp" placeholder="NRP" class="h-12 p-2 border-2 rounded">
            <input type="submit" class="font-semibold mb-2 h-12 border-2 bg-white hover:bg-green-400 transition rounded-lg">
        </form>
    </div>
    <img src="{{ asset('assets/CORALIS POSE 1.png') }}" alt="Coralis" class="absolute w-80 drop-shadow-lg mt-14 ms-10 z-1">
</div>
@endsection