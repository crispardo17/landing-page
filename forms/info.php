<?php 
	include('../conexion/hup.php');
	include('mail.php');

	$DB_USER = base64_decode($DB_USER);
	$DB_PASSWORD = base64_decode($DB_PASSWORD);
	
	$conexion = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB);

	$email_client = $_REQUEST['email'];
	$name_client = $_REQUEST['nombre'];
	$cedula_client = $_REQUEST['cedula'];
	$telefono_client = $_REQUEST['telefono'];

	// $email_novus = 'solicitudes@gopass.com';
	$email_novus = 'maryariza12.07@gmail.com';
	$subject = 'Contacto por Web Gopass congreso ';
	$body = $name_client . ' Solicita informacion por medio del formulario de la pagina de Gopass Gopass.com.co, contestar a ' . $email_client;


	$sql = "INSERT INTO gestion (name_client, email_client, cedula_client, telefono_client, fecha_ingreso) VALUES ('$name_client','$email_client','$cedula_client','$telefono_client', NOW())";
	$resultado = $conexion->query($sql);

	if ($resultado === TRUE){
		
	?>
	
		<div class="in-flex" style="padding: 200px; background-color: rgb(247, 247, 247);">
			<div class="in-flex" style="text-align: center; background-color:#18cc14; padding: 50px; border-radius: 10px;font-family: sans-serif; ">
				<div class="gridTitle">
					<h1 style="font-size: 3.3rem; font-weight: 500;font-family: sans-serif;" ><b>Gracias </b> por contar con nosotros , Hemos recibido tu solicitud</h1>
					<p style="font-size: 3.3rem; font-weight: 500;font-family: sans-serif;" ><b>En los Proximos dias recibiás tu tag Gopass</b></p>
				</div>
										
			</div>
		<p style="font-size: 3.3rem; font-weight: 500;text-align: center;font-family: sans-serif;"><b>Somos Gopass</b></p>  
		</div>
             
				<meta http-equiv="refresh" content="3;url=https://gopass.com.co/cci/landingGopass/landing.html">
	
	<?php
		
	}else{
		echo "Error de conexion";
	}

?>
<script>
    document.oncontextmenu = function(){return false;}
</script>
<script>
    document.onkeydown = function(){return false;}
</script>
<script>
	// window.location.replace("https://gopass.com.co/cci/landingGopass/landing.html");
	</script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js">
