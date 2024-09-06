<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('assets/LOGO OPENHOUSE SEMIFINAL.png') }}">
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

    <style>
        .loader {
            transition: opacity 0.75s, visibility 0.75s;
        }

        .loader--hidden {
            overflow-y: visible;
            opacity: 0;
            visibility: hidden;
        }

        .loader::after {
            content: "";
            width: 75px;
            height: 75px;
            border: 5px solid white;
            border-top-color: #000000;
            border-radius: 50%;
            animation: loading 0.75s ease infinite;
        }

        @keyframes loading {
            from {
                transform: rotate(0turn);
            }

            to {
                transform: rotate(1turn);
            }
        }
    </style>
</head>

<body>
    <div class="loader fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-white z-[9999]"></div>

    @include('admin.includes.alerts')
    @include('admin.includes.navigation')
    <div class="lg:ms-64 h-screen">
        @yield('content')
    </div>


    <script>
        $(document).ready(function() {
            // window.addEventListener("load", () => {
            //     document.querySelector(".loader").classList.add("loader--hidden");
            //     body.css("overflow-y", "auto");
            // })

            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });

            // Ajax Filter & Search
            function fetchData(nrp = "", filter = "", status = "", sort = "asc") {
                $.ajax({
                    url: "{{ route('admin.filterSearch') }}",
                    method: "GET",
                    data: {
                        nrp: nrp,
                        filter: filter,
                        status: status,
                        sort: sort,
                    },
                    dataType: "json",
                    success: function(data) {
                        $("#result").html(data.registrations);
                        $("#dataCount").html("Showing " + data.dataCount + " " + data.ukmName + " participants data");
                        if ($("#dataCount").html() === "Showing " + data.dataCount + " " + data.ukmName + " participants data") {
                            document.querySelector(".loader").classList.add("loader--hidden");
                            body.css("overflow-y", "auto");
                        }
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
                var sort = $("#sort").val();
                fetchData(nrp, filter, status, sort);
            });

            // Filter
            $(document).on("change", "#regFilter", function() {
                var nrp = $("#searchReg").val();
                var filter = $("#regFilter").val();
                var status = $("#statusFilter").val();
                var sort = $("#sort").val();
                fetchData(nrp, filter, status, sort);
            });

            //Status
            $(document).on("change", "#statusFilter", function() {
                var nrp = $("#searchReg").val();
                var filter = $("#regFilter").val();
                var status = $("#statusFilter").val();
                var sort = $("#sort").val();
                fetchData(nrp, filter, status, sort);
            });

            //Status
            $(document).on("change", "#sort", function() {
                var nrp = $("#searchReg").val();
                var filter = $("#regFilter").val();
                var status = $("#statusFilter").val();
                var sort = $("#sort").val();
                fetchData(nrp, filter, status, sort);
            });

            fetchData();

            // Ajax lihat file pembayaran
            function viewPayment(nrp = "", ukm = "") {
                $.ajax({
                    url: "{{ route('admin.viewPayment') }}",
                    method: "POST",
                    data: {
                        nrp: nrp,
                        ukm: ukm,
                    },
                    success: function(data) {
                        console.log("{{ asset('') }}" + data.file_path);
                        if (data.file_path == null) {
                            Swal.fire({
                                title: "This participant hasn't paid yet",
                                text: "NRP : " + nrp,
                                icon: "error",
                            });
                        } else {
                            Swal.fire({
                                imageUrl: "{{ asset('') }}" + "storage/" + data.file_path,
                                imageHeight: 800,
                                imageAlt: "Bukti Pembayaran UKM",
                            });
                        }

                    },
                    error: function(xhr, status, error) {
                        alert("Error", error);
                        alert(xhr.responseText);
                    },
                });
            }

            $(document).on("click", ".viewPayment", function() {
                var nrp = $(this).data("nrp");
                var ukm = $(this).data("ukm");
                viewPayment(nrp, ukm);
            });

            // Ajax Validasi Seleksi & Pembayaran
            function selectionValidate(nrp = "", ukm = "") {
                $.ajax({
                    url: "{{ route('admin.selectionValidate') }}",
                    method: "POST",
                    data: {
                        nrp: nrp,
                        ukm: ukm,
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

            function paymentValidate(nrp = "", ukm = "") {
                $.ajax({
                    url: "{{ route('admin.paymentValidate') }}",
                    method: "POST",
                    data: {
                        nrp: nrp,
                        ukm: ukm,
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
                                // text: "NRP : " + nrp,
                                text: data.message,
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
                var ukm = $(this).data("ukm");
                Swal.fire({
                    title: "Which to VALIDATE",
                    icon: "warning",
                    text: "NRP : " + nrp,
                    showDenyButton: true,
                    // showCancelButton: true,x
                    confirmButtonColor: "#3085d6",
                    denyButtonColor: "#FF6600",
                    confirmButtonText: "Selection",
                    denyButtonText: `Payment`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        selectionValidate(nrp, ukm);
                    } else if (result.isDenied) {
                        paymentValidate(nrp, ukm);
                    }
                });
            });

            function rejectPayment(nrp = "", ukm = "") {
                $.ajax({
                    url: "{{ route('admin.rejectPayment') }}",
                    method: "POST",
                    data: {
                        nrp: nrp,
                        ukm: ukm,
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

            function rejectFile(nrp = "", ukm = "") {
                $.ajax({
                    url: "{{ route('admin.rejectFile') }}",
                    method: "POST",
                    data: {
                        nrp: nrp,
                        ukm: ukm,
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
                var ukm = $(this).data("ukm");
                Swal.fire({
                    title: "Which to REJECT",
                    text: "NRP : " + nrp,
                    icon: "warning",
                    showDenyButton: true,
                    confirmButtonColor: "#3085d6",
                    denyButtonColor: "#FF6600",
                    confirmButtonText: "Selection File",
                    denyButtonText: "Payment",
                }).then((result) => {
                    if (result.isConfirmed) {
                        rejectFile(nrp, ukm);
                    } else if (result.isDenied) {
                        rejectPayment(nrp, ukm);
                    }
                });
            });

            function fetchLeaderboard() {
                $.ajax({
                    url: "{{ route('admin.fetchLeaderboard') }}",
                    method: "GET",
                    success: function(data) {
                        $("#rankResult").html(data.allRanks);
                        $("#rankCount").html("Showing " + data.dataCount + " participants data");
                        if ($("#rankCount").html() === "Showing " + data.dataCount + " participants data") {
                            document.querySelector(".loader").classList.add("loader--hidden");
                            body.css("overflow-y", "auto");
                        }
                    },
                    error: function(xhr, status, error) {
                        alert(xhr.responseText);
                    },
                });
            }

            fetchLeaderboard();
        });
    </script>
</body class="overflow-y-hidden">

</html>