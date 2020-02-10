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
        error_reporting(0);
        ini_set('display_errors', 0);

        $host = 'localhost';
        $user = 'root';
        $password = '';
        $dbname = 'b3sql';

        $dsn = 'mysql:host='. $host . ';dbname='. $dbname;

        $pdo = new PDO($dsn, $user, $password);

        $input = $_POST['input'];
        setcookie('gameid', $input);
        $stmt = $pdo->query("SELECT * FROM `records` WHERE `id` = $input");
        
        
        ?>
        
    <div class="test">
      <?php 
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            echo "ID:  ".$row['id']. " --- Game:  ";
            $input2 = $row['game'];
            $instructor = $row['instructor'];
            $starttime = $row['start_time'];
            $playerss = $row['Players'];
        } if($row==0){
          echo "Er is een item gevonden met deze waarde <br>";
          echo ' <a class="btn btn-primary" href="./overview.php " role="button">terug</a>';
        }
     $stmt2 = $pdo->query("SELECT * FROM `games` WHERE `id` = $input2");
        while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)){
            echo $row['name'];
            $hvl = $row['max_players'];
            $hvl2 = $row['min_players'];
        }
        $namen = explode(" ", $playerss);
      ?>
<form class="was-validated" action="update.php" method="post">
        <div class="form-group">
        <div class="form-group row">
            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">  Instructeur</label>
            <div class="col-sm-10">
              <input type="name" value="<?php echo $instructor; ?>" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Instructeur" required="" name="d0">
            </div>
          </div>
        <div class="row">
        
          <?php 
          for($i = 1; $i<$hvl;$i++){
            
            if($i < $hvl2){
              echo '  <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">  Player</label>
              <div class="col-sm-10">
                <input type="name" value="'.$namen[$i].'" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Player" required="" name="d'.$i.'">
              </div>
            </div>';
            }
            else{
              echo '  <div class="form-group row">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">  Player</label>
              <div class="col-sm-10">
                <input type="name" value="'.$namen[$i].'" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Player" name="d'.$i.'">
              </div>
            </div>';
            }
          }
          ?>
          </div>
          <div class="form-group row">
            <label for="example-time-input" class="col-2 col-form-label">Time</label>

            <div class="col-10">
              <input class="form-control" type="time" value="<?php echo $starttime; ?>" id="example-time-input" name="warneer">
            </div>
            <p>Alleen hele minuten</p>
        </div>
          <div class="invalid-feedback">Kies een van de Spellen</div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
        <a class="btn btn-primary" href="./index.php " role="button">terug</a>
        <a class="btn btn-primary" href="./delete.php " role="button" onclick="return confirm('Weet je zeker dat je deze wilt verwijderen?')">Delete</a>
      </form>

    </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
