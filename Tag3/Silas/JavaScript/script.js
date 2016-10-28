//alert("BAAAAMMMMM....HaHa!!!");

function getConfirmation(parameter) {
  var txt;
  var Dings = parameter;
  var r = confirm("Press a Button!");
  if (r == true) {
    txt = "You Pressed " + Dings;
  }
  else {
    txt = "You Pressed Cancel!";
  }
  alert(txt);
  console.log(txt);
  console.warn(txt);
}
function jQueryTest(mitgabewert) {
      $('.custom').fadeOut(3000);
  }
