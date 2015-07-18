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

    <title>Page Home</title>

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
          <h3 class="text-muted">Project War Imie <?php echo "Compte : ".$datausergold['Pseudo']." Vous avez ".$datausergold['Gold']." Or"; ?></h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="Home.php">Home</a></li>
            <li><a href="Army.php">Armée</a></li>
            <li><a href="Mine.php">Mine</a></li>
            <li><a href="Attack.php">Attaquer</a></li>
            <li><a href="Account.php">Compte</a></li>
            <li><a href="#">About</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h2>Présentation Jeu War</h2>
        <p class="lead">Nouveau jeu War, le but du jeu étant de créer son armée pour attaquer les autres joueurs.</p>
        <p><a class="btn btn-lg btn-success" href="Home.php" role="button">Jouer</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Nouveauté!</h2>
          <p class="text-danger">Rien pour le moment</p>
          <p>Toujours rien pour le moment</p>
          <p><a class="btn btn-primary" href="./Justified Nav Template for Bootstrap_files/Justified Nav Template for Bootstrap.html" role="button">View details »</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Rien</h2>
          <p>Toujours rien</p>
          <p><a class="btn btn-primary" href="./Justified Nav Template for Bootstrap_files/Justified Nav Template for Bootstrap.html" role="button">View details »</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Rien</h2>
          <p>Toujours rien</p>
          <p><a class="btn btn-primary" href="./Justified Nav Template for Bootstrap_files/Justified Nav Template for Bootstrap.html" role="button">View details »</a></p>
        </div>
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>© Company 2015</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Justified Nav Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  

</body></html>