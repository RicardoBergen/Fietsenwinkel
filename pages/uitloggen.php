<form method="post">
  <table>
    <tr>
      <th colspan="2">Weet u zeker dat u wilt uitloggen?</th>
    </tr>
    <tr>
      <td><input type="submit" name="ja" value="ja"></td>
      <td><a href='index.php' class="nee">nee</a></td>
    </tr>
  </table>
</form>
<?php
  if( isset( $_POST['ja'] ) ){
    $_SESSION['valid'] = false;
    $_SESSION['role'] = 0;
    $_SESSION['username'] = 0;
    echo 'You have been logged out';
  }
?>
