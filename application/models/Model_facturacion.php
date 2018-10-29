<?php 
class Model_facturacion extends CI_model
{
	function __construct()
	{
		$this->load->database();
	}
public function auto_complete($nombre)
{
	//$this->db->like('nombre',$nombre);
	$query=$this->db->query('select * from cliente where nombre like "%'.$nombre.'%"');
	return $query->result_array();
}

}


?>