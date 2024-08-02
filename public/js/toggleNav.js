$(document).ready(function() {
    $('#toggle').on('click', function() {
        if ($('#smallNav').hasClass('hidden')) {
            $('#smallNav').removeClass('hidden');
        } else {
            $('#smallNav').addClass('hidden');
        }
    })
})