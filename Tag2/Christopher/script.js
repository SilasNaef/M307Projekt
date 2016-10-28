
var username = '';

function getConfirmation(parameter, pn, pc, pd)
{
	//var parameter;
var text;
var name = 'Nermin';
var alter = 99;
var array = [];
	var request = confirm("Press a button!");

	

	if(request == true)
	{
		//txt = "you presssed " + parameter;
		jQueryTest();

	}
	else
	{
		txt = "you presed Cancel!";
	}
	//alert(txt);

	//console.log(txt);
	//console.warn(txt);
}

function jQueryTest()
{
	//$('.customer').fadeOut(3000);
	//fadeIn();
	username = $('#velo').serialize();
	console.log(username);
}

function changetotable(id){

$.ajax({
	type: "GET",
	url: "login.php",
	data: { },
	dataType: "JSON",
	success: function(response)
	{
		$('tr# + customer').fadeOut(800);
	}
});

}




