//alert("BAAAAMMMMM....HaHa!!!");
function getConfirmation(parameter) {
  var txt;
  var Dings = parameter;
  var r = confirm("Press a Button!");
  if (r == true) {
    txt = "You Pressed " + Dings;
    jQueryTest2();
  }
  else {
    txt = "You Pressed Cancel!";
    $('.HideMe').fadeOut(5000);
  }
  alert(txt);
  console.log(txt);
  console.warn(txt);
}
function jQueryTest() {
    $('.custom').fadeOut(3000);
}
function jQueryTest2() {
    var FormData = $('#MeinFormular').serialize(); //ID VON FORMULAR ANSPRECHEN UM ALLE WERTE ZU ERHALTEN
    var TestText = $('.test').val();
    var TestTextuser = $('.testuser').val();
    var TestTextpw = $('.testpw').val();
    console.log(FormData);
    console.log(TestText);
    console.log(TestTextuser);
    console.log(TestTextpw);
    $('.test').val("Neuer Wert");
}
function DropDown() {

    if (document.getElementById("unhideMe").className = "") {
        document.getElementById("unhideMe").className = "unHideMe"
    }
    else {
        document.getElementById("unhideMe").className = "";
    }
}
