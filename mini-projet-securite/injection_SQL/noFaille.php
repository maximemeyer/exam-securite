<?php
$user = $_POST['Username'];
$pwd = $_POST['Password'];

$db = new PDO('sqLite::data');
$req = $db->query("SELECT * FROM connexion WHERE id = ? and mdp = ?");
$req = execute(array($user, $pwd));
$ligne = $req->fetchAll(PDO::FETCH_ASSOC);

if(sizeof($ligne) > 0) {
    echo "Hello " .$user;
} else {
    echo "Connexion refusé";
}