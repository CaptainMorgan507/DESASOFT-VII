<?php
    class MongoDBQ{
        protected $mongo_client;
        protected $mongo_host;
        protected $mongo_user;
        protected $mongo_pswd;
        protected $mongo_database;
        protected $mongo_collection;
        protected $mongo_document;

        function __construct($collect){
            $this->mongo_host="localhost:27017";
            $this->mongo_user="";
            $this->mongo_pswd="";
            $this->mongo_database="CSS_MEDICAMENTOS";
            $this->mongo_collection = $collect;
            $this->conectMongoDB();
        }

        public function conectMongoDB(){
            try{
                $this->mongo_client= new MongoDB\Driver\Manager("mongodb://".$this->mongo_host);
            }
            catch(Exception $e){
                die("Error on exception when conecting to DB: ".$e->getMessage());
            }
        }
    }
?>