<?php
include "./database/db.php";
$dns = "mysql:host=localhost;dbname=projet5;charset=utf8";
$pdo = new PDO($dns, "root", "NejeL8");
if (isset($_POST['reserver'])) {
    DB::reserverGite(htmlspecialchars($_POST["id"]), addslashes(htmlspecialchars($_POST["date"])), addslashes(htmlspecialchars($_POST["nom"])), addslashes(htmlspecialchars($_POST["prenom"])), addslashes(htmlspecialchars($_POST["mail"])));
    header("Location:index.php");
}
