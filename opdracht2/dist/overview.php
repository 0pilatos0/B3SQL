<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/Styles.min.css" />
    
  </head>
  <body>
    <?php
        $host = 'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'b3sql';

        $dsn = 'mysql:host='. $host . ';dbname='. $dbname;

        $pdo = new PDO($dsn, $user, $password);

        $stmt = $pdo->query('SELECT * FROM records ORDER BY `records`.`start_time` ASC');
    ?>
    <div class="test">
      <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){ 
          echo "ID " . $row['id']." --- Game ";
          echo $row['game']. " <br>";
          echo "Instructeur:  ".$row['instructor']. "<br>";
          echo "Medespelers:  ".$row['Players']. "<br>";
          echo "Start Tijd:  ".$row['start_time'] . " --- Duratie:  ". $row['Duratie']." Min<br><br>";
          
          } ?>
    <a class="btn btn-primary" href="./index.php " role="button">terug</a>
    <a class="btn btn-primary" href="./edit.php" role="button">Bewerk</a>
    <a class="btn btn-primary" href="./info.php" role="button">info</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
