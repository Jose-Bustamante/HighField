$(document).ready(function(){
  var win = $(this);

  if (win.width() < 768) {
    $('#row').css( "align-self", "flex-start" );
    $('#row').css( "display", "" );
  }
  else
  {
    $('#row').css( "align-self", "" );
    $('#row').css( "display", "flex" );
  }

});

$(window).on('resize', function(){
  var win = $(this);

  if (win.width() < 768) {
    $('#row').css( "align-self", "flex-start" );
    $('#row').css( "display", "" );
  }
  else
  {
    $('#row').css( "align-self", "");
    $('#row').css( "display", "flex");
  }
});
