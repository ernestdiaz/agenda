<?php
	
	require('conector.php');

  session_start();

  if(isset($_SESSION['username'])){

    $con = new ConectorBD('localhost','ernesto','123456');

    $response['conexion']= $con->initConexion('agendaf');

    $resultado = $con->consultar(['usuarios'], ['id'], "WHERE email ='".$_SESSION['username']."'");
    $fila = $resultado->fetch_assoc();

    $data['fk_usuarios']= $fila['id'];
    
    $data['titulo'] = "'".$_POST['titulo']."'";
    $data['f_inicio'] = "'".$_POST['start_date']."'";


    if($_POST['allDay'] == "true"){
      $data['h_inicio'] = "NULL";
      $data['f_final'] = "NULL";
      $data['h_final'] = "NULL";
      $data['dia_entero'] = '1';

    }else{
      $data['h_inicio'] = "'".$_POST['start_hour']."'";
      $data['f_final'] = "'".$_POST['end_date']."'";
      $data['h_final'] = "'".$_POST['end_hour']."'";
      $data['dia_entero'] = '0';
    }



    if($response['conexion']=='OK'){
        if($con->insertData('eventos', $data)){
          $data['msg']="OK";
        }else {
          $data['msg']= "Ups! error en insercion";
        }
      }else{
        $data['msg']="Error ingresando a base de datos en crear nuevo evento :(";
      }

  }else{
    $data['msg']="No se ha iniciado una sesion";
  }


  echo json_encode($data);

  

 ?>
