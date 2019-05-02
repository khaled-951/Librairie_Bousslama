function verifierNom (){
	const ver=document.getElementById("nom").value;
	var letters = /^[A-Za-z- -]+$/;
	const erreur=document.getElementById("erreurnom");
	if(ver!==""){
		ver.replace(' ','');
		ver.trim();
		if(ver!==""){
			
					if(!ver.match(letters)){
				erreur.innerHTML="nom n'est pas un numero";
			return false;
		}
			else{
			erreur.innerHTML="";
			return true;
		}}
		else{
			erreur.innerHTML="verifier votre nom";
			return false;
		}
	}
	else{
		erreur.innerHTML="verifier votre nom";
			return false;
	}
	
}
function verifierPrenom (){
	var letters = /^[A-Za-z- -]+$/;

	const ver=document.getElementById("prenom").value;
	const erreur=document.getElementById("erreurprenom");
	if(ver!==""){
		ver.replace(' ','');
		ver.trim();
		if(ver!==""){
					if(!ver.match(letters)){
				erreur.innerHTML="prenom n'est pas un numero";
			return false;
		}
			else{
			erreur.innerHTML="";
			return true;
		}}
		else{
			erreur.innerHTML="verifier votre prenom";
			return false;
		}
	}
	else{
		erreur.innerHTML="verifier votre prenom";
			return false;
	}
	
}
function verifierAdresse (){
	const ver=document.getElementById("adresse").value;
	const erreur=document.getElementById("erreuradresse");
	if(ver!==""){
		ver.replace(' ','');
		ver.trim();
		if(ver!==""){
			erreur.innerHTML="";
			return true;
		}
		else{
			erreur.innerHTML="verifier votre adresse";
			return false;
		}
	}
	else{
		erreur.innerHTML="verifier votre adresse";
			return false;
	}
	
}


function verifierId (){
	const ver=document.getElementById("id").value;
	const erreur=document.getElementById("erreuridd");
	if(ver!==""){
		ver.replace(' ','');
		ver.trim();
		if(ver!==""){
					if(isNaN(ver)){
				erreur.innerHTML="id est un numero";
			return false;
		}
			else{
			erreur.innerHTML="";
			return true;
		}}
		else{
			erreur.innerHTML="verifier votre id";
			return false;
		}
	}
	else{

		erreur.innerHTML="verifier votre id";
			return false;
	}
	
}


function verifierNumTel (){
	const ver=document.getElementById("numTel").value;
	const erreur=document.getElementById("erreurnumtel");
	if(ver!==""){
		ver.replace(' ','');
		ver.trim();
		if(ver!==""){
					if(isNaN(ver)){
				erreur.innerHTML="numero de téléphone est un numero";
			return false;
		}
			else{
			erreur.innerHTML="";
			return true;
		}}
		else{
			erreur.innerHTML="verifier votre numero de téléphone";
			return false;
		}
	}
	else{

		erreur.innerHTML="verifier votre numero de téléphone";
			return false;
	}
	
}

function executerverif(){
verifierId();
verifierNom();
verifierPrenom ();
verifierAdresse ();
verifierNumTel();
if(verifierId() && verifierNom() && verifierPrenom () && verifierAdresse () && verifierNumTel() ){
return true;
}
else return false;

}
