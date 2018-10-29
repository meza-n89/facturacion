<?php 
class Facturacion extends CI_controller
{
	public function factura_view()
	{
		$this->load->view('facturacion');
	}
	public function autocomplete_cliente()
	{
		$this->load->model('Model_facturacion','MF',true);
		$nombre = $this->input->get('term');
		$query=$this->MF->auto_complete($nombre);
		echo json_encode($query);

	}
}



?>