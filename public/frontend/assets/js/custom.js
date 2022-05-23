$(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 150) {
      $(".custom-header").addClass("header-resize");
      } else {
      $(".custom-header").removeClass("header-resize");
      }
      });