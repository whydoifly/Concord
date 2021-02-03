/**
 * Created by deepak on 20/11/16.
 */

 // Menu Button 
 const menuBtn = document.querySelector('.menu-btn');
 const mobileMenu = document.querySelector('.mobile-menu');
 const navbar = document.querySelector('.navbar');
 let menuOpen = false;
 menuBtn.addEventListener('click', () => {
     if (!menuOpen) {
         menuBtn.classList.add('open');
         menuOpen = true;
         mobileMenu.classList.add('active');
         navbar.style.backgroundColor = "#FAF1FF";
     } else {
         menuBtn.classList.remove('open');
         menuOpen = false;
         mobileMenu.classList.remove('active');
         navbar.style.backgroundColor = "#fff";
     }
 })

// Read More section 
const readMoreBtn = document.querySelector(".read-more");
const hideSection = document.querySelector(".hide-section");
const articleHead = document.querySelector(".article-h2");

readMoreBtn.addEventListener('click', () => {
  hideSection.style.display = "block";
  readMoreBtn.style.display = "none";
  articleHead.innerHTML = "Our mission: Preventing news deserts";
})

$(function () {
  $('a[href*="#"]:not([href="#"])').click(function () {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        $("html, body").animate(
          {
            scrollTop: target.offset().top,
          },
          1000
        );
        return false;
      }
    }
  });
});

$(function () {
  "use strict";
  var scrollOffset = 100;
  $(window).on("scroll", function () {
    if ($(window).scrollTop() < scrollOffset) {
      $("body").removeClass("scrolled");
    } else {
      $("body").addClass("scrolled");
    }
    var scrollPos = $(document).scrollTop(),
      nav_height = $("#navbar").outerHeight();
    $(".navbar li a").each(function () {
      var currLink = $(this),
        refElement = $(currLink.attr("href"));
      if (refElement.size() > 0) {
        if (refElement.position().top - nav_height <= scrollPos) {
          $(".navbar li").removeClass("active");
          currLink.closest("li").addClass("active");
        } else {
          currLink.removeClass("active");
        }
      }
    });
  });
  $(".screenshots-slider").owlCarousel({
    center: true,
    items: 2,
    loop: false,
    margin: 15,
    startPosition: 1,
    responsive: {
      600: {
        items: 4,
      },
      0: {
        startPosition: 0,
      },
    },
  });
  $(".testimonials-slider").owlCarousel({
    items: 1,
    loop: true,
    startPosition: 1,
  });
});
