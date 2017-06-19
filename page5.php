<?php

include('header.php');

setcookie("pseudo", $_POST['pseudo']);
setcookie("mdp", $_POST['mdp']);
header("location: index.php");

?>

</body>
</html>
