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

    if(
        !empty($data->cedula)
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