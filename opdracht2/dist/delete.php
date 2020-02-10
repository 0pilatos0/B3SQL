<?php 
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'b3sql';

    $dsn = 'mysql:host='. $host . ';dbname='. $dbname;

    $pdo = new PDO($dsn, $user, $password);

    $game = $_COOKIE["gameid"];
    $stmt = $pdo->query("DELETE FROM `records` WHERE `id` = $game");
    $stmt->execute();
    echo "<script type='text/javascript'>if(!alert('Spel is verwijdert')) document.location = 'http://localhost/b3sql/opdracht2/dist/';</script>";
?>