<?php 


class Agenda extends Controller
{
	
	function __construct()
	{
		// $this->mdlInsumo = $this->loadModel("mdlInsumo");
	}

	function index()
	{
		// $insumo = $this->mdlInsumo->listar();
		require APP. 'view/_templates/header.php';
		require APP. 'view/AGENDA DE CITAS/agenda.php';
		require APP. 'view/_templates/footer.php';
	}
}
 ?>