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

let wasBelow960 = window.innerWidth < 960; // 初期状態が960px未満かを確認

window.addEventListener('resize', function() {
  const isNowAbove960 = window.innerWidth >= 960;

  if (isNowAbove960 && wasBelow960) {
        document.querySelector(".l-side__base").classList.remove("is-open");
        document.querySelector(".l-side__bg").classList.remove("is-open");
        document.querySelector("body").classList.remove("is-open");
        document.querySelector(".l-side__base").style.display = "block";
    location.reload();
  }

  wasBelow960 = !isNowAbove960; // 現在の状態を更新
});