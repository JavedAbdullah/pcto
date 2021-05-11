<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV Viewer with HTML, CSS & JavaScript</title>
    <link rel="short cat icon " href="lib/docs/resources/favicon.ico">
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="css/style.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@3.1.1/dist/chart.min.js" ></script> -->





    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js">
    </script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
    </script>



    <script src="https://code.highcharts.com/stock/highstock.js">
    </script>
    <script src="https://code.highcharts.com/stock/modules/data.js">
    </script>
    <script src="https://code.highcharts.com/stock/modules/exporting.js">
    </script>
    <script src="https://code.highcharts.com/stock/modules/export-data.js">
    </script>












</head>

<body>

<?php
	$connection = mysqli_connect("localhost","root","","csvdata",3326);
						    	#$connection = mysqli_connect("localhost","root","","DB_Bed_and_Breakfast",3306); nel caso non si connettesse al database, togliere la password
									$username=$_POST["nome"];
									$password=$_POST["Password"];
									
									$query="SELECT * FROM utente WHERE username='$username' AND passwd='$password'";
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
                                      echo"  <a href='disegnaACC.php'>vai al disegno dei ACC</a>";
                                       echo" <br>";
                                      echo"  <a href='main.php'> vai nella pagina php</a>";
                                      echo"  <br>";
                                       echo" <a href='Login.php'>vai al login</a>";
										
									}
                                    mysqli_close($connection);
?>




   

    <!-- 
<div id="accX" style="height: 400px; min-width: 310px"></div>
<div id="accY" style="height: 400px; min-width: 310px"></div>
<div id="accZ" style="height: 400px; min-width: 310px"></div> -->











    <script src="lib/papaparse.min.js">
    </script>
    <script type="module" src="js/script.js"></script>


</body>

</html>