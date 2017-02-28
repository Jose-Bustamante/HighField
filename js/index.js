$(document).ready(function(){

  // Mala idea, porque cuando entra a index te redirecciona al lenguage de tu navegador aunque tu no quieras.
  // if(navigator.language.includes('en') && !window.location.href.includes('index-uk.html')){
  //   window.location.href = "index-uk.html";
  // } else if (navigator.language.includes('de') && !window.location.href.includes('index-ger.html')) {
  //     window.location.href = "index-ger.html";
  // }

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
