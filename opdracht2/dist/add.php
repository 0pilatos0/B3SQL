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

        $stmt = $pdo->query('SELECT * FROM games');
    ?>
    <div class="test">
      <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){ echo $row['name'] .
      "<br />"; } ?>
      <form class="was-validated" action="addd.php" method="post">
        <div class="form-group">
          <select name="input" class="custom-select" required>
            <option value="">Spellen \/</option>
            <option value="1">7 Wonders</option>
            <option value="2">Camel Up</option>
            <option value="3">Roborally</option>
            <option value="4">Codenames: Pictures</option>
            <option value="5">Dale of Merchants</option>
            <option value="6">Dixit: Odyssey</option>
            <option value="7">Concept</option>
            <option value="8">10 minuten kraak</option>
            <option value="9">Ghost Fightin' Treasure Hunters</option>
            <option value="10">Downforce</option>
            <option value="11">City of Horror</option>
            <option value="12">Fantasy Realms</option>
            <option value="13">The Estates</option>
            <option value="14">Lemming Maffia</option>
            <option value="15">Micropolis</option>
            <option value="16">Mysterium</option>
            <option value="17">Spyfall</option>
            <option value="18">Keep Talking and Nobody Explodes</option>
            <option value="19">Not Alone</option>
            <option value="20">The Climbers</option>
            <option value="21">Gizmos</option>
            <option value="22">The Dragon & Flagon</option>
            <option value="23">Pandemic</option>
            <option value="24">Everyone is John</option>
            <option value="25">Counterfeiters</option>
          </select>
          <div class="invalid-feedback">Kies een van de Spellen</div>
        </div>
        <button class="btn btn-primary" type="submit">Submit form</button>
        <a class="btn btn-primary" href="./index.php " role="button">terug</a>
      </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
