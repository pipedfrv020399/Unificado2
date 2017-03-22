<?php

/**
* 
*/
class Maestras extends Controller
{

	/*private $mdlEstado;
	private $mdlGenero;
	private $mdlTDocumento;
	private $mdlTCliente;*/

	function __construct()
	{
		/*$this->mdlEstado = $this->loadModel("mdlEstado");
		$this->mdlGenero = $this->loadModel("mdlGenero");
		$this->mdlTDocumento = $this->loadModel("mdlTDocumento");
		$this->mdlTCliente = $this->loadModel("mdlTCliente");*/
	}
	
	public function index()
	{
		/*$Estado = $this->mdlEstado->ListarEstados();
        $Genero = $this->mdlGenero->ListarGeneros();
        $TDocumento = $this->mdlTDocumento->ListarTDocumentos();
        $TCliente = $this->mdlTCliente->ListarTClientes();*/

		require APP.'view/_templates/header.php';
		require APP.'view/HERRAMIENTAS/herramientas/maestras.php';
		require APP.'view/_templates/footer.php';
	}
}