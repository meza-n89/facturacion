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
	public function show_productos()
	{
		$query=$this->db->get('producto');
		return $query->result_array();
	}
	public function delete_productos($id_productos)
	{
		$this->db->where('id_producto',$id_productos);
		$this->db->delete('producto');
	}
		public function update_producto($nombre,$precio,$stock,$id_categoria)
	{
		
		$data= array(
			'nombre'=>$nombre,
			'apellido'=>$precio,
			'direccion'=>$stock,
			'fecha_nacimiento'=>$id_categoria
			
		);
		$this->db->where('id_producto',$id_producto);
		$this->db->replace('producto',$data);

	}

public function show_prod($id)
	{
		$this->db->where('id_producto',$id);
		$query=$this->db->get('producto');
		return $query->result_array();
	}

}


?>