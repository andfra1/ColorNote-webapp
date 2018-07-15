// var burger = document.getElementById('burger');
// var menu = document.getElementById('menu');

// burger.addEventListener('click', burgerSwitch, false);

// function burgerSwitch() {
//   if (this.value === "on") {
//     this.classList.remove('burger--change');
//     menu.classList.remove('header__items--show');
//     this.value = "off";
//   } else if (this.value === "off") {
//     this.classList.add('burger--change');
//     menu.classList.add('header__items--show');
//     this.value = "on";
//   }
// }

$('.burger-options').on('click', function (e) {
  if ($(this).val() === 'off') {
    $(this).addClass('burger-options--on');
    $(this).val('on');
  }
  else if ($(this).val() === 'on') {
    $(this).removeClass('burger-options--on');
    $(this).val('off');
  }
  e.stopPropagation();
});

$('body').on('click', function (e) {
  $('.burger-options').removeClass('burger-options--on');
  $('.burger-options').val('off');
e.stopPropagation();
});