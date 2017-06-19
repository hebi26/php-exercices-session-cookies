<?php

include('header.php');
?>
<section class="container">
<?php

session_start();
// ----------------------EXO 1------------------------------------------------
      echo '<h3>-Connection infos-</h3><hr>';
      echo '<strong>User Agent : </strong>'.$_SERVER['HTTP_USER_AGENT'].'<br>' ;
      echo '<strong>IP address : </strong>'.$_SERVER["REMOTE_ADDR"].'<br>';
      echo '<strong>Server Name : </strong>'.$_SERVER["SERVER_NAME"].'<hr>';

// --------------------------EXO 2-------------------------------------------

    $_SESSION['nom'] = "vel";
    $_SESSION['prenom'] = "luka";
    $_SESSION['age'] = 26;

// --------------------------------EXO 3 & EXO 4-------------------------------
?>
<form method="post" action="page5.php">

<div class="form-group">
<input type="text" class="form-control" name="pseudo" id="pseudo" required="required" placeholder="Pseudo..." >
</div>
<div class="form-group">
<input type="password" class="form-control" name="mdp" id="mdp" required="required" placeholder="Password..." >
</div>
<input type="submit" class="btn btn-success"><br><hr>
</form>


<?php
echo '<strong>pseudo : </strong>'.$_COOKIE["pseudo"].'<br>';
echo '<strong>mot de passe : </strong>'.$_COOKIE["mdp"].'<hr><br>';
?>
</section>
</body>
</html>
