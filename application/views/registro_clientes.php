<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino UI Elements</title>
	<script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
	<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
		<script src="<?php echo base_url();?>js/jquery.maskedinput.js"></script>

</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Sistema de </span>facturas</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">SDF</div>
				
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href=">'php ?>"><em class="fa fa-dashboard">&nbsp;</em>Inicio</a></li>
			<li><a href="<?php echo site_url();?>/Clientes/clientes_view"><em class="fa fa-address-book">&nbsp;</em>Clientes</a></li>
			<li><a href="<?php echo site_url();?>/Productos/productos_view"><em class="fa fa-archive">&nbsp;</em>Productos</a></li>
			<li><a href="charts.html"><em class="fa fa-server">&nbsp;</em>Facturacion</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em>Registro<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="<?php echo site_url();?>/Registroclientes/registro_view">
						<span class="fa fa-arrow-right">&nbsp;</span>Registro de clientes
					</a></li>
					<li><a class="" href="<?php echo site_url();?>/Productos/registroprod_view">
						<span class="fa fa-arrow-right">&nbsp;</span> Registro de productos
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Registro de categoria
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Registro de productos
					</a></li>
				</ul>
			</li>
			
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Forms</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registro de clientes</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Registro</div>
					<div class="panel-body">
						<div class="col-md-12">
							<form method="post" id="from-clientes">
	<div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control"  required="" name="nombre" id="nombre" placeholder="Nombre">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Apellidos</label>
    <input type="text" class="form-control"  required="" name="apellidos" id="apellidos" placeholder="Apellidos">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Direccion</label>
    <input type="text" class="form-control"  required="" name="direccion" id="direccion" placeholder="Direccion">
  </div>
     <div class="form-group">
    <label for="exampleInputEmail1">Fecha de nacimiento</label>
    <input type="date" class="form-control"  required="" name="fecha_nacimiento" id="fecha_nacimiento" >
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Telefono</label>
    <input type="text" class="form-control" required="" id="phone" name="telefono"  >
  </div>
  <button type="submit" class="btn btn-primary" onclick="insert_clientes()" >Submit</button>
</form>
						</div>
					</div>
				</div><!-- /.panel-->
				
				


				<!-- /.panel-->
			</div><!-- /.col-->
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!-- /.row -->
	</div><!--/.main-->
	
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/chart.min.js"></script>
	<script src="<?php echo base_url();?>js/chart-data.js"></script>
	<script src="<?php echo base_url();?>js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>js/custom.js"></script>
	<script type="text/javascript">
		
$(document).ready(function(){
   $("#date").mask("99/99/9999");
   $("#phone").mask("9999-9999");
   $("#tin").mask("99-9999999");
   $("#ssn").mask("999-99-9999");

});
function insert_clientes()
{ 
	if($('#nombre').val()==''||$('#email').val()==''||$('#apellidos').val()==''||$('#direccion').val()==''||$('#fecha_nacimiento').val()==''||$('#phone').val()==''){
		alert('Debe llenar todos los datos')
	}else{
	 
	var url = "<?php echo site_url();?>/Registroclientes/registro_clientes";
	$.ajax({
		type:"post",
		url:url,
		data: $("#from-clientes").serialize(),
		success: function(data){
			if(data!=0){
				alert('datos ingresados correctamente');
			}else{
				alert('datos no guardados');
			}
		}
	});
}
}
	</script>

</body>
</html>
