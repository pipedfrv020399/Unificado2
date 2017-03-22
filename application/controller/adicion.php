<?php 
class Adicion extends Controller
{
	
	function __construct()
	{
		$this->mdlPlato = $this->loadModel("mdlPlato");
		$this->mdlInsumo = $this->loadModel("mdlInsumo");
		$this->mdlTipoPlato = $this->loadModel("mdlTipoPlato");
	}

	function index()
	{
		$adicion = $this->mdlPlato->listar();
		$insumo = $this->mdlInsumo->listar();
		$TipoPlato = $this->mdlTipoPlato->listar();
		require APP. 'view/_templates/header.php';
		require APP. 'view/MENU/adiciones/indexAdiciones.php';
		require APP. 'view/_templates/footer.php';
	}
}
 ?>