<?php
	include("./Conector.php");
	
		$data['email'] = "'alfred@dime.com.co'";
		$data['psw'] = "'".password_hash('0897', PASSWORD_DEFAULT)."'";
		$data['nombre'] = "'alfredo'";
		$data['fecha_nacimiento'] = "'1900-01-01'";
		
		$data['email'] = "'lorenzo2@dime.com.co'";
		$data['psw'] = "'".password_hash('456', PASSWORD_DEFAULT)."'";
		$data['nombre'] = "'lorenzo'";
		$data['fecha_nacimiento'] = "'1986-02-07'";
		
		$data['email'] = "'carlitos3@dime.com.co'";
		$data['psw'] = "'".password_hash('987', PASSWORD_DEFAULT)."'";
		$data['nombre'] = "'carlos'";
		$data['fecha_nacimiento'] = "'1900-01-01'";


		$con = new ConectorBD('localhost','ernesto','123456');
	 	 $response['conexion'] = $con->initConexion('agendaf');
		 if ($response['conexion']=='OK') {
			if($exion->insertData('usuarios', $data)){
			  $response['msg']="exito en la inserción";
			}else {
			  $response['msg']= "Hubo un error y los datos no han sido cargados";
			}
		  }else {
			$response['msg']= "No se pudo conectar a la base de datos";
		  }

		  echo json_encode($response);


	
 ?>






