<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" HREF="css/styles.css">
    <title>Caja del Seguro Social</title>
</head>
<body>
    <?php
        if(isset($_SESSION['usuario_valido'])){
            require_once('classes\medicine.php');
            $cedula= $_SESSION['cedula'];
            $t_usuario = $_SESSION['tipo_usuario'];
            $log = new Medicines();
            echo $log;
        }
        else{
            header("location:index.php");
        }
        
    ?>
</body>
</html>