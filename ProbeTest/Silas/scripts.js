function DeleteData(id){

  $.ajax({
    type: "GET",
    url: "delete.php",
    data: { IDE: id },
    dataType: "JSON",
    success: function(response){
      $('tr#' + id).fadeOut(800);
      console.log(response);
    }
  });
}
