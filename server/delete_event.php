<?php
  require('conector.php');

  $id = "'".$_POST['id']."'";

  $con = new ConectorBD('localhost','ernesto','123456');

  $response['conexion']= $con->initConexion('agendaf');

  if($response['conexion']=='OK'){
    $data['msg']="OK";
    $exion->eliminarRegistro('eventos','id = '.$id);
  }else{
    $data['msg']="Error ingresando a base de datos en crear nuevo evento :(";
  }

  echo json_encode($data);

 ?>
