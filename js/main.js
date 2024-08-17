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