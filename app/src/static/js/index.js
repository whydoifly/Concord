/**
 * Created by deepak on 20/11/16.
 */

function goToForms() {
  document.location.href = "https://tushar700593.typeform.com/to/SzIAojTd";
}

 // Form 

 $(function() {
  $(".g-form").submit(function (event) {
    event.preventDefault();
 
    // Ссылка, которую получили на этапе публикации приложения
    let appLink = "https://script.google.com/macros/s/AKfycbyZSFjO7fHN2CM1O5ZbYU8Vtu2bR7tqoX1HL_u7A17ZrtX65hNI09QuHA/exec";
 
    // Сообщение при успешной отправке данных
    let successRespond = 'Сообщение успешно отправлено. Посмотрите результат <a target="_blank" href="https://docs.google.com/spreadsheets/d/1XcTivCQL4EZJf1x2kB4UwGj5bAi0sfpx1PwtaKgOWHo/edit?usp=sharing">тут</a>';
 
    // Сообщение при ошибке в отправке данных
    let errorRespond = 'Не удалось отправить сообщение. Cвяжитесь с администратором сайта по адресу <a href="mailto:smart-landing@ya.ru">smart-landing@ya.ru</a>';
 
    // Id текущей формы
    let form = $('#' + $(this).attr('id'))[0];
 
    // h2 с ответом формы
    let formRespond = $(this).find('.g-form__title_respond');
 
    // h2 с заголовком формы
    let formTitle = $(this).find('.g-form__title_main');
 
    // Блок прелоадера
    let preloader = $(this).find('.g-form__preloader');
 
    // Кнопка отправки формы
    let submitButton = $(this).find('.g-form__button');

 
    // FormData
    let fd = new FormData(form);
 
 
    $.ajax({
 
      url: appLink,
      type: "POST",
      data: fd,
      processData: false,
      contentType: false,
      beforeSend: function(){
 
 
      // Показываем прелоадер
      preloader.css('opacity', '1');
 
      // Делаем неактивной кнопку отправки
      submitButton.prop('disabled', true);
 
      // валидация других полей.
 
    },
 
  }).done(function(res, textStatus, jqXHR) {
 
    if(jqXHR.readyState === 4 && jqXHR.status === 200) {
 
    // Прячем заголовок формы
    formTitle.css({
      'display': 'none'
    });
 
    // Прячем прелоадер
    preloader.css('opacity', '0');
 
    // Выводим ответ формы.
    formRespond.html(successRespond).css('color', '#37b599');
     
    // Возвращаем активность кнопке отправки
    submitButton.prop('disabled', false);
 
      // Очищаем поля формы
      form.reset();
 
    } else {
      formTitle.css({
        'display': 'none'
      });
      formRespond.html(errorRespond).css('color', '#c64b4b');
      preloader.css('opacity', '0');
      setTimeout( () => {
        formRespond.css({
          'display': 'none'
        });
        formTitle.css({
          'display': 'block'
        });
 
        submitButton.prop('disabled', false);
      }, 5000);
 
      console.log('Гугл не ответил статусом 200');
    }
  }).fail(function(res, textStatus, jqXHR) {
    formTitle.css({
      'display': 'none'
    });
    preloader.css('opacity', '0');
    formRespond.html('Не удалось отправить сообщение. Cвяжитесь с администратором сайта другим способом').css('color', '#c64b4b');
    setTimeout( () => {
      formRespond.css({
        'display': 'none'
      });
      formTitle.css({
        'display': 'block'
      });
      submitButton.prop('disabled', false); 
    }, 5000);
 
    console.log('Не удалось выполнить запрос по указанному в скрипте пути');
  }); 
});
}(jQuery));



 

// End of Form

 // Menu Button 
 const menuBtn = document.querySelector('.menu-btn');
 const mobileMenu = document.querySelector('.mobile-menu');
 const navbar = document.querySelector('.navbar');
 const mobLink = document.querySelector('#contact-link-mobile');

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

  mobLink.addEventListener('click', () => {
         mobileMenu.classList.remove('active');
         menuBtn.classList.remove('open');
         navbar.style.backgroundColor = "#fff";
  })

// Read More section 
const readMoreBtn = document.querySelector(".read-more");
const hideSection = document.querySelector(".hide-section");
const jrnlsmArticle = document.querySelector(".journalism-article");

readMoreBtn.addEventListener('click', () => {
  hideSection.style.display = "block";
  readMoreBtn.style.display = "none";
  jrnlsmArticle.style.boxShadow = "none";
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
