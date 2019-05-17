<?php

try {
    $dsn = 'mysql:dbname=zwierzeta;host=127.0.0.1';
    $user = 'root';
    $password = '';

    $db = new PDO($dsn, $user, $password);
    $id = $_GET['id'];
    $sql = 'delete from zwierzeta_domowe where id = :id';
    $sth = $db->prepare($sql);
    
    $sth->bindParam(':id', $id);
    if($sth->execute()) {
        echo "usuniete";
    }
    else echo "brak";
    


    

}
catch (PDOException $e) {
    echo 'Connection failed';
}

?>