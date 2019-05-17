<?php
try {
    $dsn = 'mysql:dbname=zwierzeta;host=127.0.0.1';
    $user = 'root';
    $password = '';
    $db = new PDO($dsn, $user, $password);
    $db->exec("update zwierzeta_domowe set nazwa='Reksio' where id=3");
    $sql = 'select gatunek, nazwa from zwierzeta_domowe';
    foreach($db->query($sql) as $row) {
        echo $row['gatunek']. " ";
        echo $row['nazwa']."</br>";
    }
    

}
catch (PDOException $e) {
    echo 'Connection failed';
}
    
?>
