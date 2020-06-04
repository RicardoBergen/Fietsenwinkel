<!DOCTYPE html>
<?php include('functions.php'); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fietsenwinkel</title>
    <link rel="stylesheet" type="text/css" href="css/fietsenwinkel.css">
  </head>
  <body>
    <div class='page'>
      <div class='header'>De <img src="fiets.png" id=png> winkel</div>
      <div class='section'>
        <div class='menu'>
          <?php include('pages/menu.php'); ?>
        </div>
        <div class='content'>
          <?php
          if(empty($_GET['page'])){
            include('pages/home.php');
          }elseif ($_GET['page']=='fietsen') {
            include('pages/fietsen.php');
          }elseif ($_GET['page']=='detail') {
            include('pages/fietsendetail.php');
          }elseif ($_GET['page']=='registreren') {
            include('pages/registreren.php');
          }elseif ($_GET['page']=='inloggen') {
            include('pages/inloggen.php');
          }elseif ($_GET['page']=='uitloggen') {
            include('pages/uitloggen.php');
            // code...
          //}elseif (condition) {
            // code...
          }else {
            include('pages/home.php');
          }
           ?>
        </div>
      </div>
      <div class='footer'>©-RicardoBergen-2020</div>
    </div>
  </body>
</html>
