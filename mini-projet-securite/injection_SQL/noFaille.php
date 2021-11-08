<?php
$user = $_POST['Username'];
$pwd = $_POST['Password'];

$db = new PDO('sqlite:data.db');
$req = $db->prepare("SELECT * FROM connexion WHERE id = ? AND mdp = ?;");
$req->execute(array($user, $pwd));
$ligne = $req->fetchAll(PDO::FETCH_ASSOC);

if(sizeof($ligne) > 0) {
    echo "Hello " .$user;
} else {
    echo "Accès refusé";
}




