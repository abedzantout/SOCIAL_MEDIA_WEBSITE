$(document).ready(function () {
    var menuButton = $('.sidebar-button');

    menuButton.on('click', function () {
        $('.content').toggleClass('isOpen');

    });
    setNavigation();

});

function setNavigation() {
    var path = window.location.pathname;
    path = path.replace(/\/$/, "");
    path = decodeURIComponent(path);

    $(".nav a").each(function () {
        var href = $(this).attr('href');

        // works only at windows machines ==> 1 instead of 12
        if (path.substring(12, path.length) === href) {
            $(".nav a").removeClass('active');
            $(this).addClass('active');
            return;
        }
    });
}