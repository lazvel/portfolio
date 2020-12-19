function kontakto(){
	var user = document.getElementById('input-ime');
	var userL = document.getElementById('Ime');
	var regUser = /^[A-Z]{1}[a-z]{1,}$/;

	if (!regUser.test(user.value)){
		userL.style.color ="red";
		userL.innerHTML = "Ime nije u dobrom formatu";
	} else{
		userL.style.color ="green";
		userL.innerHTML ="OK!";
		console.log(user.value);
	}
	
	
	var surname = document.getElementById('input-prezime');
	var surnameL = document.getElementById('Prezime');

	if (!regUser.test(surname.value)){
		surnameL.style.color ="red";
		surnameL.innerHTML = "Prezime nije u dobrom formatu";
	} else{
		surnameL.style.color ="green";
		surnameL.innerHTML ="OK!";
		console.log(surname.value);
	}
	
	var regMejl = document.getElementById('input-email');
	var regMejlL = document.getElementById('Mejl');
	var regMejl2 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	if(!regMejl2.test(regMejl.value)){
		regMejlL.style.color = "red";
		regMejlL.innerHTML = "Format mejla nije u redu";
	} else {
		regMejlL.style.color = "green";
		regMejlL.innerHTML = "OK!";
		console.log(regMejl.value);
	}
	
	var koment = document.getElementById('input-com');
	var komentL = document.getElementById('Komentar');
	var regCom = /^[a-zA-Z]{10,}$/;

	if (!regCom.test(koment.value)){
		komentL.style.color ="red";
		komentL.innerHTML = "Niste uneli dovoljno reci";
	} else{
		komentL.style.color ="green";
		komentL.innerHTML ="OK!";
		console.log(koment.value);
	}
}