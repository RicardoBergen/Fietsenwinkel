<form method="post">
  <table>
    <tr>
      <th>Voornaam</th>
      <td><input type="text" name="voornaam" required></td>
    </tr>
    <tr>
      <th>Achternaam</th>
      <td><input type="text" name="achternaam" required></td>
    </tr>
    <tr>
      <th>Username</th>
      <td><input type="text" name="username" required></td>
    </tr>
    <tr>
      <th>E-mail adres</th>
      <td><input type="email" name="email" required></td>
    </tr>
    <tr>
      <th>Wachtwoord</th>
      <td><input type="password" name="wachtwoord" required></td>
    </tr>
  </table>
  <input type="submit" name="submit">
</form>
<?php
  if( isset( $_POST['submit'] ) ){
    $username_inuse= false;
    $email_inuse= false;
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $wachtwoord = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);
    $rol = 1;
    //connection met de dataase
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM klanten");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //elke lijn van de database ophalen
    foreach($stmt->fetchAll() as $k=>$v) {
      if($username == $v['username']){
        $username_inuse= true;
      }elseif($email == $v['email'] ) {
        $email_inuse= true;
      }
    }
    if($username_inuse == true){
      echo 'de username is al in gebruik';
    }elseif($email_inuse == true){
      echo 'De email is al in gebruik';
    }else{
      $sql = "INSERT INTO `klanten` (`voornaam`, `achternaam`, `username`, `email`, `password`, `role`)
      VALUES ('$voornaam', '$achternaam', '$username', '$email', '$wachtwoord', '$rol')";
      // use exec() because no results are returned
      $conn->exec($sql);
      echo "New record created successfully";
    }
  }
?>
