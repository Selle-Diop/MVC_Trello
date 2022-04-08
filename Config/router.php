<!-- Qui permet de charger les controllers -->
<?php
// var_dump($_REQUEST['controller']);die;
if (isset($_REQUEST['controller'])) { 
    switch ($_REQUEST['controller']) {
        case "tache":
            require_once(PATH_SRC."controllers/taches.controller.php");
            break;

        
            
        
       
    }
   
}
else {
    require_once(PATH_SRC."controllers/taches.controller.php");
    
}
