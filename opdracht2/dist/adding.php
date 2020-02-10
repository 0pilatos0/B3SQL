<?php 
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'b3sql';

    $dsn = 'mysql:host='. $host . ';dbname='. $dbname;

    $pdo = new PDO($dsn, $user, $password);

    $wann = $_POST['warneer'];
    $game = $_COOKIE["game"]; 
    $Duur = $_COOKIE["duur"]; 

    $d0 = "";
    $d1 = "";
    $d2 = "";
    $d3 = "";
    $d4 = "";
    $d5 = "";
    $d6 = "";
    $d7 = "";
    $d8 = "";
    $d9 = "";
    $d10 = "";
    $d11 = "";

    if(isset($_POST['d0'])) {
        $d0 = $_POST['d0'];
    }
    if(isset($_POST['d1'])) {
        $d1 = $_POST['d1'];
    }
    if(isset($_POST['d2'])) {
        $d2 = $_POST['d2'];
    }
    if(isset($_POST['d3'])) {
        $d3 = $_POST['d3'];
    }
    if(isset($_POST['d4'])) {
        $d4 = $_POST['d4'];
    }
    if(isset($_POST['d5'])) {
        $d5 = $_POST['d5'];
    }
    if(isset($_POST['d6'])) {
        $d6 = $_POST['d6'];
    }
    if(isset($_POST['d7'])) {
        $d7 = $_POST['d7'];
    }
    if(isset($_POST['d8'])) {
        $d8 = $_POST['d8'];
    }
    if(isset($_POST['d9'])) {
        $d9 = $_POST['d9'];
    }
    if(isset($_POST['d10'])) {
        $d10 = $_POST['d10'];
    }
    if(isset($_POST['d11'])) {
        $d11 = $_POST['d12'];
    }  
    $players = $d0 . " " . $d1 . " " . $d2 . " " . $d3 . " " . $d4 . " " . $d5 . " " . $d6 . " " . $d7 . " " . $d8 . " " . $d9 . " " . $d10 . " " . $d11 . " ";
    $data = [
        'game' => $game,
        'wann' => $wann,
        'd0' => $d0,
        'players' => $players,
        'Duur' => $Duur,
    ];
    $sql = "INSERT INTO records (game, start_time, instructor, Players, Duratie) VALUES (:game, :wann, :d0, :players, :Duur)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute($data);
    echo "<script type='text/javascript'>if(!alert('Spel is ingepland')) document.location = 'http://localhost/b3sql/opdracht2/dist/';</script>";
?>