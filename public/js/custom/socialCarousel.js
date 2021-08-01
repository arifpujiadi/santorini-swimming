/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */







$(document).ready(function () {

    var owl = $("#owl-demo");

    owl.owlCarousel({
        items: 2,
        loop: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        navigation: true,
        stopOnHover: true,
        navText: ["<img src='../../img/icon/similar-left.png'>", "<img src='../../img/icon/similar-right.png'>"],
        responsive: {
            0: {
                items: 2
            },
            450: {
                items: 2
            },
            600: {
                items: 3
            },
            767: {
                items: 3
            },
            768: {
                items: 3
            },
            1000: {
                items: 2
            },
            1200: {
                items: 3
            },
            1400: {
                items: 3
            },
            1600: {
                items: 3
            }
        }
    });


});