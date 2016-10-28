function deleteUser(user_id)
{
  $.ajax
  ({
    type: "POST",
    url:"delete.php",
    data: {user: user_id},
    dataType: "JSON",
    success: function(response)
    {
      console.log('Löschen OK von ID'+response);
      $('tr#'+ user_id).fadeOut(800);
    }
  })
}
