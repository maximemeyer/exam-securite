<?php
$user = $_POST['Username'];
$pwd = $_POST['Password'];

$db = new PDO('sqlite:data.db');
$req = $db->query('SELECT * FROM connexion WHERE id ="'.$user.'" AND mdp = "' .$pwd.'";');
$ligne = $req->fetchAll(PDO::FETCH_ASSOC);

if(sizeof($ligne) > 0) {
    echo "Hello " .$user;
} else {
    echo "Accès refusé";
}