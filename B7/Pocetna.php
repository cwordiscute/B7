<html>
<head>
<link rel="stylesheet" href="stil.css">
<meta  http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
<title>Biblioteka</title>

<div class="menu">
<ul>
<li><a href="Pocetna.php" >Početna</a></li>
<li><a href="Pregled.php" >Pregled</a></li>
<li><a href="O_autoru.html" >O autoru</a></li>
<li><a href="Uputstvo.html" >Uputstvo</a></li>
</ul>
</div>

<form method="POST">
		<div>
			<label>Ime</label>
			<input type="text" name="ime" >
		</div>
		<br><br>
		<div>
			<label>Šifra</label>
			<input type="password" name="pass">
		</div>
		<br><br>
		
		<input type="submit" value="Uloguj se" name="dugme">
		<br><br>

<?php

$conn= mysqli_connect('localhost', 'root','','log');


$ime = $pass ="";

if(isset($_POST["dugme"])){

    $ime = $_POST["ime"];
    $pass =$_POST["pass"];
  

	if($ime && $pass){
		$sql="SELECT * FROM korisnik WHERE Ime ='{$ime}' AND Sifra='{$pass}'";
		$x= mysqli_query($conn, $sql);
		$row= mysqli_fetch_assoc($x);


	if( $row["Ime"]==$ime && $row["Sifra"]== $pass){
		echo "Dobrodosli na svoj profil!";
	}
	else {
		echo "Uneti podaci nisu tacni.";
	}
	mysqli_close($conn);
}
	else{
		echo "<p>Morate uneti podatke</p>";
	}

}


?>
</form>
</body>
</html>