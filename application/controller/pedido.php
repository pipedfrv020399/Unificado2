<?php 


/**
* 
*/
class Pedido extends Controller
{

	#private $mdlEstado;

	function __construct()
	{
		#$this->mdlEstado = $this->loadModel("mdlEstado");
	}
	
	public function index()
	{
         #$Estado = $this->mdlEstado->ListarEstados();

		require APP.'view/_templates/header.php';
		require APP.'view/PEDIDO/pedido/listarPedidos.php';
		require APP.'view/_templates/footer.php';
	}

	public function listar(){

		require APP.'view/_templates/header.php';
		require APP.'view/pedido/listarPedido.php';
		require APP.'view/_templates/footer.php';
	}



}