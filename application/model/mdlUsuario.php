<?php

class mdlUsuario
{

    private $nombre;
    private $contraseña;
    private $rol;
    private $estado;

    public function __set($attr, $value){

        $this->$attr = $value;

    }
     public function __get($attr){

        return $this->$attr;

    }


    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }





   public function logueo($nombre, $contraseña){


            $contraseñaE = md5($contraseña);

            $sql = "SELECT * from usuarios where nombre = ? and contraseña = ?";



             $stm = $this->db->prepare($sql);

             $stm->bindParam(1, $nombre);
             $stm->bindParam(2, $contraseñaE);

             $stm->execute();

             return $stm->fetch();


       }

}

?>
