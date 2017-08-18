<?php
	require('conector.php');

session_start();

  if(isset($_SESSION['username'])){

    $con = new ConectorBD('localhost','ernesto','123456');

    $response['conexion']= $con->initConexion('agendaf');

    $resultado1 = $con->consultar(['usuarios'], ['id'], "WHERE email ='".$_SESSION['username']."'");
    $fila1 = $resultado1->fetch_assoc();


    if($response['conexion']=='OK'){

     $resultado2 = $con->consultar(['eventos'], ['id','titulo','f_inicio','h_inicio','f_final','h_final','dia_entero'],
       "WHERE fk_usuarios ='".$fila1['id']."'");

       $i=0;

       while($fila2 = $resultado2->fetch_assoc()){
          $data['eventos'][$i]['id']=$fila2['id'];
          $data['eventos'][$i]['title']=$fila2['titulo'];
          $data['eventos'][$i]['start']=$fila2['f_inicio'];

          if($fila2['dia_entero']=='0'){
            $data['eventos'][$i]['end']=$fila2['f_final'];
          }

         $i++;
       }


      $data['msg']='OK';

    }else{
      $data['msg']="Ups!, No se pudo conectar a la base de datos!";
    }

  }


  echo json_encode($data);
?>



 
