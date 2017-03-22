<?php



class TipoCliente extends controller
{
	
	private $mdlTCliente;

	function __construct()
	{
		$this->mdlTCliente = $this->loadModel("mdlTCliente");
	}

	public function index(){

		$TCliente = $this->mdlTCliente->ListarTClientes();

		require APP.'view/_templates/header.php';
		require APP.'view/herramientas/maestras.php';
		require APP.'view/_templates/footer.php';
	}

	public function InsertarTCliente(){

           $this->mdlTCliente->__set("Nombre", $_POST["txtnom"]);
           $R = $this->mdlTCliente->InsertarTCliente();
           header("location:".URL."maestras/index");
	}

	public function edit($cod){
		$this->mdlTCliente->__set("Codigo", $cod);
		$E = $this->mdlTCliente->ConsultarUno();
		header("location:  ".URL."tCliente/tCliente");
	}

	public function ModificarTCliente(){
		$this->mdlTCliente->__set("Codigo", $_POST["txtcod"]);
		$this->mdlTCliente->__set("Nombre", $_POST["txtnom"]);
		$M = $this->mdlTCliente->ModificarTCliente();
	   header("location:  ".URL."tCliente/tCliente");
	}

	 public function BorrarTCliente($cod){
    	$this->mdlTCliente->__set("Codigo", $cod);
    	$eliminar = $this->mdlTCliente->BorrarTCliente();
           header("location:".URL."maestras/index");

    }
}

?>