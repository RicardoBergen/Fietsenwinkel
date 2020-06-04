<form method="post">
  <table>
    <tr>
      <th>Username</th>
      <td><input type="text" name="username" required></td>
    </tr>
    <tr>
      <th>Wachtwoord</th>
      <td><input type="password" name="password" required></td>
    </tr>
  </table>
  <input type="submit" name="submit">
</form>
<?php
if( isset( $_POST['submit'] ) ){
  // variable van de form
  $username = $_POST['username'];
  $password = $_POST["password"];
  $u = false;
  $p = false;
  //connection met de dataase
  $conn = connectdb();
  $stmt = $conn->prepare("SELECT * FROM klanten");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  //elke lijn van de database ophalen
  foreach($stmt->fetchAll() as $k=>$v) {
    $hashpassword = $v['password'];
    if($username == $v['username']){
      $u = true;
    }
    if(password_verify($password, $hashpassword)){
      $p = true;
    }
  }
  if($u == true && $p == true){
    $_SESSION['valid'] = true;
    $_SESSION['role'] = $v['role'];
    $_SESSION['username'] = $username;
    echo 'You have entered valid username and password';
  }
}
?>
