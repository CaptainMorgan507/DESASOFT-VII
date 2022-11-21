<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    //la conexion a la base de datos esta aqui

    //incluir archivos de configuracion
    include_once('../Configuracion/config.php');
    include_once('../Objetos/producto.php');

    //iniciar la conexion a la base de datos
    $conex = new Conexion();
    $db = $conex->obtenerConexion();

    //inicializar el objeto

    $producto = new Producto($db);

    //lectura de los productos

    //query de productos

    $stmt= $producto->read();   
    $num = $stmt->rowCount();

    //verificar si hay mas de 0 registros encontrados
    if($num>0){
        //arreglo de productos
        $products_arr= array();
        $products_arr["records"]= array();

        //obtiene todo el contenido de la tabla
        //fetch() es mas rapido que fetchAll()

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            //extraer la fila
            //esto creara de $row['nombre'] a solamente $nombre

            extract($row);

            $product_item = array(
                "id"=>$id,
                "nombre"=>$nombre,
                "descripcion"=>html_entity_decode($descripcion),
                "precio"=>$precio,
                "categoria_id"=>$categoria_id,
                "categoria_desc"=>$categoria_desc
            );

            array_push($products_arr["records"],$product_item);
        }

        //asignar codigo de respuesta
        http_response_code(200);

        //mostrar productos en formato JSON
        echo json_encode($products_arr);
    }
    else{
        //asignar codigo de respuesta - 404 NOT FOUND
        http_response_code(400);

        //informarle al usuario que no se encontraron productos
        echo json_encode(
            array("mensaje"=>"No se encontraron productos")
        );
    }

?>
