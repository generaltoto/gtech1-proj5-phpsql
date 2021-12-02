// JQUERY SECTION
$(document).ready(function(){
  $('.dropdown-trigger').dropdown({coverTrigger:false});
  $('.carousel').carousel();
  $('.sidenav').sidenav();
  $('.parallax').parallax();
  $('.tabs').tabs();
  $('.tooltipped').tooltip();
  $('.modal').modal();
  $('.collapsible.expandable').collapsible();
  });

//Submit part form contact
function submitForm() {
  document.contact-form.submit();
  document.contact-form.reset();
}

function modalCloseRegister() {
  $('#modal-register').modal('close');
  $('#modal-login').modal('open');
  
}

function modalCloseLogin() {
  $('#modal-login').modal('close');
  $('#modal-register').modal('open');
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

const error = urlParams.get('error');
const text_err = urlParams.get('text');
if(error){
  if(error == "login"){
    $("#modal-login").modal('open');
  } else if (error == "register"){
    $("#modal-register").modal('open');
  }
}