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
