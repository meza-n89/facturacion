<?php 
class Registroclientes extends CI_controller
{
	public function registro_view()
	{
		$this->load->view('registro_clientes');
	}
	public function registro_clientes()
	{
		$this->load->model('Model_clientes','MC',true);
		$this->MC->insert_clientes(
		$this->input->post('nombre'),
		$this->input->post('apellidos'),
		$this->input->post('direccion'),
		$this->input->post('fecha_nacimiento'),
		$this->input->post('telefono'),
		$this->input->post('email')	
		);
		redirect('/Registroclientes/registro_view');
	}
}
?>