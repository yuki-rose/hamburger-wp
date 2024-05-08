jQuery( function($) {
    $(document).on("click",".js-menu__btn", function() {
        $(".l-side__base").addClass("is-open");
        $(".l-side__bg").addClass("is-open");
        $("body").addClass("is-open");
    });
});

jQuery( function($) {
    $(document).on("click",".p-menu__closebtn", function() {
        $(".l-side__base").removeClass("is-open");
        $(".l-side__bg").removeClass("is-open");
        $("body").removeClass("is-open");
    });
});

jQuery( function($) {
    $(document).on("click",".l-side__bg", function() {
        $(".l-side__base").removeClass("is-open");
        $(".l-side__bg").removeClass("is-open");
    });
});

$(document).on("load resize",window, function() { 
    let vw = $(window).width();
    console.log(vw);
    let bp = 960;
    if (vw <= bp) {
        ;
    } else {
        let vw = $(window).width();
        console.log(vw);
        let headerh = $('.l-header').height();
        console.log(headerh);
        let mainh = $('.l-main').outerHeight(true);
        console.log(mainh);
        let footerh = $('.l-footer').outerHeight(true);
        console.log(footerh);
        sh = parseInt(headerh) + parseInt(mainh) - 20;
        console.log(sh);
        $('.l-side__base').height(sh); 
       }
});

$(window).on("load resize", function() { 
    let vw = $(window).width();
    console.log(vw);
    let bp = 960;
    if (vw <= bp) {
        let headerh = $('.l-header').height();
        console.log(headerh);
        let mainh = $('.l-main').outerHeight(true);
        console.log(mainh);
        let footerh = $('.l-footer').outerHeight(true);
        console.log(footerh);
        sbgh = parseInt(headerh) + parseInt(mainh) + parseInt(footerh);
        console.log(sbgh);
        $('.l-side__bg').height(sbgh);
    } else {
        let vw = $(window).width();
        console.log(vw);
        let headerh = $('.l-header').height();
        console.log(headerh);
        let mainh = $('.l-main').outerHeight(true);
        console.log(mainh);
        let footerh = $('.l-footer').outerHeight(true);
        console.log(footerh);
        sbgh = parseInt(headerh) + parseInt(mainh);
        console.log(sbgh);
        $('.l-side__bg').height(sbgh); 
       }
});

