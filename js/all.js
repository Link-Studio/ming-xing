$(document).ready(function() {
    $('#N0001 .mobile-menu').on('click', function(e) {
        // $('#N0001 .mobile-menu').click(function(e) {
        e.preventDefault();
        $(this).addClass("d-none");
        $(this).removeClass("show");
        $('#N0001 .mobile-close').removeClass("d-none");
        $("#N0001 .nav").addClass("show");

        setTimeout(function() {
            $('#N0001 .mobile-close').addClass("show");
        }, 300);
    });
    $('#N0001 .mobile-close').on('click', function(e) {
        // $('#N0001 .mobile-close').click(function(e) {
        e.preventDefault();
        $(this).addClass("d-none");
        $(this).removeClass("show");

        $('#N0001 .mobile-menu').removeClass("d-none");
        $("#N0001 .nav ").removeClass("show");

        setTimeout(function() {
            $('#N0001 .mobile-menu').addClass("show");
        }, 300);
    });
    $('#N0001 .nav .item').on('click', function(e) {
        // $("#N0001 .nav .item").click(function() {
        $("#N0001 .mobile-close").addClass("d-none");
        $("#N0001 .mobile-menu").removeClass("d-none");
        $("#N0001 .nav ").removeClass("show");

        setTimeout(function() {
            $('#N0001 .mobile-menu').addClass("show");
            $('#N0001 .mobile-close').removeClass("show");
        }, 300);
    });
});