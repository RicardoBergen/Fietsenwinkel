<?php
//Deze functies kunnen door alle pagina's gebruikt worden

//zet sessie array aan
session_start();
//Maak verbinding met de database
function ConnectDB($dbname="fietsenwinkel", $username="root", $password="", $servername="localhost"){
  try {
      $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conn;
      //return "Connected successfully";
      }
  catch(PDOException $e)
      {
        return "Connection failed: " . $e->getMessage();
     }
  }

function UserLogin($username, $password){
  ConnectDB();
  $sql = "";
  if (condition) {
    // code...
  }else {
    // code...
  }
}

function CheckLogin(){

}

 ?>
