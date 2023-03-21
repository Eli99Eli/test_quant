<?php

    include 'db.php';

    $mss = 0;

    while(true) {
        sleep(60);
        $mss++;
        
        $req = $db->prepare('INSERT INTO news (type_, titre) VALUES(:type_, :titre)');
        $req->execute([
            'type_'=>'text',
            'titre'=>'Titre Exemple'
        ]);

        
        echo $mss . "\n";
    }
    
?>
