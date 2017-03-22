<?php 

 
class Plato extends Controller
{
	
	function __construct()
	{
		$this->mdlPlato = $this->loadModel("mdlPlato");
		$this->mdlInsumo = $this->loadModel("mdlInsumo");
		$this->mdlTipoPlato = $this->loadModel("mdlTipoPlato");
	}

	function index()
	{
		$plato = $this->mdlPlato->listar();
		$insumo = $this->mdlInsumo->listar();
		$TipoPlato = $this->mdlTipoPlato->listar();
		require APP. 'view/_templates/header.php';
		require APP. 'view/MENU/plato/indexPlato.php';
		require APP. 'view/_templates/footer.php';
	}

	public function crear(){
		$this ->mdlPlato->__set("nombre",$_POST['txtNombre']);
		$this ->mdlPlato->__set("descripcion",$_POST['txtDescripcion']);
		$this ->mdlPlato->__set("precioUnitario",$_POST['txtPrecio']);
		$this ->mdlPlato->__set("imagen",addslashes(file_get_contents($_FILES['Imagen']['tmp_name'])));
		$this ->mdlPlato->__set("tipoPlato",$_POST['txtTipoPlato']);
		$v = $this ->mdlPlato->InsertarPlato();

		if ($v) {
			$ultima = $this->mdlPlato->UltimoPlato()["ultima"];
			
				for ($i=0; $i < count($_POST["insumo"]); $i++) { 
				$this->mdlPlato->__set("codPlato",$ultima);
				$this->mdlPlato->__set("codInsumo",$_POST["insumo"][$i]);
				$this->mdlPlato->__set("cantidad",$_POST["cantidad"][$i]);
				$this->mdlPlato->InsertarDetallePlato();
			}	
		}
		header("location:".URL."plato/index");	
	}

	

	public function edit($codPlato)
	{
		$this->mdlPlato->__set("codPlato",$codPlato);
		$datos = $this->mdlPlato->consultarUno();
		echo json_encode($datos);
	}

	public function ver($codPlato)
	{
		$this->mdlPlato->__set("codPlato",$codPlato);
		$datos = $this->mdlPlato->consultarUno();
		echo json_encode($datos);
	}

	public function Modificar()
	{
		$this->mdlPlato->__set("codPlato", $_POST['txtCodigoEdit']);
		$this->mdlPlato->__set("nombre", $_POST['txtNombreEdit']);
		$this->mdlPlato->__set("descripcion", $_POST['txtDescripcionEdit']);
		$this->mdlPlato->__set("precioUnitario", $_POST['txtPrecioEdit']);
		$this->mdlPlato->__set("imagen", $_POST['ImagenEdit']);
		$this->mdlPlato->__set("tipoPlato", $_POST['txtTipoPlatoEdit']);
		$very= $this->mdlPlato->EditarPlato();
		header("location: ".URL."plato/index");
	}

	public function modificarEstado()
	{
		$this->mdlPlato->__set("codPlato", $_POST["codPlato"]);
		$this->mdlPlato->__set("estado", $_POST["estado"]);

		$very = $this->mdlPlato->ModificarEstado();
	
		if ($very) {
			echo json_encode(["v"=>1]);
		}else{
			echo json_encode(["v"=>0]);
		}
		
	}
}
 ?>