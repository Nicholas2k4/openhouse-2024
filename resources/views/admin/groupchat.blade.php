@extends('admin.layouts.layout')

@section('content')
    <div class="h-full flex justify-center px-4">
        <div
            class="h-auto w-auto mx-auto mt-56 mb-auto lg:my-auto bg-gradient-to-tl from-indigo-300 to-blue-800 p-6 rounded-xl drop-shadow-lg z-10">
            <p class="text-3xl text-white font-bold text-center mb-2">Groupchat Email</p>
            <p class="text-white text-center mb-6">Click here to automatically send emails inviting participants to join
                their UKM group chat.</p>
            <form id="sendGroupchat" class="flex flex-col gap-4">
                @csrf
                <button type="button"
                    class="font-semibold mb-2 h-12 border-2 bg-white hover:bg-orange-400 transition rounded-lg">
                    SEND EMAIL
                </button>
            </form>
        </div>
        <img src="{{ asset('assets/CORALIS POSE 1.png') }}" alt="Coralis"
            class="absolute w-80 drop-shadow-lg mt-14 ms-10 z-1">
    </div>

    <script>
        $(document).ready(function() {
            document.querySelector(".loader").classList.add("loader--hidden");

            $("#sendGroupchat").on("click", function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "Confirmation",
                    text: "Are you sure to send invitation emails?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, SEND!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method: "POST",
                            url: "{{ route('admin.sendGroupchat') }}",
                            success: function(res) {
                                Swal.fire({
                                    title: res.success ? 'Success' : 'Error',
                                    text: res.msg,
                                    icon: res.success ? 'success' : 'error'
                                });
                            },
                            error: function(xhr, error, status) {
                                Swal.fire({
                                    title: 'Error',
                                    text: xhr.responseText,
                                    icon: 'error'
                                });
                            }
                        });
                    } else {
                        return;
                    }
                });

            });
        });
    </script>
@endsection
