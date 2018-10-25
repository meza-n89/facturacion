<?php
class Model_productos extends CI_model
{
	function __construct()
	{
		$this->load->database();
	}
	public function insert_venta($nombre,$precio,$stock,$id_categoria)
	{
		$data= array(
			'nombre'=>$nombre,
			'precio'=>$precio,
			'stock'=>$stock,
			'id_categoria'=>$id_categoria

		);
		$this->db->insert('producto',$data);
	}
	public function mostrar_categoria()
	{
		$query=$this->db->get('categoria');
		return $query->result_array();
	}
	public function insert_newcategoria($nombre,$descripcion)
	{
		$data= array(
			'nombre'=>$nombre,
			'descripcion'=>$descripcion
		);
		$this->db->insert('categoria',$data);
	}
}


?>