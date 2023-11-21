<?php

    class Usuario extends Conectar {

        public function login(){
            $conectar=parent::Conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){
                $correo = $_POST["usuario_correo"];
                $pass = $_POST["usuario_pass"];
                $rol = $_POST["rol_id"];
                if(empty($correo) and empty ($pass)){
                    header("Location:".conectar::ruta()."/view/index.php?m=2");
                    exit();
                }else{
                    $sql="SELECT * FROM `tm_usuario` WHERE usuario_correo=? AND usuario_pass=? AND rol_id=? AND est=1 ";
                    $stmt=$conectar -> prepare($sql);
                    $stmt ->bindValue(1, $correo);
                    $stmt ->bindValue(2, $pass);
                    $stmt ->bindValue(3, $rol);
                    $stmt ->execute();
                    $resultado = $stmt ->fetch();
                    if (is_array ($resultado) and count($resultado)>0){
                        $_SESSION["usuario_id"]=$resultado["usuario_id"];
                        $_SESSION["usuario_nombre"]=$resultado["usuario_nombre"];
                        $_SESSION["usuario_apellido"]=$resultado["usuario_apellido"];
                        $_SESSION["rol_id"]=$resultado["rol_id"];
                        header("Location:" . conectar::ruta(). "/view/home/index.php");
                        
                        exit();

                    }else{
                        header("Location:".conectar::ruta()."/view/index.php?m=1");
                        exit();
                    }


                }

            }



        }

    }



?>