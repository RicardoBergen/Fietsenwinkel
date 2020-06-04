<?php
  $conn = connectdb();
  echo "<table>";
  echo "<tr><th>merk</th><th>type</th></tr>";
  $stmt = $conn->prepare("SELECT * FROM fietsen");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $k=>$v) {
    $id = $v['id'];
    echo "<tr><td><a href='index.php?page=detail&id=" . $id ."'>" . $v['merk'] . "</a></td><td>" . $v['type'] . "</td></tr>";
  };
  echo "</table>";
?>
