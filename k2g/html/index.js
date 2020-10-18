$(document).ready(function () {

    // banner owl carousel
    $('#banner-area .owl-carousel').owlCarousel({

        dots: true,
        items: 1,
    });

    //  top sale carousel
    $('#top-sale .owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 5
            }
        },
        1000: {
            items: 5
        }
    })


    // isotope


    var $grid = $(".grid").isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click", ".btn", function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue });
    })



    // blogs


    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        },

    })


    // product increase and decrease
    let $qty_up = $('.qty .qty-up')
    let $qty_down = $('.qty .qty-down')
   
    // click on qty button
    $qty_up.click(function (e) {
        let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        if ($input.val() >= 1 && $input.val() <= 9) {
            $input.val(function (i, oldval) {
                return ++oldval
            })
        }
        $qty_down.click(function (e) {
            if ($input.val() > 1 && $input.val() <= 10) {
                $input.val(function (i, oldval) {
                    return --oldval
                })
            }
        })




    })
})