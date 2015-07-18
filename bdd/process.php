<?php
/**
 * Created by PhpStorm.
 * Author: kguegan
 * Query File
 */
require('database.php');
//Récupération de toute les informations de l'utilisateur
$userquery= "SELECT * FROM User INNER JOIN Civility ON Civility.Id = User.CivilityId WHERE User.Id = ".$_SESSION['Id'];
$userreq = $conn->query($userquery) or die('Erreur SQL !<br>'.$userquery.'<br>'.mysql_error());
$datauser = $userreq->fetch(PDO::FETCH_ASSOC);


//Récupération de toute les informations de l'armée de l'utilisateur
$armyquery= "SELECT userarmycomposant.Soldier, userarmycomposant.Archer, userarmycomposant.Hero, userarmy.Attack, userarmy.Defence FROM userarmycomposant INNER JOIN userarmy ON userarmy.UserId = userarmycomposant.UserId WHERE userarmycomposant.UserId = ".$_SESSION['Id'];
$armyreq = $conn->query($armyquery) or die('Erreur SQL !<br>'.$armyquery.'<br>'.mysql_error());
$dataarmy = $armyreq->fetch(PDO::FETCH_ASSOC);


//Récupération de toute les informations de la mine de l'utilisateur
$minequery= "SELECT *, mine.Id AS Id FROM mine INNER JOIN usermine ON mine.Id = usermine.MineId WHERE usermine.UserId = ".$_SESSION['Id'];
$minereq = $conn->query($minequery) or die('Erreur SQL !<br>'.$minequery.'<br>'.mysql_error());
$datamine = $minereq->fetch(PDO::FETCH_ASSOC);

//Récupération de toute les informations de la mine de l'utilisateur
$usergold= "SELECT * FROM usergold INNER JOIN user ON user.Id = usergold.UserId WHERE usergold.UserId = ".$_SESSION['Id'];
$usergoldreq = $conn->query($usergold) or die('Erreur SQL !<br>'.$usergold.'<br>'.mysql_error());
$datausergold = $usergoldreq->fetch(PDO::FETCH_ASSOC);