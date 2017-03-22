<?php

/**
* 
*/
class Cliente extends Controller
{
	
   /*private $mdlTCliente;
   private $mdlTDocumento;
   private $mdlGenero;
   private $mdlCliente;*/


   function __construct(){

   	/*$this->mdlCliente = $this->loadModel("mdlCliente");
   	$this->mdlTDocumento = $this->loadModel("mdlTDocumento");
   	$this->mdlGenero = $this->loadModel("mdlGenero");
   	$this->mdlTCliente = $this->loadModel("mdlTCliente");*/
   }

   public function index(){

        /*$Cliente = $this->mdlCliente->ListarClientes();
        $Clien = $this->mdlCliente->ListarResto();
        $TiD = $this->mdlTDocumento->ListarSelect();
        $Gen = $this->mdlGenero->ListarSelect();
        $TiC = $this->mdlTCliente->ListarSelect();*/

   	require APP.'view/_templates/header.php';
   	require APP.'view/PEDIDO/cliente/listarCliente.php';
   	require APP.'view/_templates/footer.php';
   }

   /*public function InsertarCliente(){
        	$this->mdlCliente->__set("Tipo_identificacion", $_POST["seltdo"]);
			$this->mdlCliente->__set("Identificacion", $_POST["txtide"]);
			$this->mdlCliente->__set("Nombre", $_POST["txtnom"]);
			$this->mdlCliente->__set("Apellido", $_POST["txtape"]);
			$this->mdlCliente->__set("Telefono", $_POST["txttel"]);
			$this->mdlCliente->__set("Celular", $_POST["txtcel"]);
			$this->mdlCliente->__set("Direccion", $_POST["txtdir"]);
			$this->mdlCliente->__set("Genero", $_POST["selgen"]);
			$this->mdlCliente->__set("Correo", $_POST["txtcor"]);
         $this->mdlCliente->__set("Usuario", $_POST["txtusu"]);
         $this->mdlCliente->__set("Contrasena", $_POST["txtcon"]);
         $this->mdlCliente->__set("RContrasena", $_POST["txtcon2"]);
	      $I = $this->mdlCliente->InsertarCliente();
	      //header("location:  ".URL."cliente/index");	
		} 
   		
   	

   	public function edit($cod){

   		$this->mdlCliente->__set("Codigo", $cod);
   		$E = $this->mdlCliente->ConsultarCliente();
   	}

      public function edit2($cod){

         $this->mdlCliente->__set("Codigo", $cod);
         $F = $this->mdlCliente->ConsultarCliente2();
      }


   	public function ModificarCliente()
   	{
         $this->mdlCliente->__set("Codigo", $_POST["txtxcod"][$i]);
   		$this->mdlCliente->__set("Tipo_documento", $_POST["seltdo"][$i]);
			$this->mdlCliente->__set("Identificacion", $_POST["txtide"][$i]);
			$this->mdlCliente->__set("Nombre", $_POST["txtnom"][$i]);
			$this->mdlCliente->__set("Apellido", $_POST["txtape"][$i]);
			$this->mdlCliente->__set("Telefono", $_POST["txttel"][$i]);
			$this->mdlCliente->__set("Celular", $_POST["txtcel"][$i]);
			$this->mdlCliente->__set("Direccion", $_POST["txtdir"][$i]);
			$this->mdlCliente->__set("Genero", $_POST["selgen"][$i]);
			$this->mdlCliente->__set("Correo", $_POST["txtcor"][$i]);
         $this->mdlCliente->__set("Tipo_cliente", $_POST["seltcl"][$i]);
			$this->mdlCliente->__set("Estado", $_POST["txtest"]);
         $this->mdlCliente->__set("Usuario", $_POST["txtusu"]);
         $this->mdlCliente->__set("Contrasena", $_POST["txtcon"]);
			$M = $this->mdlCliente->ModificarCliente();
			header("location: ".URL."cliente/cliente");

   	}

   	public function CambiarEstado($cod){

   		$this->mdlCliente->__set("Codigo", $cod);
         $this->mdlCliente->__set("Estado", $_POST["txtest"]);
   		$eliminar = $this->mdlCliente->CambiarEstado();

         if ($eliminar) {
         echo json_encode(["v"=>1]);
          }
         else{
         echo json_encode(["v"=>0]);
      }
   	}*/


   
}

?>