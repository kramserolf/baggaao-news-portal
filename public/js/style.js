$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 220) {
    $('#navbar-header').fadeOut();
  } else {
    $('#navbar-header').fadeIn();
  }
});
// hide home icon
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 200) {
    $('#go-up').show();
  } else {
    $('#go-up').hide();
  }
});
// scroll to home
function scrollToHome(aid){
    var aTag = $("#home");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}
$("#go-up").click(function() {
   scrollToHome('#home');
});
$(document).ready(function(){
  const observer = lozad(); // lazy loads elements with default selector as '.lozad'
  observer.observe();
});