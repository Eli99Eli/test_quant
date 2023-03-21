<?php

    $db_host = 'localhost';
    $db_name = 'bd_quant';
    $db_root = 'root';
    $db_psswd = '';
    
    try
    {
        $db = new PDO ('mysql:host='.$db_host.'; dbname='.$db_name.'; charset=utf8', $db_root, $db_psswd);
    }
    catch(Exception $e)
    {
        die ('Erreur au niveau de: '.$e->getMessage());
    }
?>