<?php
  $conn = connectdb();
  echo "<table><tr><th>merk</th><th>type</th><th>prijs</th></tr>";
  $id = $_GET['id'];
  $stmt = $conn->prepare("SELECT * FROM fietsen");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $k=>$v) {
    if($id == $v['id']){
      echo "<tr><td>" . $v['merk'] . "</td><td>" . $v['type'] . "</td><td>" . $v['prijs'] . "</td></tr>";
    }else{

    }

  };
  echo "</table>";
?>
