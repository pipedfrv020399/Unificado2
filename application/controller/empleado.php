<?php

/**
* 
*/
class Empleado extends Controller
{
	

	/*private $mdlGenero;
	private $mdlTurno;
	private $mdlTdocumento;
	private $mdlEmpleado;*/

	function __construct(){
		/*$this->mdlGenero = $this->loadModel("mdlGenero");
		$this->mdlTurno = $this->loadModel("mdlTurno");
		$this->mdlTdocumento = $this->loadModel("mdlTdocumento");
		$this->mdlEmpleado = $this->loadModel("mdlEmpleado");*/
	}

	public function index(){

         #$Empleado = $this->mdlEmpleado->ListarEmpleados();
          #$Emp = $this->mdlEmpleado->ListarResto();
		require APP.'view/_templates/header.php';
		require APP.'view/PERSONAL/empleado/listarEmpleado.php';
		require APP.'view/_templates/footer.php';
	}
	/*


	public function InsertarEmpleado()
	{
		for ($i=0; $i < count($_POST["txtnom"]); $i++) { 
			$this->mdlEmpleado->__set("Tipo_documento", $_POST["seltdo"][$i]);
			$this->mdlEmpleado->__set("Identificacion", $_POST["txtide"][$i]);
			$this->mdlEmpleado->__set("Nombre", $_POST["txtnom"][$i]);
			$this->mdlEmpleado->__set("Apellido", $_POST["txtape"][$i]);
			$this->mdlEmpleado->__set("Telefono", $_POST["txttel"][$i]);
			$this->mdlEmpleado->__set("Celular", $_POST["txtcel"][$i]);
			$this->mdlEmpleado->__set("Direccion", $_POST["txtdir"][$i]);
			$this->mdlEmpleado->__set("Fecha_nacimiento", $_POST["txtfec"][$i]);
			$this->mdlEmpleado->__set("Genero", $_POST["selgen"][$i]);
			$this->mdlEmpleado->__set("Correo", $_POST["txtcor"][$i]);
			$this->mdlEmpleado->__set("Turno", $_POST["seltur"][$i]);
	      $I = $this->mdlEmpleado->InsertarEmpleado();
		}
	}

	public function edit($cod){

		$this->mdlEmpleado->__set("Codigo", $cod);
		$E = $this->mdlEmpleado->ConsultarEmpleado();

		require APP.'view/_templantes/header.php';
		require APP.'view/empleado/empleado.php';
		require APP.'view/_templates/footer.php';
	}

	 public function edit2($cod){

         $this->mdlEmpleado->__set("Codigo", $cod);
         $F = $this->mdlEmpleado->ConsultarEmpleado2();
      }

	public function ModificarEmpleado()
	{
			$this->mdlEmpleado->__set("Tipo_documento", $_POST["seltdo"]);
			$this->mdlEmpleado->__set("Identificacion", $_POST["txtide"]);
			$this->mdlEmpleado->__set("Nombre", $_POST["txtnom"]);
			$this->mdlEmpleado->__set("Apellido", $_POST["txtape"]);
			$this->mdlEmpleado->__set("Telefono", $_POST["txttel"]);
			$this->mdlEmpleado->__set("Celular", $_POST["txtcel"]);
			$this->mdlEmpleado->__set("Direccion", $_POST["txtdir"]);
			$this->mdlEmpleado->__set("Fecha_nacimiento", $_POST["txtfec"]);
			$this->mdlEmpleado->__set("Genero", $_POST["selgen"]);
			$this->mdlEmpleado->__set("Correo", $_POST["txtcor"]);
			$this->mdlEmpleado->__set("Turno", $_POST["seltur"]);
			$this->mdlEmpleado->__set("Estado", $_POST["optest"]);
			$this->mdlEmpleado->__set("Usuario", $_POST["txtusu"]);
		#	$this->mdlEmpleado->__set("Contrasena"), $_POST["txtcon"];
	      $M = $this->mdlEmpleado->ModificarEmpleado();
	}

	 public function CambiarEstado($id){
    	$this->mdlEmpleado->__set("Identificacion", $id);
    	$this->mdlEmpleado->__set("Estado", $_POST["optest"]);
    	$eliminar = $this->mdlEmpleado->CambiarEstado();
    	
    	   if ($eliminar) {
         echo json_encode(["v"=>1]);
          }
         else{
         echo json_encode(["v"=>0]);
      }
    }

    
*/

}

?>