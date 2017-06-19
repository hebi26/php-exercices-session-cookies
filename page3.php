<?php
 include('header.php');
 ?>

 <section class="container">


      <form method="post" action="page4.php">
      <h3>-Modifier le compte-</h3>
      <div class="form-group">
      <input type="text" class="form-control" name="pseudo" id="pseudo" required="required" placeholder="Pseudo..." >
      </div>
      <div class="form-group">
      <input type="password" class="form-control" name="mdp" id="mdp" required="required" placeholder="Password...">
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
