<?php
    class Conexion {
        //Atributos
        private $base = "BdCrons";
        private $usuario = "root";
        private $clave = "";
        private $servidor = "localhost";

        //Metodo Conectar
        public function Conectar(){
            //Controladore de Errores
            try{
                $cnx = new PDO("mysql:host=$this->servidor; dbname=$this->base;", $this->usuario, $this->clave);
                $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $cnx;

            }catch(PDOException $ex){
                echo "Error: ".$ex->getMessage();
            }
        }
    }

?>