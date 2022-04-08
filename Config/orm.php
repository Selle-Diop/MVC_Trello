<!-- Change les formats de donnees -->
<?php

// function json_to_array(string $key):array{
//     $json=file_get_contents(PATH_DB);
//     $arr=json_decode($json,true);
//     return $arr[$key];

// }
// Enregistrement et mise a jour des donnees du fichier
function array_to_json($key, $newTask)
{
    $dataJson=file_get_contents(PATH_DB);
    $data=json_decode($dataJson,true);
    $data[$key][]=$newTask;
    $fileNameData=json_encode($data);
    file_put_contents(PATH_DB,$fileNameData);

    
}