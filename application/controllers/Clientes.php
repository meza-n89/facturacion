<?php 
class Clientes extends CI_controller
{
	public function clientes_view()
	{
		$this->load->view('clientes');
	}
public function show_clientes()
{
	$this->load->model('Model_clientes','MC',true);
	$query=$this->MC->show_clientes();
	$x=0;
	foreach ($query as $value) {
		$eshta[$x]['nombre']=$value['nombre'];
		$eshta[$x]['apellido']=$value['apellido'];
		$eshta[$x]['direccion']=$value['direccion'];
		$eshta[$x]['fecha_nacimiento']=$value['fecha_nacimiento'];
		$eshta[$x]['telefono']=$value['telefono'];
		$eshta[$x]['email']=$value['email'];
		$eshta[$x]['opciones']='<a class="btn btn-danger" type="button" href="'.site_url().'/Clientes/delete_cliente?id_cliente='.$value["id_cliente"].'"><i class="fas fa-trash-alt"></i></a>
		<a class="btn btn-success" data-toggle="modal" data-target="#exampleModal" onclick="llenar_formulario('.$value['id_cliente'].')"><i class="fas fa-edit"></a>';
		$x++;

	}
	echo json_encode($eshta);
}
public function delete_cliente()
{
	$id_cliente=$this->input->get('id_cliente');
	$this->load->model('Model_clientes','MC',true);
	$this->MC->delete_clientes($id_cliente);
}
public function show_user()
{
	$this->load->model('Model_clientes','MC',true);
	$query=$this->MC->show_cliente($this->input->get('id'));
	echo json_encode($query);
}
public function update_cliente()
{
	$this->load->model('Model_clientes','MC',true);
	$this->MC->update_cliente(
		$this->input->get('id_cliente'),
		$this->input->post('nombre'),
		$this->input->post('apellidos'),
		$this->input->post('direccion'),
		$this->input->post('fecha_nacimiento'),
		$this->input->post('telefono'),
		$this->input->post('email')	
		);

	
}

}

?>