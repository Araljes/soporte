<?php
    class Empresa extends Conectar{

        public function get_empresa(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM empresa WHERE est=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }
?>