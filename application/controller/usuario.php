<?php

class usuario extends controller
{
  private $mdlUsuario;
  private $mdlRol;
  function __construct()
  {
    $this->mdlUsuario=$this->loadModel("mdlUsuario");

  }



    public function logueo()
    {
        // if we have an id of a song that should be deleted
        if (isset($_POST["login"])) {
            // do deleteSong() in model/model.php

            $v=$this->mdlUsuario->logueo($_POST["nombre"], $_POST["contraseña"]);

            if ($v != false) {

              header('location: ' . URL . 'reservas/index');

            }else {


              header('location: ' . URL . 'home');


            }
        }

        // where to go after song has been deleted

    }

  }




 ?>
