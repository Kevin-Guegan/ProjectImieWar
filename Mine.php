<?php
require('bdd/process.php');
?>

<!DOCTYPE html>
<!-- saved from url=(0048)http://getbootstrap.com/examples/justified-nav/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Mine</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/justified-nav/justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Justified Nav Template for Bootstrap_files/ie-emulation-modes-warning.js"></script><style type="text/css"></style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    <!-- The justified navigation menu is meant for single line per list item.
         Multiple lines will require custom code not provided by Bootstrap. -->
    <div class="masthead">
        <h3 class="text-muted">Project War Imie <?php echo "Compte : ".$datausergold['Pseudo']." Vous avez ".$datausergold['Gold']. ?></h3>
        <nav>
            <ul class="nav nav-justified">
                <li><a href="Home.php">Home</a></li>
                <li><a href="Army.php">Armée</a></li>
                <li class="active"><a href="#">Mine</a></li>
                <li><a href="#">Downloads</a></li>
                <li><a href="Account.php">Compte</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </nav>
    </div>

<body>

<?php
echo "Vous avez actuellement une mine de niveau ".$datamine['Id'];
echo "<br>";
echo "Vous gagnez ".$datamine['GoldPerHours']." OR/heure";
?>
</body>
</div>
</html>