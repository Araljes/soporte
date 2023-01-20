<?php
    require_once("../config/conexion.php");
    require_once("../models/empresa.php");
    $empresa = new Empresa();
    
    echo $html;
    switch($_GET["op"]){
        case "combo":
            $datos = $empresa->get_empresa();
            
            if(is_array($datos)==true and count($datos)>0){
                foreach($datos as $row)
                {
                    $html.= "<option value='".$row['emp_id']."'>".$row['emp_des']."</option>";
                }
                echo $html;
            }
        break;
    }
?>