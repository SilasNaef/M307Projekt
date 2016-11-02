function deleteCustomer(id){

  $.ajax({
    type: "GET",
    url: "delete.php",
    data: { id: id },
    dataType: "JSON",
    success: function(response){

      $('tr#' + id).fadeOut(800);
      console.log(response);
    }
  });
}


function editCustomer(id, firstname, lastname, datum, schaden, loesung){

  $.ajax({
    type: "GET",
    url: "edit.php",
    data: { id: id,
            firstname: firstname,
            lastname: lastname,
            datum: datum,
            schaden: schaden,
            loesung: loesung},
    dataType: "JSON",
    success: function(response){

      console.log(response);
    }
  });
}
