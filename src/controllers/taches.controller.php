<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($_REQUEST["action"])) {
        // die('ok');
        if ($_REQUEST["action"]=="addtask") {
            $data= json_decode(file_get_contents('php://input'),true);
            array_to_json('ETAT',$data);

            // echo "traiter le formulaire de conexion";

            
             
        }
        
    

    

    }
}