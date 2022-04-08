<!-- toutes les constantes du projet -->
<?php

define("ROOT" ,str_replace("Public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));
/* constantes pour les chemins du dossier
qui contient model et controlleur */

define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);

// charge les fichiers css/js

// constantes pour les chemins des views



// chemin pour les fichiers json
define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."tache.json");


