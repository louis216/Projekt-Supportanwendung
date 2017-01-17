﻿<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
if(isset($_GET['register'])) {
 $error = false;
 $email = $_POST['email'];
 $passwort = $_POST['passwort'];
 $passwort2 = $_POST['passwort2'];
  
 if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 echo 'Bitte eine gültige E-Mail-Adresse eingeben<br>';
 $error = true;
 } 
 if(strlen($passwort) == 0) {
 echo 'Bitte ein Passwort angeben<br>';
 $error = true;
 }
 if($passwort != $passwort2) {
 echo 'Die Passwörter müssen übereinstimmen<br>';
 $error = true;
 }
 
 //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
 if(!$error) { 
 $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
 $result = $statement->execute(array('email' => $email));
 $user = $statement->fetch();
 
 if($user !== false) {
 echo 'Diese E-Mail-Adresse ist bereits vergeben<br>';
 $error = true;
 } 
 }
 
 //Keine Fehler, wir können den Nutzer registrieren
 if(!$error) { 
 $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
 
 $statement = $pdo->prepare("INSERT INTO users (email, passwort) VALUES (:email, :passwort,)");
 $result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash));
 
 if($result) { 
 echo 'Du wurdest erfolgreich registriert. <a href="login.php">Zum Login</a>';
 $showFormular = false;
 } else {
 echo 'Beim Abspeichern ist leider ein Fehler aufgetreten<br>';
 }
 } 
}
 
if($showFormular) {
?>
<?php include('header.php'); ?>
<div class ="content"> 
	<h1>User anlegen</h1>
	<form action="?register=1" method="post">
		<fieldset>	
			<div class="inputgroup">	
				<label>Vorname</label>
				<input type="text" size="40" maxlength="250" name="vorname" required>
			</div>
			<div class="inputgroup">	
				<label>Nachname</label>
				<input type="text" size="40" maxlength="250" name="nachname" required>
			</div>					
			<div class="inputgroup">	
				<label>E-Mail:</label>
				<input type="email" size="40" maxlength="250" name="email" required>
			</div>
	
			<div class="inputgroup">		
				<label>Passwort:</label>
				<input type="password" size="40"  maxlength="250" name="passwort" required>
			</div>
	
			<div class="inputgroup">	
				<label>Passwort wiederholen:</label>
				<input type="password" size="40" maxlength="250" name="passwort2" required>
			</div>
	
    		<div style="margin-top:20px">
    			<input type="submit" class="button" value="User registrieren"/>
    		</div>
		</fieldset>
	</form>
</div> 
<?php include('footer.php'); ?>
<?php
} //Ende von if($showFormular)
?>
