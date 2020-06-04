<?php
  if($_SESSION['valid']){
    echo $_SESSION['username'];
  }else {
    echo "menu";
  }
 ?>
<ul>
  <li><a href='index.php'>home</a></li>
  <li><a href='index.php?page=fietsen'>fietsen</a></li>
  <li><a href='index.php?page=registreren'>registreren</a></li>
  <li><a href='index.php?page=inloggen'>inloggen</a></li>
  <li><a href='index.php?page=uitloggen'>uitloggen</a></li>
</ul>
