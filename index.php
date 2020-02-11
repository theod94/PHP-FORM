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
        <th scope="col">FirstName</th>
        <th scope="col">LastName</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
        <th scope="col">Modifier</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $sql = "SELECT * FROM users ORDER BY id DESC";
    $req = $dbh->query($sql);
    $users=$req->fetchAll();
    foreach ($users as $user) {

        echo '<tr>';
        echo '<td class="border border-secondary">'.$user['id'].'</td>';
        echo '<td class="border border-secondary">'.$user['nom_user'].'</td>';
        echo '<td class="border border-secondary">'.$user['prenom_user'].'</td>';
        echo '<td class="border border-secondary">'.$user['email'].'</td>';
        echo '<td class="border border-secondary"><a href="listes.php?id='.$user['id'].'">Voir ses listes</a></td>';
        echo '<td class="border border-secondary"><a href="update.php?id='.$user['id'].'">Modifier</a></td>';
        echo '<td class="border border-secondary"><a href="delete.php?delete&id='.$user['id'].'">Supprimer</a></td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>

</body>
</html>
