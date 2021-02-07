/**
 * Created by deepak on 20/11/16.
 */
 
function check() {
  if (!document.getElementById("email").checkValidity()) {
    alert("Input is not valid!");
  } else {
    goToForms();
  }
}

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



