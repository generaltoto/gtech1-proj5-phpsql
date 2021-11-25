// JQUERY SECTION
$(document).ready(function(){
  $('.dropdown-trigger').dropdown();
  $('.carousel').carousel();
  $('.sidenav').sidenav();
  $('.parallax').parallax();
  $('.tabs').tabs();
  $('.tooltipped').tooltip();
  $('.modal').modal();
  });

//Submit part form contact
function submitForm() {
  document.contact-form.submit();
  document.contact-form.reset();
}

//copy system for email and Discord tags
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}

//EASTER EGG SECTION

//Reverse color
let firstClick = true;

$('#easteregg-color').click(function() {
  if(firstClick) {
    $('body').addClass('easteregg-reverse');
    firstClick = false;
  }
  else {
    $('body').removeClass('easteregg-reverse');
    firstClick = true;
  }
});

// Image swap
let images = [], x = -1;
images[0] = "../img/d2presentation2.jpg";
images[1] = "../img/eggcoeur.jpg";
images[2] = "../img/eggrick.gif";

function swap() {
  x = (x === images.length - 1) ? 0 : x + 1;
  document.getElementById("swap").src = images[x];
}