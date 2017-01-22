$(document).ready(function(){
  var win = $(this);

  if (win.width() < 768) {
    $('#container').removeClass('container');
    $('#container').addClass('container-fluid');
  }
  else
  {
    $('#container').removeClass('container-fluid');
    $('#container').addClass('container');
  }

  if (win.width() < 560) {
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
    $('#container').removeClass('container');
    $('#container').addClass('container-fluid');
  }
  else
  {
    $('#container').removeClass('container-fluid');
    $('#container').addClass('container');
  }

  if (win.width() < 560) {
    $('#row').css( "align-self", "flex-start" );
    $('#row').css( "display", "" );
  }
  else
  {
    $('#row').css( "align-self", "");
    $('#row').css( "display", "flex");
  }
});
