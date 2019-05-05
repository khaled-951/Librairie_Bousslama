function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function validateNames(name){
	var regName = /^[a-zA-Z]+$/;
	return regName.test(name);
}

function test()
{
	if( !validateNames(document.getElementById("first-name").value) ) 
	{
		alert("Check Your First Name !");
		document.getElementById("botna").disabled = true;
	}
	else if( !validateNames(document.getElementById("last-name").value) ) 
	{
		alert("Check Your Last Name !");
		document.getElementById("botna").disabled = true;
	}
	else if( !validateEmail(document.getElementById("email").value) ) 
	{
		alert("Check Your Email !");
		document.getElementById("botna").disabled = true;
	}
	else if (document.getElementById("zip-code").value <= 0)
	{
		alert("Check Your Zip Code !");
		document.getElementById("botna").disabled = true;
	}
	else if (document.getElementById("tel").value.length != 8 )
	{
		alert("Check Your Telephone Number It's Lenght Should Be Equal To 8 !");
		document.getElementById("botna").disabled = true;
	}
	else
	{
		document.getElementById("botna").disabled = false;
	}
}

function lol()
{
		alert("nice");
}