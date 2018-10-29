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
	public function show_producto()
{
	$this->load->model('Model_productos','MP',true);
	$query=$this->MP->show_productos();
	$x=0;
	foreach ($query as $value) {
		$eshta[$x]['nombre']=$value['nombre'];
		$eshta[$x]['precio']=$value['precio'];
		$eshta[$x]['stock']=$value['stock'];
		$eshta[$x]['id_categoria']=$value['id_categoria'];
		$eshta[$x]['opciones']='<a class="btn btn-danger" type="button" href="'.site_url().'/Productos/delete_producto?id_producto='.$value["id_producto"].'"><i class="fas fa-trash-alt"></i></a>
		<a class="btn btn-success" data-toggle="modal" data-target="#exampleModal" onclick="llenar_formulario('.$value['id_producto'].')"><i class="fas fa-edit"></a>';
		$x++;

	}
	echo json_encode($eshta);
}
public function delete_producto()
{
	$id_productos=$this->input->get('id_producto');
	$this->load->model('Model_productos','MP',true);
	$this->MC->delete_productos($id_productos);
}
public function update_producto()
{
	$this->load->model('Model_productos','MP',true);
	$this->MC->update_producto(
			$this->input->get('id_producto'),
			$this->input->post('nombre'),
			$this->input->post('precio'),
			$this->input->post('stock'),
			$this->input->post('id_categoria')
		);

	
}
public function show_prod()
{
	$this->load->model('Model_productos','MP',true);
	$query=$this->MP->show_prod($this->input->get('id'));
	echo json_encode($query);
}


}
?>