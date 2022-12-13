<?php
    //Encabezados obligatorios.
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods:POST");
    header("Access-Control-Max-Age:3600");
    header("Access-Control-Allow-Header:Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    
    //incluir los archivos para conexion
    include_once("MongoDB/DBUsers.php");
    include_once("MongoDB/Models/user.php");
    $user= new UsersDB();

    $data= json_decode(file_get_contents("php://input"));
    $objusr= new UserModel();
    $objusr->nombre= $data->name;
    $objusr->apellido= $data->lastname;
    $objusr->correo= $data->email;
    $objusr->tipo_usuario="aseg";
    $objusr->cedula=$data->user_id;
    $objusr->celular=$data->cphone1;
    $objusr->telefono=$data->cphone2;
    $objusr->celular_emer=$data->cphone3;
    $objusr->direccion= $data->dir; 
    $objusr->fecha_nacimiento= $data->b_date;
    $objusr->pass=$data->pass1;

    if(
        !empty($objusr->nombre)&&
        !empty($objusr->apellido)&&
        !empty($objusr->correo)&&
        !empty($objusr->tipo_usuario)&&
        !empty($objusr->cedula)&&
        !empty($objusr->celular)&&
        !empty($objusr->telefono)&&
        !empty($objusr->celular_emer)&&
        !empty($objusr->direccion)&&
        !empty($objusr->fecha_nacimiento)&&
        !empty($objusr->pass)
    ){
        $user->insertRecord($objusr);    
        http_response_code(201);

        echo json_encode(array("response"=>"true"));
    }
    else{
        http_response_code(400);
        echo json_encode(array("response"=>"false"));
    }
        
       
    

?>