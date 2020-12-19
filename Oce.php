<?php
	if(isset($_POST['ime'])){
    
    $name=$_POST['ime'];
}

	if(isset($_POST['prezime'])){
    
    $surname=$_POST['prezime'];
}

	if(isset($_POST['email'])){
    
    $email=$_POST['email'];
}

	if(isset($_POST['komentar'])){
    
    $comment=$_POST['komentar'];
}
	
	if(isset($_POST['gender'])){
    
    $gender=$_POST['gender'];
}

	if(isset($_POST['kontakt'])){
    
    $purpose=$_POST['kontakt'];
}

	if(isset($_POST['prihvatam'])){
    
    $agree=$_POST['prihvatam'];
}

	session_start();
	
	if(isset($_SESSION['views']))
		$_SESSION['views'] = $_SESSION['views'] + 1;
	else
		$_SESSION['views'] = 1;

	class Osoba{

	public $ime;
	
	public function postaviIme($ime)
	{
	
	$this->ime=$ime;
	
	}
	
	public function prikaziIme()
	{
	
	return $this->ime;
	
	}
	
	}
	
	$ja=new Osoba();
	$ja->postaviIme("Pero Pauk");
	$ja->postaviIme("Laz Vel");
		
	
?>

<html>
	<head>
		<title>Konfirmacija</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="primary-form.css">
	</head>
	<body>
		<div id="konfirmacija">
			<?php
				//echo "<h1>Kontakt potvrdjen</h1><br>";
				define("Kontakt", "<strong>Vas kontakt je potvrdjen!</strong><br><br>");
    
				function poZdrav(){
				echo Kontakt;
				}
				poZdrav();
				
				echo "<b> Ime: </b>" , $name , "<br>";
				echo "<b> Prezime: </b>" , $surname , "<br>";
				echo "<b> E-mail: </b>" , $email , "<br>";
				echo "<b> Pol: </b>" , $gender , "<br>";
				echo "<b> Svrha kontakta: </b>" , $purpose , "<br>";
				echo "<b> Uslovi koriscenja: </b>" , $agree , "<br>";
				echo "<b> Vas komentar: </b>" , $comment , "<br> Koji ima: ", str_word_count($comment), " reci " , "i " , strlen($comment), " karaktera<br>";
				echo "<h2><font color=\"green\"> Hvala na kontaktiranju </font></h2>";
				
				echo "<b>Vreme:  </b>" , date('H:i, jS F'), "<br><br>";
				
				echo "Broj pregleda stranice= " .$_SESSION['views'] ,"<br>";
				
				switch($_SESSION['views']) {
				case ($_SESSION['views']<=49): echo ""; 
					break;
				case 50: echo "Cesitam. Dobili ste 10% popusta na sledeci sajt!<br>"; 
					break;
				case 100: echo "Cesitam. Dobili ste 15% popusta na sledeci sajt!<br>";
					break;
				}	
				
				echo "Edited by: " , $ja->prikaziIme(), "<br>";
			?>
		</div>
	</body>
</html>