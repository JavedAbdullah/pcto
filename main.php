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
       
        $json = file_get_contents("php://input");
        $data = json_decode($json,true);
        $id_utente = $data[0];
        $asse_acc = $data[1];

        echo "id".$id_utente."<br>";
        echo "asse_acc".$asse_acc."<br>";
        echo "dati----------------------"."<br>";
        for ($i = 2; $i<count($data); $i++){
            echo  $data[$i]."<br>";
        }
      
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