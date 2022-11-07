<?php 
    $id_doctor = $_GET['SCSL'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
	<title>Simein</title>
	<link rel="shortcut icon" href="../../images/logo_nav.png">
	<link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../../assets/styles.css">
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="shortcut icon" href="../../assets/images/logo_head.png">
	<style>
	body{
		background: #e7e7e7;
		    background-image: url("inicio/banner_login.jpg");
			    min-height: 300px;
			    background-attachment: fixed;
			    background-position: center;
			    background-repeat: no-repeat;
			    background-size: cover;
	}
	.top_panel {
		margin-top: 0%;
	}
	</style>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="top_panel hidden-xs"></div>
				<div class="panel panel-default panel-shadow">
					<div class="panel-body">
					    <form method="post" id="form_login">
							<img src="../../assets/images/cte/logoSportkines.png" class="img-responsive center-block" alt="Image" style="max-width: 200px;">
						   	<p class="lead text-center"><strong>Registro de Acceso</strong></p>
						   	<div id="alert" class="alert"></div>
						   	<div class="form-group">
						   		<div class="input-group">
								  	<span class="input-group-addon">
								  		<i class="fa fa-mobile"></i>
								  	</span>
								  	<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Celular" required>
									<input  type="hidden" class="form-control" id="id_doctor" name="id_doctor"  value="<?php echo $id_doctor; ?>">
								</div>
						   	</div>
						   	
						   	<button id="btn_acceso" class="btn btn-primary btn-block">Registra Acceso</button>
					    </form>
						<div>
					   		<h4><a href="#recepcionistas" data-toggle="modal"></a></h4>
					   	</div>
					</div>
				</div>
			</div>
			<div class="col-xs-1 col-sm-4"></div>
		</div>
	</div>

<?php include '../../componentes/footer.php'; ?>
<script src="../../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
</body>
</html>


<script type="text/javascript">
	$('#btn_acceso').click(function(){
		 
			var datos=$('#form_login').serialize();
			$.ajax({
                type:"POST",
                url:"registra_acceso_sportkines.php",
                dataType: 'json',
                data:datos,
                success:function(r){
					location.href='http://system-matrix.com/graciasform.php';
                	//console.log (r.resp);
                    if(r.resp=='0'){
					
					}
					
					if(r.resp=='1'){  
                    	
					}
					
				
                }
            });
          
            return false;
            
        });
</script>