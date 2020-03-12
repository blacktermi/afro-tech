    //Type js for text animation
    var element = $(".element");
    $(function() {
      element.typed({
        strings: ["Marketing Digital", "Developpement Web", "WebDesign"],
        typeSpeed: 200,
        loop: true,
      });
    });
     $(window).on('load', function() {
           $("#preloader").fadeOut(300);
        });
});