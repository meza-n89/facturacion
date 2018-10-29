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
				<h1 class="page-header">Registro de productos</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Registro</div>
					<div class="panel-body">
						
      <form method="post" id="category">
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" name="nombre" id="nombre" >
    </div>
  </div>
    <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Descripcion</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control-plaintext" name="descripcion" id="descripcion" ></textarea> 
    </div>
  </div>
 

      <div class="modal-footer">
       <button type="submit" class="btn btn-primary" onclick="nueva_categoria()" >Guardar</button>
      </div>
      </form>

						
					</div>
				</div><!-- /.panel-->
				
				


				<!-- /.panel-->
			</div><!-- /.col-->
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!-- /.row -->
	</div><!--/.main-->
	<!-- Modal -->

<!--modal-->
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/chart.min.js"></script>
	<script src="<?php echo base_url();?>js/chart-data.js"></script>
	<script src="<?php echo base_url();?>js/easypiechart.js"></script>
	<script src="<?php echo base_url();?>js/easypiechart-data.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>js/custom.js"></script>
	<script type="text/javascript">
function nueva_categoria(){
			if($('#nombre').val()==''||$('#descripcion').val()==''){
				alert('debe ingresar todos los datos');
			}else{
				var url ="<?php echo site_url();?>/Productos/nueva_categoria";
				$.ajax({
					type:"POST",
					url:url,
					data: $('#category').serialize(),
					success: function(data)
					{
					if(data!=0)
					{
						alert('datos ingresados correctament');

					}
					else{
						alert('los datos no fueron guardados');
					}
				}


				});
		}
	}


	</script>
</body>
</html>
