<?php
		
	require('conector.php');

  $id = "'".$_POST['id']."'";
  $data['f_inicio'] = "'".$_POST['start_date']."'";
  $data['h_inicio'] = "'".$_POST['start_hour']."'";
  $data['f_final'] = "'".$_POST['end_date']."'";
  $data['h_final'] = "'".$_POST['end_hour']."'";

  $con = new ConectorBD('localhost','ernesto','123456');

  $response['conexion']= $con->initConexion('agendaf');

  if($response['conexion']=='OK'){
    $con->actualizarRegistro('eventos',$data,'id='.$id);
    $data['msg']="OK";
  }else{
    $data['msg']="Error ingresando a base de datos en crear nuevo evento :(";
  }

  echo json_encode($data);


 ?>
