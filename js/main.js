$(document).ready(function () {

    // Initialise main carousel
    $('.carousel').carousel({
        interval: 7500,
        pause: "hover"
    });

    // Initialise slideshow pagination
    $('.carousel-dots, .carousel-thumbs').slideshowPagination();

    // Fancybox
    $(".fancybox").fancybox({
        padding: 5,
        playSpeed: 5000,
        helpers: {
            title: {
                type: 'inside'
            },
            buttons: {
                position: 'bottom'
            }
        }
    });

});
