<?php 
    if(isset($_POST["number"])){
        $nombre = (int) $_POST["number"];
        $countdiv = 1;
        for($i = 2; $i < $nombre; $i++){
            if($nombre % $i == 0){
                $countdiv++;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Premier</title>
</head>
<body>
   <form method="POST">
    <label for="">Entrer le rayon :</label>
    <input type="text" name="number" required>
    <button type="submit">Envoyer</button>
   </form>
   <?php
    if(isset($_POST["number"])){
        if ($countdiv>1){
            echo "<p>$nombre n'est pas premier</p>";
        }else{
            echo "<p>$nombre est premier</p>";
        }
    }
    ?>
</body>
</html>