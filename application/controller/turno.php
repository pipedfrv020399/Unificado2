<?php


/**
* 
*/
class Turno extends Controller
{

	#private $mdlTurno;
	
	    function __construct()
	{
		#$this->mdlTurno = $this->loadModel("mdlTurno");
		
	}

	public function index()
	{

		#$Turno = $this->mdlTurno->ListarTurnos();
		require APP.'view/_templates/header.php';
		require APP.'view/PERSONAL/turno/listarTurno.php';
		require APP.'view/_templates/footer.php';
	}

	/*public function InsertarTurno()
	{
			$this->mdlTurno->__set("Nombre", $_POST["txtnom"]);
			$this->mdlTurno->__set("Fecha_inicio", $_POST["txtini"]);
			$this->mdlTurno->__set("Fecha_final", $_POST["txtfin"]);
	       $this->mdlTurno->__set("Descripcion", $_POST["txtdes"]);
			$C = $this->mdlTurno->InsertarTurno();
			header("location: ".URL."turno/index");
	}

	public function edit($cod)
	{
		$this->mdlTurno->__set("Codigo", $cod);
		$E = $this->mdlTurno->ConsultarTurno();

		require APP.'view/_templantes/header.php';
		require APP.'view/Turno/Turno.php';
		require APP.'view/_templates/footer.php';
	}

	public function ModificarTurno()
	{
		    $this->mdlTurno->__set("Codigo", $_POST["txtcod"][$i]);
		    $this->mdlTurno->__set("Nombre", $_POST["txtnom"][$i]);
			$this->mdlTurno->__set("Fecha_inicio", $_POST["txtini"][$i]);
			$this->mdlTurno->__set("Fecha_final", $_POST["txtfin"][$i]);
			$this->mdlTurno->__set("Estado", $_POST["optest"]);
		$M = $this->mdlTurno->ModificarTurno();
		header("location:  ".URL."Turno/Turno");


	}

	 public function CambiarEstado($cod){
    	$this->mdlTurno->__set("Codigo", $cod);
    	$this->mdlEmpleado->__set("Estado", $_POST["optest"]);
    	$eliminar = $this->mdlTurno->CambiarEstado();

    	   if ($eliminar) {
         echo json_encode(["v"=>1]);
          }
         else{
         echo json_encode(["v"=>0]);
      }
   
    }*/
	
}

?>
