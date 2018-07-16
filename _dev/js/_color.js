$('#jsColor').on('click', (e) => {
  $('#modal').addClass('modal--on');
})

$('.modal__box__type > div').on('click', (e) => {
  console.log($(this));
  e.preventDefault();
})