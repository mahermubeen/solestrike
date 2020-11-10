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
    $('.edit-btn').click(function() {
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

    //delete product box
    $('.delete-btn').click(function() {
        $('#delete-product-box').removeClass('hidden');
        $('#delete-product-box').addClass('flex');

        $('.main-panel').addClass('blur1');
        $('.sidebar').addClass('blur1');
    });

    $('#delete-product-cancel').click(function() {
        $('#delete-product-box').removeClass('flex');
        $('#delete-product-box').addClass('hidden');

        $('.main-panel').removeClass('blur1');
        $('.sidebar').removeClass('blur1');
    });



     //edit user box
     $('.edit-user-btn').click(function() {
        $('#edit-user-box').removeClass('hidden');
        $('#edit-user-box').addClass('flex');

        $('.main-panel').addClass('blur1');
        $('.sidebar').addClass('blur1');
    });

    $('#edit-user-cancel').click(function() {
        $('#edit-user-box').removeClass('flex');
        $('#edit-user-box').addClass('hidden');

        $('.main-panel').removeClass('blur1');
        $('.sidebar').removeClass('blur1');
    });

    //delete user box
    $('.delete-user-btn').click(function() {
        $('#delete-user-box').removeClass('hidden');
        $('#delete-user-box').addClass('flex');

        $('.main-panel').addClass('blur1');
        $('.sidebar').addClass('blur1');
    });

    $('#delete-user-cancel').click(function() {
        $('#delete-user-box').removeClass('flex');
        $('#delete-user-box').addClass('hidden');

        $('.main-panel').removeClass('blur1');
        $('.sidebar').removeClass('blur1');
    });

     //add user box
     $('#add-user-btn').click(function() {
        $('#add-user-box').removeClass('hidden');
        $('#add-user-box').addClass('flex');

        $('.main-panel').addClass('blur1');
        $('.sidebar').addClass('blur1');
    });

    $('#add-user-cancel').click(function() {
        $('#add-user-box').removeClass('flex');
        $('#add-user-box').addClass('hidden');

        $('.main-panel').removeClass('blur1');
        $('.sidebar').removeClass('blur1');
    });

});