$(document).ready(function() {

    var owl = $("#owl-demo");

    owl.owlCarousel({

        itemsCustom : [
            [0, 2],
            [450, 4],
            [600, 7],
            [700, 9],
            [1000, 10],
            [1200, 12],
            [1400, 13],
            [1600, 15]
        ],
        navigation : true

    });

});