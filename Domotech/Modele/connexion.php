<?php
    $dbname = "Utilisateurs";
    $host='localhost';
    $user='root';
    $pass='';

    $db = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$pass");
    $db->query("SET NAMES UTF8");
?>
