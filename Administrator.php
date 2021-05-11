<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
</head>
<body>
<?php
	$connection = mysqli_connect("localhost","root","","test",3326);
						    	#$connection = mysqli_connect("localhost","root","","DB_Bed_and_Breakfast",3306); nel caso non si connettesse al database, togliere la password
									$username=$_POST["nome"];
									$password=$_POST["Password"];
									
									$query="SELECT * FROM prova WHERE username='$username' AND password='$password'";
									$result = mysqli_query($connection,$query);
									if(mysqli_num_rows($result)<1)
									{
										echo"Errore nelle credenziali";
									}
									else if (mysqli_num_rows($result)!=0)
									{  
										// Initialize cookie name
										$cookie_name = "id";
										$id_utente = 0;
										while($row = mysqli_fetch_array($result)){
											$id_utente = $row[0];
										}
										$cookie_value = $id_utente;
										
										// Set cookie
										setcookie($cookie_name, $cookie_value);
										
										// if(!isset($_COOKIES[$cookie_name])) 
										// {
										// 	print("Cookie created | ");
										// }
										
									}
?>
<form action="Homepage.php">
    	<input type="submit" value="Homepage" name="Homepage">
</form>

<script type="text/javascript" src="js/script.js"></script>

</body>
</html>