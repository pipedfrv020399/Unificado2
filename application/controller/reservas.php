<?php 


class Reservas extends Controller
{
	
	function __construct()
	{
		// $this->mdlInsumo = $this->loadModel("mdlInsumo");
	}

	function index()
	{
		// $insumo = $this->mdlInsumo->listar();
		require APP. 'view/_templates/header.php';
		require APP. 'view/RESERVAS/consultar.php';
		require APP. 'view/_templates/footer.php';
	}
	function registrar()
	{
		// $insumo = $this->mdlInsumo->listar();
		require APP. 'view/_templates/header.php';
		require APP. 'view/INVENTARIO/insumo/registrar.php';
		require APP. 'view/_templates/footer.php';
	}
}
 ?>