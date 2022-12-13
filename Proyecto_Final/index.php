<?php
    session_start();

    if(isset($_REQUEST['user'])&& isset($_REQUEST['pass'])){
        $usuario = $_REQUEST['user'];
        $clave= $_REQUEST['pass'];

        require_once("classes/API/MongoDB/DBUsers.php");
        require_once("classes/API/MongoDB/Models/user.php");

        $usr= new UserModel();
        
        $objuser= new UsersDB();
        $usr= $objuser->getRecord($usuario);
        if(strcmp($usr->pass,$clave)==0){
            
            $usuario_valido = $usuario;
            $_SESSION["usuario_valido"]=$usuario_valido;
            $_SESSION["tipo_usuario"]=$usr->tipo_usuario;
            $_SESSION["cedula"]=$usr->cedula;
        } 
    }
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
        
        if(isset($_SESSION["usuario_valido"])){
            if($_SERVER['REQUEST_METHOD']==='GET'){
                session_destroy();
                header("Location:index.php");
            }
            else if($_SERVER['REQUEST_METHOD']==='POST'){
                if(array_key_exists('register_user',$_POST)){
                    include_once("classes\API\MongoDB\DBUsers.php");
                    require_once('classes\API\MongoDB\Models\user.php');
                    $user= new UsersDB();
                    $objusr= new UserModel();
                    $objusr->nombre= $_REQUEST['name'];
                    $objusr->apellido= $_REQUEST['lastname'];
                    $objusr->correo= $_REQUEST['email'];
                    $objusr->tipo_usuario="aseg";
                    $objusr->cedula=$_REQUEST['user_id'];
                    $objusr->celular=$_REQUEST['cphone1'];
                    $objusr->telefono=$_REQUEST['cphone2'];
                    $objusr->celular_emer=$_REQUEST['cphone3'];
                    $objusr->direccion= $_REQUEST['dir'];
                    $objusr->fecha_nacimiento= $_REQUEST['b_date'];
                    $objusr->pass=$_REQUEST['pass1'];
                    $user->insertRecord($objusr);
                }
                else{
                    header("Location:mainpage.php");
                }   
            }
        }
        //Sesion no iniciada
        else{
            require_once('classes\login.php');
            $log = new Login();           
            echo $log;
        }
        
        

        

    
    ?>
</body>
</html>