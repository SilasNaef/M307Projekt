function AJAXDelete(id) {
  $.ajax({
    type: "GET",
    url: "Loeschen.php",
    data: { IDE: id},
    dataType: "JSON",
    success: function(response) {
      $('tr#' + customer).fadeOut(800);
    });
  }
