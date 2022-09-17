function KontaktValidation()
{
	var emailTekst= document.forma.email.value;
	var emailPattern = /^[a-zA-Z0-9]{7,15}@gmail.com$/;
	var rezultat = emailTekst.match(emailPattern);

	if(rezultat!=null)
	{
		alert("Poruka Poslata");
	}
	else
	{
		alert("Email nije ok!");
	}
}