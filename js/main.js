$(document).ready(function() {
  $('button [data-index]').on('click', function(){
    var index = $(this).attr('data-index');
    console.log(index);
  })
})