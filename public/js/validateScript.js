$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

// Ajax Filter & Search 
    function fetch_data(query = "", filter = "") {
        $.ajax({
            url: "filterSearch",
            method: "GET",
            data: {
                query: query,
                filter: filter,
            },
            dataType: "json",
            success: function (data) {
                $("#result").html(data.registrations);
            },
            error: function (xhr, status, error) {
                alert("Error", error);
            },
        });
    }

    // Search
    $(document).on("keyup", "#searchReg", function () {
        var query = $("#searchReg").val();
        var filter = $("#regFilter").val();
        fetch_data(query, filter);
    });

    // Filter
    $(document).on("change", "#regFilter", function () {
        var query = $("#searchReg").val();
        var filter = $("#regFilter").val();
        fetch_data(query, filter);
    });

    fetch_data();

// Ajax Validasi Seleksi & Pembayaran
    function selectionValidate(nrp = "") {
        $.ajax({
            url: "selectionValidate",
            method: "POST",
            data: {
                nrp: nrp,
            },
            success: function (data) {
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
                } else {
                    Swal.fire({
                        title: "Selection File has been Validated",
                        text: "NRP : " + nrp,
                        icon: "error",
                    });
                }
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
            },
        });
    }

    function paymentValidate(nrp = "") {
        $.ajax({
            url: "paymentValidate",
            method: "POST",
            data: {
                nrp: nrp,
            },
            success: function (data) {
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
                } else {
                    Swal.fire({
                        title: "The selection file hasn't been validated",
                        text: "NRP : " + nrp,
                        icon: "warning",
                    });
                }
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
            },
        });
    }

    $(document).on("click", ".validateBtn", function () {
        var nrp = $(this).data("nrp");
        Swal.fire({
            title: "Which one do you want to validate?",
            text: "NRP : " + nrp,
            showDenyButton: true,
            showCancelButton: true,
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
});
