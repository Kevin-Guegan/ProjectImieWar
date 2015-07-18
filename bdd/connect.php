<?php

require('database.php');

if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pass'])) {
extract($_POST);
// on recupère le password de la table qui correspond au login du visiteur


$sql = "SELECT Id, Password FROM User WHERE Login='".$_POST['login']."'";
$req = $conn->query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

$data = $req->fetch(PDO::FETCH_ASSOC);



    if($data['Password'] != $pass) {
        echo '<p>Mauvais login / password. Merci de recommencer</p>';
        redirect('../index.php'); // On inclut le formulaire d'identification
        exit;
    } else {

        $_SESSION['login'] = $login;
        $_SESSION['pass'] = $pass;
        $_SESSION['Id'] = $data['Id'];
        //redirection sur la page Home du site
        header('Location: ../Home.php');
        //require('../Home.php');
    }

} else {
    echo '<p>Vous avez oublié de remplir un champ.</p>';
    //require('../index.php');
    exit;
}


?>