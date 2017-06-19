
<?php

include('header.php');
?>
<section class="container">


<?php
session_start();
echo '<h3>-Users Infos-</h3><hr>';
echo '<strong>Nom : </strong>'.($_SESSION['nom']).'<br><hr>';
echo '<strong>Prenom : </strong>'.($_SESSION['prenom']).'<br><hr>';
echo '<strong>Age : </strong>'.($_SESSION['age']).'</br><hr>';

       ?>

  </section>
  </body>
  </html>
