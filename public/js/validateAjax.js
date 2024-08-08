$(document).ready(function () {
    function fetch_data(query = '') {
        $.ajax({
            url: "liveSearch",
            method: "GET",
            data: {query: query},
            dataType: 'json',
            success: function (data) {
                $('#result').html(data.registrations);
            },
            error: function (xhr, status, error) {
                alert('Error', error);
            }
        })
    }

    $(document).on('keyup', '#searchReg', function () {
        var query = $('#searchReg').val();
        fetch_data(query);
    })

    fetch_data();
});
