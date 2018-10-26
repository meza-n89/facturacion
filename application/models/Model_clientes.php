<?php 
class Model_clientes extends CI_model
{
	function __constructor()
	{
		$this->load->database();
	}

	public function insert_clientes($nombre,$apellidos,$direccion,$fecha_nacimiento,$telefono,$email){
$data = array(
'nombre'=>$nombre,
'apellido'=>$apellidos,
'direccion'=>$direccion,
'fecha_nacimiento'=>$fecha_nacimiento,
'telefono'=>$telefono,
'email'=>$email
);
$this->db->insert('cliente',$data);
	}

	public function show_clientes()
	{
		$query=$this->db->get('cliente');
		return $query->result_array();
	}
		public function show_cliente($id)
	{
		$this->db->where('id_cliente',$id);
		$query=$this->db->get('cliente');
		return $query->result_array();
	}
	public function delete_clientes($id_cliente)
	{
		$this->db->where('id_cliente',$id_cliente);
		$this->db->delete('cliente');
	}
	public function update_cliente($id_cliente,$nombre,$apellido,$direccion,$fecha_nacimiento,$telefono,$email)
	{
		
		$data= array(
			'nombre'=>$nombre,
			'apellido'=>$apellido,
			'direccion'=>$direccion,
			'fecha_nacimiento'=>$fecha_nacimiento,
			'telefono'=>$telefono,
			'email'=>$email
		);
		$this->db->where('id_cliente',$id_cliente);
		$this->db->replace('cliente',$data);

	}
}



?>
