
function AJAXDelete(id) {
  $.ajax({
    type: "GET",
    url: "delete.php",
    data: { customer: id},
    dataType: "JSON",
    success: function(response) {
      $('tr#' + customer).fadeOut(800);
    });
  }
