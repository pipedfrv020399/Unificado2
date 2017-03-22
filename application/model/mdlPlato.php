<?php 
class mdlPlato
{
	private $codPlato;
	private $codInsumo; 
	private $cantidad;
	private $nombre;
	private $descripcion;
	private $precioUnitario;
	private $imagen;
	private $tipoPlato;
	private $estado; 
	private $db;

	public function __set($attr,$value)
	{
		$this->$attr=$value;
	}
	public function __get($attr)
	{
		return $this->$attr;
	}

	function __construct($db)
	{
		try
		{
			$this->db=$db;
		}catch(PDOException $e)
		{
			exit('Database connection could not be established.');
		}
	}

	public function listar()
	{
		$sql = "CALL SP_ListarPlato()";
		$stm = $this->db->prepare($sql);
		$stm -> execute();
		return $stm->fetchAll();
	}
	
	public function InsertarPlato()
	{
		$sql = "CALL SP_InsertarPlato(?,?,?,?,?)";
		$stm = $this->db->prepare($sql);
		$stm ->bindParam(1,$this->nombre);
		$stm ->bindParam(2,$this->descripcion);
		$stm ->bindParam(3,$this->precioUnitario);
		$stm ->bindParam(4,$this->imagen);
		$stm ->bindParam(5,$this->tipoPlato);
		return $stm->execute();		
	}

	public function InsertarDetallePlato()
	{
		$sql = "CALL SP_InsertarPlatoInsumo(?,?,?)";
		$stm = $this->db->prepare($sql);
		$stm -> bindParam(1,$this->codPlato);
		$stm -> bindParam(2,$this->codInsumo);
		$stm -> bindParam(3,$this->cantidad);
		return $stm->execute();
	}

	public function UltimoPlato()
	{
		$sql = "CALL SP_UltimoPlato";
		$stm = $this->db->prepare($sql);
		$stm->execute();
		return $stm->fetch();
	}

	public function EditarPlato()
	{
		$sql = "CALL SP_EditarPlato(?,?,?,?,?,?)";
		$stm = $this->db->prepare($sql);
		$stm ->bindParam(1,$this->codPlato);
		$stm ->bindParam(2,$this->nombre);
		$stm ->bindParam(3,$this->descripcion);
		$stm ->bindParam(4,$this->precioUnitario);
		$stm ->bindParam(5,$this->imagen);
		$stm ->bindParam(6,$this->tipoPlato);
		$stm->execute();	
	}
	public function modificarEstado()
	{
		$sql = "CALL SP_EditarEstadoPlato(?,?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1,$this->codPlato);
		$estado =$this->estado==1?true:false;
		$stm -> bindParam(2, $estado);
		return $stm -> execute();
	}
	public function ConsultarUno()
	{
		$sql = " CALL SP_consultarUnoPlato(?)";
		$stm = $this->db->prepare($sql);
		$stm->bindParam(1,$this->codPlato);
		$stm -> execute();
		return $stm ->fetchAll(PDO::FETCH_ASSOC);
	}
}

 ?>