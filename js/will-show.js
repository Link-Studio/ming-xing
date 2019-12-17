  $(window).scroll(function () {
    $('.will-show').each(function () {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();
      if (bottom_of_window > bottom_of_object) {
        $(this).removeClass("will-show").addClass("has-shown");

      }
    });
  });
