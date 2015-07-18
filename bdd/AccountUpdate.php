<?php
/**
 * Created by PhpStorm.
 * User: kguegan
 * Date: 24/06/2015
 * Time: 14:07
 */

require('database.php');

//Update de l'utilisateur
$req = "UPDATE User
        SET Pseudo = '".$_POST['Pseudo']."',
        LastName = '".$_POST['LastName']."',
        FirstName = '".$_POST['FirstName']."',
        Email = '".$_POST['Email']."',
        Password = '".$_POST['Password']."'
        WHERE User.Id = ".$_SESSION['Id'];

//Exécution
$conn->exec($req) or die('Erreur SQL !<br>'.$req.'<br>'.mysql_error());

//Redirection sur la page
header('Location: ' . $_SERVER['HTTP_REFERER']);