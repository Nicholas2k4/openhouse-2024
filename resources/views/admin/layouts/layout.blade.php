<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OH Admin | {{ $tabTitle }}</title>

    <!-- CSRF TOKEN -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- TAILWIND -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- SWEET ALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- JS -->
    {{-- <script src="{{ asset('js/validateScript.js') }}"></script> --}}
</head>

<body>
    @include('admin.includes.alerts')
    @include('admin.includes.navigation')
    <div class="lg:ms-64 h-screen">
        @yield('content')
    </div>


    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            // Ajax Filter & Search
            function fetch_data(nrp = "", filter = "", status = "") {
                $.ajax({
                    url: "{{ route('admin.filterSearch') }}",
                    method: "GET",
                    data: {
                        nrp: nrp,
                        filter: filter,
                        status: status,
                    },
                    dataType: "json",
                    success: function(data) {
                        $("#result").html(data.registrations);
                    },
                    error: function(xhr, status, error) {
                        alert("Error", error);
                    },
                });
            }

            // Search
            $(document).on("keyup", "#searchReg", function() {
                var nrp = $("#searchReg").val();
                var filter = $("#regFilter").val();
                var status = $("#statusFilter").val();
                fetch_data(nrp, filter, status);
            });

            // Filter
            $(document).on("change", "#regFilter", function() {
                var nrp = $("#searchReg").val();
                var filter = $("#regFilter").val();
                var status = $("#statusFilter").val();
                fetch_data(nrp, filter, status);
            });

            //Status
            $(document).on("change", "#statusFilter", function() {
                var nrp = $("#searchReg").val();
                var filter = $("#regFilter").val();
                var status = $("#statusFilter").val();
                fetch_data(nrp, filter, status);
            });

            fetch_data();

            // Ajax lihat file pembayaran
            function viewPayment(nrp = "") {
                $.ajax({
                    url: "{{ route('admin.viewPayment') }}",
                    method: "POST",
                    data: {
                        nrp: nrp,
                    },
                    success: function(data) {
                        console.log("{{ asset('') }}" + data.file_path);
                        Swal.fire({
                            imageUrl: "{{ asset('') }}" + "storage/" + data.file_path,
                            imageHeight: 800,
                            imageAlt: "Bukti Pembayaran UKM",
                        });
                    },
                    error: function(xhr, status, error) {
                        alert("Error", error);
                        alert(xhr.responseText);
                    },
                });
            }

            $(document).on("click", ".viewPayment", function() {
                var nrp = $(this).data("nrp");
                viewPayment(nrp);
            });

            // Ajax Validasi Seleksi & Pembayaran
            function selectionValidate(nrp = "") {
                $.ajax({
                    url: "{{ route('admin.selectionValidate') }}",
                    method: "POST",
                    data: {
                        nrp: nrp,
                    },
                    success: function(data) {
                        if (data.message == "true") {
                            Swal.fire({
                                title: "Selection Validated Successfully",
                                text: "NRP : " + nrp,
                                icon: "success",
                                confirmButtonColor: "#3085d6",
                                confirmButtonText: "Okay!",
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.reload();
                                }
                            });
                        } else if (data.message == "false") {
                            Swal.fire({
                                title: "Selection File has been Validated",
                                text: "NRP : " + nrp,
                                icon: "error",
                            });
                        } else {
                            Swal.fire({
                                title: "TThis participant has been rejected",
                                text: "NRP : " + nrp,
                                icon: "error",
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        alert(xhr.responseText);
                    },
                });
            }

            function paymentValidate(nrp = "") {
                $.ajax({
                    url: "{{ route('admin.paymentValidate') }}",
                    method: "POST",
                    data: {
                        nrp: nrp,
                    },
                    success: function(data) {
                        if (data.message == "true") {
                            Swal.fire({
                                title: "Payment Validated Successfully",
                                text: "NRP : " + nrp,
                                icon: "success",
                                confirmButtonColor: "#3085d6",
                                confirmButtonText: "Okay!",
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.reload();
                                }
                            });
                        } else if (data.message == "false") {
                            Swal.fire({
                                title: "Payment has been Validated",
                                text: "NRP : " + nrp,
                                icon: "error",
                            });
                        } else if (data.message == "not_yet") {
                            Swal.fire({
                                title: "The selection file hasn't been validated",
                                text: "NRP : " + nrp,
                                icon: "warning",
                            });
                        } else {
                            Swal.fire({
                                title: "This participant has been rejected",
                                text: "NRP : " + nrp,
                                icon: "error",
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        alert(xhr.responseText);
                    },
                });
            }

            $(document).on("click", ".validateBtn", function() {
                var nrp = $(this).data("nrp");
                Swal.fire({
                    title: "Which one do you want to validate?",
                    text: "NRP : " + nrp,
                    showDenyButton: true,
                    // showCancelButton: true,x
                    confirmButtonColor: "#3085d6",
                    denyButtonColor: "#FF6600",
                    confirmButtonText: "Selection",
                    denyButtonText: `Payment`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        selectionValidate(nrp);
                    } else if (result.isDenied) {
                        paymentValidate(nrp);
                    }
                });
            });

            function rejectParticipant(nrp = "") {
                $.ajax({
                    url: "{{ route('admin.rejectParticipant') }}",
                    method: "POST",
                    data: {
                        nrp: nrp,
                    },
                    success: function() {
                        Swal.fire({
                            title: "Participant Rejected Successfully",
                            text: "NRP : " + nrp,
                            icon: "success",
                            confirmButtonColor: "#3085d6",
                            confirmButtonText: "Okay!",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        });
                    },
                });
            }

            $(document).on("click", ".rejectBtn", function() {
                var nrp = $(this).data("nrp");
                Swal.fire({
                    title: "Are you sure?",
                    text: "NRP : " + nrp,
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#0b6623",
                    confirmButtonText: "Yes",
                }).then((result) => {
                    if (result.isConfirmed) {
                        rejectParticipant(nrp);
                    }
                });
            });
        });
    </script>
</body>

</html>
