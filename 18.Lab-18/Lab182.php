<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <FORM name="registro" action="Lab182.php" METHOD="POST">
        <LABEL>Correo: </LABEL><INPUT TYPE="email" id="email" name="email" pattern="[a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-
        9\._-]+)+$"><BR>
        <LABEL>Nombre: </LABEL><INPUT TYPE="text" id="nombre" name="nombre"><BR>
        <LABEL>Apellido: </LABEL><INPUT TYPE="text" id="apellido" name="apellido"><BR>
        <LABEL>Contraseña: </LABEL><INPUT TYPE="password" id="contraseña1" name="contraseña1" pattern=".*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$"><BR>
        <LABEL>Repetir Contraseña: </LABEL><INPUT TYPE="password" id="contraseña2" name="contraseña2" ><BR>
        <LABEL>Ip del Equipo: </LABEL><INPUT TYPE="ip" id="eip" name="eip" pattern="([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5]).(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$"><BR>
        <INPUT TYPE="submit" value="Registrar" name="reg"></INPUT>
    </FORM>
    <?php
        
        
    ?>
</body>
</html>