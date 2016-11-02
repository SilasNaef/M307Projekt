function deleteTupel(schadenID)
{
  $.ajax
  ({
    type: "POST",
    url:"delete2.php",
    data: {sID: schadenID},
    dataType: "JSON",
    success: function(response)
    {
      console.log('Löschen OK von ID'+response);
      $('tr#'+ schadenID).fadeOut(800);
    }
  })
}
function editTupel(schadenID)
{
  $.ajax
  ({
    type: "POST",
    url:"edit.php",
    data: {sID: schadenID},
    dataType: "JSON",
    success: function(response)
    {
      document.getElementByID("date").value = date;
      document.getElementByID("Antragsteller").value = aname;
    }
  })
}
