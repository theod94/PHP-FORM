<?php
require('./config/connect.php');
if (isset($_GET['delete'])) {
$id=$_GET['id'];
    $sql = "DELETE FROM users WHERE id=:id";
    $req = $dbh->prepare($sql);
    $req->bindParam(':id', $id);
    if ($req->execute()) {
        header('location:index.php');
    }
}
?>