<?php



class Genero extends controller
{
	
	private $mdlGenero;

	function __construct()
	{
		$this->mdlGenero = $this->loadModel("mdlGenero");
	}

	public function index(){

		$Genero = $this->mdlGenero->ListarGeneros();

		require APP.'view/_templates/header.php';
		require APP.'view/herramientas/maestras/genero';
		require APP.'view/_templates/footer.php';
	}

	public function InsertarGenero(){

           $this->mdlGenero->__set("Nombre", $_POST["txtnom"]);
           $R = $this->mdlGenero->InsertarGenero();
            header("location:  ".URL."maestras/index");
            
		
	}

	public function edit($cod){
		$this->mdlGenero->__set("Codigo", $cod);
		$E = $this->mdlGenero->ConsultarUno();
		header("location:  ".URL."genero/genero");
	}

	public function ModificarGenero(){
		$this->mdlGenero->__set("Codigo", $_POST["txtcod"]);
		$this->mdlGenero->__set("Nombre", $_POST["txtnom"]);
		$M = $this->mdlGenero->ModificarGenero();
	   header("location:  ".URL."genero/genero");
	}

	 public function BorrarGenero($cod){
    	$this->mdlGenero->__set("Codigo", $cod);
    	$eliminar = $this->mdlGenero->BorrarGenero();
    	header("localtion: ".URL."maestras/index");
    }
}

?>