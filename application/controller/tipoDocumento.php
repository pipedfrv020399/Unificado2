<?php



class TipoDocumento extends controller
{
	
	private $mdlTDocumento;

	function __construct()
	{
		$this->mdlTDocumento = $this->loadModel("mdlTDocumento");
	}

	public function index(){

		$TDocumento = $this->mdlTDocumento->ListarTDocumentos();

		require APP.'view/_templates/header.php';
		require APP.'view/herramientas/maestras.php';
		require APP.'view/_templates/footer.php';
	}

	public function InsertarTDocumento(){

           $this->mdlTDocumento->__set("Nombre", $_POST["txtnom"]);
           $R = $this->mdlTDocumento->InsertarTDocumento();
           header("location:".URL."TipoDocumento/index");
	}

	public function edit($cod){
		$this->mdlTDocumento->__set("Codigo", $cod);
		$E = $this->mdlTDocumento->ConsultarUno();
		header("location:  ".URL."tDocumento/tDocumento");
	}

	public function ModificarTDocumento(){
		$this->mdlTDocumento->__set("Codigo", $_POST["txtcod"]);
		$this->mdlTDocumento->__set("Nombre", $_POST["txtnom"]);
		$M = $this->mdlTDocumento->ModificarTDocumento();
	   header("location:  ".URL."tDocumento/tDocumento");
	}

	 public function BorrarTDocumento($cod){
    	$this->mdlTDocumento->__set("Codigo", $cod);
    	$eliminar = $this->mdlTDocumento->BorrarTDocumento();
    	header("location:".URL."TipoDocumento/index");

    }
}

?>