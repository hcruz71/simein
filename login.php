
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
	<title>Simein</title>
	<link rel="shortcut icon" href="/images/logo_nav.png">
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="assets/styles.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="shortcut icon" href="assets/images/logo_head.png">
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
					    <form id="form_login">
							<img src="assets/images/logo_login.jpg" class="img-responsive center-block" alt="Image" style="max-width: 200px;">
						   	<p class="lead text-center"><strong>Iniciar Sesión</strong></p>
						   	<div id="alert" class="alert"></div>
						   	<div class="form-group">
						   		<div class="input-group">
								  	<span class="input-group-addon">
								  		<i class="fa fa-user"></i>
								  	</span>
								  	<input type="text" class="form-control" id="nb_usuario" name="nb_usuario" placeholder="Usuario" required>
								</div>
						   	</div>
						   	<div class="form-group">
						   		
						   		<div class="input-group">
								  	<span class="input-group-addon">
								  		<i class="fa fa-lock"></i>
								  	</span>
								  	<input type="password" class="form-control" id="pw_usuario" name="pw_usuario" placeholder="********">
								</div>
						   	</div>
						   	<button id="btn_login" class="btn btn-primary btn-block">Entrar</button>
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

<?php include 'componentes/footer.php'; ?>
	
</body>
</html>


<script type="text/javascript">
	$('#btn_login').click(function(){
            var datos=$('#form_login').serialize();

            $.ajax({
                type:"POST",
                url:"validar.php",
                dataType: 'json',
                data:datos,
                success:function(r){
                	//console.log ("Regreso", r);
                    if(r.resp=='0'){
                    	$('#alert').html("Los datos son correctos    ¡Bienvenido!");
                    	$('.alert').css("background-color", "#76cc96");
                    	$('.alert').css("color", "#fff");
                    	location.href='index.php';

                                	

                    }else{
                    	$('#alert').html("Los datos son incorrectos");
                        $('.alert').css("background-color", "#f74040");
                    	$('.alert').css("color", "#fff");


                        //alert("Bienvenido");
                        //location.href='index.php';
                    }
                }

            });
          
            return false;
        });
</script>