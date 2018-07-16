$('#modal').on('click', (e)=>{
  $('#modal').removeClass('modal--on');
  e.stopPropagation();
});