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
}



?>
