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
    


       
        echo "i dati sono stati caricati"."<br>";
    
        
        $id_utente = $_COOKIE["id"];

        $patch_file =   $_FILES["csvFileInput"]["tmp_name"];

        $tipo_file =  $_COOKIE["tipo_file"];

        $connection = mysqli_connect("localhost","root","","csvdata",3326);

        $nome_file = "csvFileInput";
        function clean_dir($nome_file){
            /*
                Pulisce la directory del file convertendo le \ in / 
            */
            $file = $_FILES[$nome_file]["tmp_name"];
            $newDir = str_replace('\\', '/', $file);
            return $newDir;
        }

      //  upload($nome_file,$connection,$id_utente,"acc");

      if(str_contains($tipo_file,"acc")){
        upload($nome_file,$connection,$id_utente,"acc");
      }elseif(str_contains($tipo_file,"respiration")){
        upload($nome_file,$connection,$id_utente,"ecg");
      }elseif(str_contains($tipo_file,"gyro")){
        upload($nome_file,$connection,$id_utente,"gyro");
      }

       
        function upload($nome_file, $connection, $id_utente, $table){
            /*
                Esegue la query per caricare il csv nella tabella ($table) corrispondente
        
                $sessione = id sessione di allenamento che ci interessa
            */
            $date = date('m/d/Y h:i:s a', time());
            
            try {
                $file = clean_dir($nome_file);
                $query = "LOAD DATA INFILE '". $file. "'
                INTO TABLE $table 
                FIELDS TERMINATED BY ',' 
                ENCLOSED BY '\"'
                LINES TERMINATED BY '\\n'
                IGNORE 1 ROWS
                SET id_utente= $id_utente,time_inserimento='$date' ";
        
                $result = mysqli_query($connection, $query);
        
                if (!$result)
                {
                    throw new Exception("Problema! Avvenuto col file: ". $file . "<br>");
                }
            } catch (Throwable $e) {
                echo $e->getMessage();
            }
            
        
            echo mysqli_error($connection);
        }




        mysqli_close($connection);


     //  echo  $_FILES["csvFileInput"]["tmp_name"];

     
    //    $file = $_FILES[$data]["tmp_name"];
    //    $newDir = str_replace('\\', '/', $file);
        
      // echo $newDir;

       
       
        // $id_utente = $data[0];
        // $asse_acc = $data[1];

        // echo "id".$id_utente."<br>";
        // echo "asse_acc".$asse_acc."<br>";
        // echo "dati----------------------"."<br>";
        // for ($i = 2; $i<count($data); $i++){
        //     echo  $data[$i]."<br>";
        // }
       // var_dump($data);



    //    $connection = mysqli_connect("localhost","root","","csvdata",3326);
    //     if (count($data)<3){
           
    //         echo"<h1>qua ci meno elementi</h1>";
    //     }else{
    //         echo"<h1>qua ci sono 3 elementi</h1>";

            
    //         $for_i = sizeof($data);
    //         $for_j = sizeof($data[0]);
            
         
    //         $id_utente = $data[0][0];
    //         if(str_contains($data[0][1],"acc")==1){
    //             echo "contiene acc";

    //             for ($j = 2; $j<100; $j++){
    //                 // echo "valore x" . $data[0][$j]."<br>";
    //                 // echo "valore y" . $data[1][$j]."<br>";
    //                 // echo "valore z" . $data[2][$j]."<br>";
    //                  $valore_x =  $data[0][$j];
    //                  $valore_y = $data[1][$j]; 
    //                  $valore_z = $data[2][$j];

    //               // $query = "INSERT INTO acc(accX, accY, accZ, id_utente) VALUES ($valore_x ,$valore_x ,$valore_x,$id_utente)";
    //                 // $query = "INSERT INTO acc(accX, accY, accZ, id_utente) VALUES (321,32,3224,$id_utente)";
    //                 //$result = mysqli_query($connection,$query);


    //             }
    //         }elseif($data[0][1]=="respiration"){
    //             echo "non contiene acc....";
    //         }elseif(str_contains($data[0][1],"gyro")==1){
    //             //code
    //         }
             
    //     }
    //     mysqli_close($connection);
      
    ?>
    <script src="script.js"></script>
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