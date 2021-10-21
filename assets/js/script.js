//= include ../components/bower/fastclick/lib/fastclick.js
//= include ../components/bower/foundation/js/vendor/modernizr.js
//= include ../components/bower/foundation/js/foundation/foundation.js
//= include ../components/bower/foundation/js/foundation/foundation.reveal.js
//= include ../components/bower/foundation/js/foundation/foundation.dropdown.js
//= include ../components/bower/foundation/js/foundation/foundation.alert.js
 
//= include stickybar.js
 
jQuery(document).foundation();

window.addEventListener('DOMContentLoaded', () => {
    const menu = document.querySelector('.menu'),
    menuItem = document.querySelectorAll('.menu_item'),
    hamburger = document.querySelector('.hamburger');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('hamburger_active');
        menu.classList.toggle('menu_active');
    });

    menuItem.forEach(item => {
        item.addEventListener('click', () => {
            hamburger.classList.toggle('hamburger_active');
            menu.classList.toggle('menu_active');
        })
    })
});

function validateForms(form){
    $(form).validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            phone: "required",
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            name: {
                required: "Пожалуйста, введите свое имя",
                minlength: jQuery.validator.format("Введите {0} символа!")
              },
            phone: "Пожалуйста, введите свой номер телефона",
            email: {
              required: "Пожалуйста, введите свою почту",
              email: "Неправильно введен адрес почты"
            }
        }
    });
};

validateForms('#contacts__left_form');

$('input[name=phone]').mask("+7 (999) 999-99-99");
});