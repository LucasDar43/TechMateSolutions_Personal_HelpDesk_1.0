<?php
    class Categoria extends Conectar{

        public function get_categoria(){
            $conectar= parent::Conexion();
            parent::set_names();
            $sql="SELECT * FROM categoria WHERE cat_estado=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

}


?>