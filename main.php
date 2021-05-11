<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (!function_exists('str_contains')) {
        function str_contains(string $haystack, string $needle): bool
        {
            return '' === $needle || false !== strpos($haystack, $needle);
        }
    }
       
        $json = file_get_contents("php://input");
       $data = json_decode($json,true);
       
        // $id_utente = $data[0];
        // $asse_acc = $data[1];

        // echo "id".$id_utente."<br>";
        // echo "asse_acc".$asse_acc."<br>";
        // echo "dati----------------------"."<br>";
        // for ($i = 2; $i<count($data); $i++){
        //     echo  $data[$i]."<br>";
        // }
       // var_dump($data);
       $connection = mysqli_connect("localhost","root","","csvdata",3326);
        if (count($data)<3){
           
            echo"<h1>qua ci meno elementi</h1>";
        }else{
            echo"<h1>qua ci sono 3 elementi</h1>";

            
            $for_i = sizeof($data);
            $for_j = sizeof($data[0]);
            
         
            $id_utente = $data[0][0];
            if(str_contains($data[0][1],"acc")==1){
                echo "contiene acc";

                for ($j = 2; $j<10; $j++){
                    // echo "valore x" . $data[0][$j]."<br>";
                    // echo "valore y" . $data[1][$j]."<br>";
                    // echo "valore z" . $data[2][$j]."<br>";
                   // $query = "INSERT INTO acc(accX, accY, accZ, id_utente) VALUES ($data[0][$j],$data[1][$j],$data[2][$j],$data[0][0])";
                    $query = "INSERT INTO acc(accX, accY, accZ, id_utente) VALUES (321,32,3224,$id_utente)";
                    $result = mysqli_query($connection,$query);


                }
            }elseif($data[0][1]=="respiration"){
                echo "non contiene acc....";
            }elseif(str_contains($data[0][1],"gyro")==1){
                //code
            }
             
        }
        mysqli_close($connection);
      
    ?>
</body>
</html>




<!-- echo "
        <script>
        let x = document.cookie;
        //document.write(x);
        let id_utente = x.substring(3, x.length);
        
        console.log(id_utente);

         $data[0] = id_utente;
        </script>
        
        "; -->