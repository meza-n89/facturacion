<?php 
class Productos extends CI_controller
{
	public function productos_view()
	{
		$this->load->view('Productos');
	}
	public function registroprod_view()
	{
		$this->load->view('registro_producto');
	}
	public function insert_productos()
	{
		$this->load->model('Model_productos','MP',true);
		$this->MP->insert_venta(
			$this->input->post('nombre'),
			$this->input->post('precio'),
			$this->input->post('stock'),
			$this->input->post('id_categoria')
		);
	}
	public function select_categoria()
	{
	$this->load->model('Model_productos','MP',true);
	$query=$this->MP->mostrar_categoria();
	echo '<option value="-1">Escoja una categoria</option>';
	foreach ($query as $value){
		echo '<option value="'.$value["id_categoria"].'">'.$value["nombre"].'</option>';
	}
	}
	public function nueva_categoria()
	{
		$this->load->model('Model_productos','MP',true);
		$this->MP->insert_newcategoria(
			$this->input->post('nombre'),
			$this->input->post('descripcion')
		);
	}


}
?>