$(document).ready(function() {
    $('#menu').click(function() {
        $('#menu-items').removeClass('hidden');
        $('#menu-items').addClass('flex');
    });

    $('#cross').click(function() {
        $('#menu-items').removeClass('flex');
        $('#menu-items').addClass('hidden');
    });

});