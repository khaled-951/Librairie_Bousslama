function id()
{
		b=livadd.nom_destinataire.value;
		var valide1=false;
	var re = new RegExp("^[a-zA-Z]+$", "g");
	    if(re.test(b)) 
    	{
    		valide1=true;  
    		
    	}

    	return valide1;

}

function tryy()
{
if (!id())
alert("error");
}	

