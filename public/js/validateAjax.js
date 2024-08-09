$(document).ready(function () {
    function fetch_data(query = '', filter = '') {
        $.ajax({
            url: "filterSearch",
            method: "GET",
            data: {
                query: query,
                filter: filter
            },
            dataType: 'json',
            success: function (data) {
                $('#result').html(data.registrations);
            },
            error: function (xhr, status, error) {
                alert('Error', error);
            }
        })
    }

    // Search
    $(document).on('keyup', '#searchReg', function () {
        var query = $('#searchReg').val();
        var filter = $('#regFilter').val();
        fetch_data(query, filter);
    })

    // Filter
    $(document).on('change', '#regFilter', function () {
        var query = $('#searchReg').val();
        var filter = $('#regFilter').val();
        fetch_data(query, filter);
    });

    fetch_data();
});
