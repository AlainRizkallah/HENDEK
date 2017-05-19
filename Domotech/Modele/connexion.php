<?php
    $dbname = "Domotech";
    $host='localhost';
    $user='root';
    $pass='';

    $db = new PDO("mysql:host=$host;dbname=$dbname;Encrypt=true;charset=UTF8", "$user", "$pass");
    //$db->query("SET NAMES UTF8");

?>
