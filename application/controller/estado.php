<?php


/**
* 
*/
class Estado extends Controller
{

	private $mdlEstado;
	
	    function __construct()
	{
		$this->mdlEstado = $this->loadModel("mdlEstado");
		
	}

	public function index()
	{
		$Estado = $this->mdlEstado->ListarEstados();

		require APP.'view/_templates/header.php';
		require APP.'view/estado/listarEstado.php';
		require APP.'view/_templates/footer.php';
	}

	public function Listado()
	{
		$Estado = $this->mdlEstado->ListarEstados();

		require APP.'view/_templates/header.php';
		require APP.'view/estado/listarEstado.php';
		require APP.'view/_templates/footer.php';
	}


	public function InsertarEstado()
	{
			$this->mdlEstado->__set("Nombre", $_POST["txtnom"]);
			$this->mdlEstado->__set("Color", $_POST["txtcol"]);
			$C = $this->mdlEstado->InsertarEstado();
			header("location:  ".URL."maestras/index");

		
	}

	public function edit($cod)
	{
		$this->mdlEstado->__set("Codigo",$cod);
		$datos = $this->mdlEstado->ConsultarUno();
		echo json_encode($datos);
	}

	public function ModificarEstado()
	{
		$this->mdlEstado->__set("Codigo", $_POST["txtcod"]);
		$this->mdlEstado->__set("Nombre", $_POST["txtnom"]);
		$this->mdlEstado->__set("Color", $_POST["txtcol"]);
		$M = $this->mdlEstado->ModificarEstado();


	}

	 public function BorrarEstado($cod){
    	$this->mdlEstado->__set("Codigo", $cod);
    	$eliminar = $this->mdlEstado->BorrarEstado();
    	header("location:  ".URL."maestras/index");
    }
	
}

?>
