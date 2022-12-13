<?php
    include_once('DBConnect.php');
    include_once('Models\user.php');

    class UsersDB extends MongoDBQ{
        protected $usr;

        function __construct(){
            parent::__construct("usuarios");
            $usr= new UserModel();
        }

        //public function insertRecord($nom,$apel,$corr,$t_user,$cel,$ced,$tel,$cel_emer,$dir,$f_nac,$pass){
        public function insertRecord($reg_user){
            try{
                $this->mongo_document= new MongoDB\Driver\BulkWrite;

                $doc=['_id'=>new MongoDB\BSON\ObjectID,
                      'nombre'=>"$reg_user->nombre",
                      'apellido'=>"$reg_user->apellido",
                      'correo'=>"$reg_user->correo",
                      'tipo_usuario'=>"$reg_user->tipo_usuario",
                      'cedula'=>"$reg_user->cedula",
                      'celular'=>"$reg_user->celular",
                      'celular_emer'=>"$reg_user->celular_emer",
                      'telefono'=>"$reg_user->telefono",
                      'direccion'=>"$reg_user->direccion",
                      'fecha_nacimiento'=>"$reg_user->fecha_nacimiento",
                      'password'=>"$reg_user->pass"];

                $this->mongo_document->insert($doc);
                $this->mongo_client->executeBulkWrite($this->mongo_database.'.'.$this->mongo_collection,$this->mongo_document);
            }
            catch(MongoDB\Driver\Exception\Exception $e){
                echo "Ocurrio la siquiente Excepcion al tratar de ingresar usuario: ",$e->getMessage(),"\n";
            }          
        }

        public function getRecord($user_id){
            $res =new UserModel();
            try{
                //echo "<br><br><br><br><br><br><br><br><br>".$user_id;
                $filter=['cedula'=>$user_id];
                $query = new MongoDB\Driver\Query($filter);
                $row= $this->mongo_client->executeQuery($this->mongo_database.'.'.$this->mongo_collection,$query);
                
                foreach ($row as $d) {
                    //echo "<br> column es: ".$d->cedula;  
                    $res->nombre= $d->nombre;
                    $res->apellido = $d->apellido;
                    $res->correo = $d->correo;
                    $res->tipo_usuario = $d->tipo_usuario;
                    $res->cedula = $d->cedula;
                    $res->celular= $d->celular;
                    $res->celular_emer = $d->celular_emer;
                    $res->telefono = $d->telefono;
                    $res->direccion = $d->direccion;
                    $res->fecha_nacimiento = $d->fecha_nacimiento;
                    $res->pass = $d->password;                  
                }
            }
            catch(MongoDB\Driver\Exception\Exception $e){
                echo "Ocurrio un error durante busqueda de usuario: ",$e->getMessage(),"\n";
            }
            return $res;
        }
    }
?>