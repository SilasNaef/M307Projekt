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

function checkTupel(date, name, schaden, loesung)
{
  if(empty(date) OR empty(name) OR empty(schaden) OR empty(loesung))
  {
    alert("Sie haben mindestens eine fehlende oder ungültige Eingabe!");
    return true;
  }
  else {
    return false;
  }
}
