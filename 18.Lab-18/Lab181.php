<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <FORM name="registro" action="Lab181.php" METHOD="POST">
        <LABEL>Correo: </LABEL><INPUT TYPE="email" id="email" name="email" pattern="[a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-
        9\._-]+)+$"><BR>
        <LABEL>Nombre: </LABEL><INPUT TYPE="text" id="nombre" name="nombre"><BR>
        <LABEL>Apellido: </LABEL><INPUT TYPE="text" id="apellido" name="apellido"><BR>
        <LABEL>Contraseña: </LABEL><INPUT TYPE="password" id="contraseña1" name="contraseña1" pattern=".*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$"><BR>
        <LABEL>Repetir Contraseña: </LABEL><INPUT TYPE="password" id="contraseña2" name="contraseña2" ><BR>
        <LABEL>Ip del Equipo: </LABEL><INPUT TYPE="ip" id="eip" name="eip"><BR>
        <INPUT TYPE="submit" value="Registrar" name="reg"></INPUT>
    </FORM>
    <?php
        if($_SERVER['REQUEST_METHOD']==='POST'){
            
            if(array_key_exists('reg',$_POST)){
                if( !empty($_REQUEST['email'])&&
                    !empty($_REQUEST['nombre'])&&
                    !empty($_REQUEST['apellido'])&&
                    !empty($_REQUEST['contraseña1'])&&
                    !empty($_REQUEST['contraseña2'])&&
                    !empty($_REQUEST['eip'])
                    )
                {
                    $email= $_REQUEST['email'];
                    $pass1= $_REQUEST['contraseña1'];
                    $pass2= $_REQUEST['contraseña2'];
                    $ip = $_REQUEST['eip'];

                    if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email)){
                        echo "<br>El email es valido!<br>";
                        if($pass1==$pass2){
                            echo "<br>Contraseñas son iguales!<br>";

                            if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $pass1)){

                                echo "Su password es seguro.<br>";

                                if(preg_match("/^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])" .
                                "(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$/", $ip )){
                                    echo " El ip es reconocido<br>";
                                }
                                else{
                                    echo " El ip no es reconocido<br>";
                                }
                            }        
                            else{
                                echo "Su password no es seguro.<br>";
                            }
                        }
                        else{
                            echo "<br>Las contraseñas no coinciden!";
                        }
                        
                        
                    }
                    else{
                        Echo "<BR> El email no es valido!";
                    }
                }
                else{
                    echo "<br> Por favor llene todos los campos!";
                }
                
            }
        }
        
    ?>
</body>
</html>