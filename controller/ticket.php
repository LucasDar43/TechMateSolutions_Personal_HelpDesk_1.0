<?php

    require_once("../config/conexiones.php");
    require_once("../models/Ticket.php");
    $ticket =new Ticket();

    

    switch($_GET["op"]){
        case "insert":
            $ticket ->insert_ticket($_POST ["usuario_id"],$_POST ["cat_id"],$_POST ["ticket_titulo"],$_POST ["ticket_descripcion"]);
          
            break;

        case "listar_usuario":
            $datos=$ticket->listar_ticket($_POST["usuario_id"]);
            $data= Array();
            foreach($datos as $row){
                $sub_array=array();
                $sub_array[]=$row["ticket_id"];
                $sub_array[]=$row["cat_nombre"];
                $sub_array[]=$row["ticket_titulo"];
                

                if ($row["estado"]=="Abierto"){
                    $sub_array[]='<span class="label label-pill label-success">Abierto</span>';
                }else{
                    $sub_array[]='<span class="label label-pill label-default">Cerrado</span>';
                }

                $sub_array[] = date("d/m/Y H:i:s", strtotime($row["fecha_creacion"]));
                $sub_array[] = '<button type="button" onClick="ver('.$row["ticket_id"].');"  id="'.$row["ticket_id"].'" class="tabledit-edit-button btn btn-sm btn-default active"><i class="fa fa-eye"></i></button>';
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);

        break;


        case "listar":
            $datos=$ticket->listar();
            $data= Array();
            foreach($datos as $row){
                $sub_array=array();
                $sub_array[]=$row["ticket_id"];
                $sub_array[]=$row["cat_nombre"];
                $sub_array[]=$row["ticket_titulo"];
                

                if ($row["estado"]=="Abierto"){
                    $sub_array[]='<span class="label label-pill label-success">Abierto</span>';
                }else{
                    $sub_array[]='<span class="label label-pill label-default">Cerrado</span>';
                }

                $sub_array[] = date("d/m/Y H:i:s", strtotime($row["fecha_creacion"]));
                $sub_array[] = '<button type="button" onClick="ver('.$row["ticket_id"].');"  id="'.$row["ticket_id"].'" class="tabledit-edit-button btn btn-sm btn-default active"><i class="fa fa-eye"></i></button>';
                $data[] = $sub_array;
               
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "iTotalDisplayRecords"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);

        break;

      


        case "listar_detalle":
            $datos=$ticket->listar_ticketdetalle($_POST["ticket_id"]);
            ?>
                <?php
                    foreach($datos as $row){
                ?>
                   <article class="activity-line-item box-typical">
                                <div class="activity-line-date">
                                    <?php echo date("d/m/Y", strtotime($row["fecha_creacion"]));?>
                                </div>
                                        <header class="activity-line-item-header">
                                            <div class="activity-line-item-user">
                                                <div class="activity-line-item-user-photo">
                                                    <a href="#">
                                                    <?php 
                                                        if (isset($row['rol_id'])) {
                                                            if ($row['rol_id'] == 1) {?>
                                                                <img src="../../public/img/photo-92-1.jpg" alt="">
                                                                <?php
                                                            } else {?>
                                                                <img src="../../public/img/photo-64-1.jpg" alt="">
                                                                <?php
                                                            }
                                                        } else {?>
                                                            <img src="../../public/img/photo-92-2.jpg" alt="">
                                                            <?php
                                                        }
                                                    ?>
                                                        
                                                    </a>
                                                </div>
                                                <div class="activity-line-item-user-name"><?php echo $row['usuario_nombre'].' '.$row['usuario_apellido'];?></div>
                                                <div class="activity-line-item-user-status">
                                                <?php 
    if (isset($row['rol_id'])) {
        if ($row['rol_id'] == 1) {
            echo 'Usuario';
        } else {
            echo 'Soporte';
        }
    } else {
        echo 'Rol no definido';
    }
?>
                                                    
                                                </div>
                                            </div>
                                        </header>

                                <div class="activity-line-action-list">
                                    <section class="activity-line-action">
                                        <div class="time"><?php echo date("H:i:s", strtotime($row["fecha_creacion"]));?></div>
                                        <div class="cont">
                                            <div class="cont-in">
                                                
                                                <p>
                                                <?php echo $row['ticket_descripcionD'];?> 
                                                </p>
                                                
                                                
                                            </div>
                                        </div>
                               
                                  
                                </div>
                            </article>
          <?php  
                    }

?>
<?php
        break;



    case "mostrar":
        $datos=$ticket->listar_ticket_id($_POST["ticket_id"]);  
        if(is_array($datos)==true and count($datos)>0){
            foreach($datos as $row)
            {
                $output["ticket_id"] = $row["ticket_id"];
                $output["usuario_id"] = $row["usuario_id"];
                $output["cat_id"] = $row["cat_id"];
                $output["ticket_titulo"] = $row["ticket_titulo"];
                $output["ticket_descripcion"] = $row["ticket_descripcion"];

                if ($row["estado"]=="Abierto"){
                    $output["estado"] = '<span class="label label-success">Abierto</span>';
                }else{
                    $output["estado"] = '<span class="label label-pill label-danger">Cerrado</span>';
                }

               

                $output["fecha_creacion"] = date("d/m/Y H:i:s", strtotime($row["fecha_creacion"]));
                $output["usuario_nombre"] = $row["usuario_nombre"];
                $output["usuario_apellido"] = $row["usuario_apellido"];
                $output["cat_nombre"] = $row["cat_nombre"];
            }
            echo json_encode($output);
        }   
    break;      


    case "insert_detalle":
        $ticket ->insert_ticket_detalle($_POST ["ticket_id"],$_POST ["usuario_id"],$_POST ["ticket_descripcionD"]);
      
        break;

        case "update":
            $ticket ->update_ticket($_POST ["ticket_id"]);
          
        break;


    }
?>