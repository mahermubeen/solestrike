$(document).ready(function() {

    //menu 
    $('#menu').click(function() {
        $('#menu-items').removeClass('hidden');
        $('#menu-items').addClass('flex');
    });

    $('#cross').click(function() {
        $('#menu-items').removeClass('flex');
        $('#menu-items').addClass('hidden');
    });



    //add product box
    $('#add-product').click(function() {
        $('#add-product-box').removeClass('hidden');
        $('#add-product-box').addClass('flex');

        $('.main-panel').addClass('blur1');
        $('.sidebar').addClass('blur1');
    });

    $('#add-product-cancel').click(function() {
        $('#add-product-box').removeClass('flex');
        $('#add-product-box').addClass('hidden');

        $('.main-panel').removeClass('blur1');
        $('.sidebar').removeClass('blur1');
    });

    //edit product box
    $('#edit-btn').click(function() {
        $('#edit-product-box').removeClass('hidden');
        $('#edit-product-box').addClass('flex');

        $('.main-panel').addClass('blur1');
        $('.sidebar').addClass('blur1');
    });

    $('#edit-product-cancel').click(function() {
        $('#edit-product-box').removeClass('flex');
        $('#edit-product-box').addClass('hidden');

        $('.main-panel').removeClass('blur1');
        $('.sidebar').removeClass('blur1');
    });

});