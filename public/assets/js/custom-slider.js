// Customo Slider Start Here
$('.owl-carousel').owlCarousel({
    loop: false,
    rewind: true,
    margin: 10,
    nav: true,
    navText: [
        "<i class='fa fa-caret-left' aria-hidden='true'></i>",
        "<i class='fa fa-caret-right' aria-hidden='true'></i>"
    ],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        800: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
})
//   Custom Slider End Here
