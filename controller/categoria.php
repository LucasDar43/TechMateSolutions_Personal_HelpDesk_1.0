<?php

    require_once("../config/conexiones.php");
    require_once("../models/Categoria.php");
    $categoria =new Categoria();

    switch($_GET["op"]){
        case "combo":
            $datos =$categoria ->get_categoria();
            if(is_array($datos)==true and count($datos)>0){
               /*  $html= "<option> </option>"; */
                foreach($datos as $row)
                {
                    $html.="<option value='".$row['cat_id']."'>".$row['cat_nombre']."</option>";


                }
                echo $html;

            }
            break;
    }
?>