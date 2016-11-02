var txt;
var name = 'Nermin';
var alter = 99;
var array = [];


function jQueryTest(){
  //$('.radio').fadeOut(3000);
  var TextDings = $('#username').val();
  //console.log(TextDings);
  //var userData = $('#myForm').serialize();
  //console.log(userData);
  if (TextDings != ''){
    $('#alert').fadeIn(500).removeClass('hidden');
  }
  else {
    $('#alert').fadeOut(1100);
  }

}

function getConfirmation(parameter){
  var request = confirm("Press a button!");
  if (request == true) {
    txt = "You pressed " + parameter;
    jQueryTest();
  }
  else {
    txt = "You pressed Cancel!";

  }

  alert(txt);

}
