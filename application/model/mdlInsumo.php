<?php 
/**
* 
*/
class mdlInsumo 
{
	private $codInsumo;
	private $Nombre;
	private $codUnidad;
	private $nombreUnidad;
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
		$sql = "CALL SP_ListarInsumo()";
		$stm = $this->db->prepare($sql);
		$stm -> execute();
		return $stm->fetchAll();
	}
}
 ?>