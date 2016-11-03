function deletecustomer(id){

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

function editcustomer(id)
{
  console.log("VELO");

  $.ajax({
    type: "GET",
    url: "edit.php",
    data: { id: id },
    dataType: "JSON",
    success: function(response){
      console.log(response);
    }
  });
}

