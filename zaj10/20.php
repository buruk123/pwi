<?php
    $dsn = 'mysql:dbname=zwierzeta;host=127.0.0.1';
    $user = 'root';
    $password = '';
    $db = new PDO($dsn, $user, $password);
    $db->exec("update zwierzeta_domowe set nazwa='Reksio' where id=3");
?>
