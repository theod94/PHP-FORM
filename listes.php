<?php
require('./config/connect.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Date</th>
        <th scope="col">Prix</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $id=$_GET['id'];
//    $sql = "SELECT * FROM listes WHERE id=$id ORDER BY id DESC";
//    $req = $dbh->query($sql);
    $req = $dbh->prepare("SELECT * FROM listes WHERE id=? ORDER BY id DESC");
    $req->execute(array($id));
    $listes=$req->fetchAll();
    foreach ($listes as $liste) {

        echo '<tr>';
        echo '<td class="border border-secondary">'.$liste['id'].'</td>';
        echo '<td class="border border-secondary">'.$liste['date_achat'].'</td>';
        echo '<td class="border border-secondary">'.$liste['prix_total'].'</td>';
        echo '<td class="border border-secondary"><a href="listes.php?id='.$liste['id'].'">Voir ses articles</a></td>';
        echo '</tr>';
    }


    ?>
    </tbody>
</table>
</body>
</html>
