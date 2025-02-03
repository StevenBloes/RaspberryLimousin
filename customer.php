<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Limousin - Klanten</title>
    <link rel="icon" href="/img/favicon.svg">
    <link rel="stylesheet" href="/stylesheets/header.css">
  </head>
  <body>
<?php
  include "header.html";
  echo "<table><tr><th>naam</th><tr>";
  $host = "192.168.129.9:3306";
  $user = "visitor";
  $pass = "visitor";
  $database = "limousin_db";
  $mysqli = mysqli_connect($host, $user, $pass, $database);
  $query = "SELECT name FROM customers;";
  $result = mysqli_query($mysqli, $query);
  while ($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row["name"]."</td></tr>";
  }
  $mysqli_close($mysqli);
  echo "</table>";
?>
  </body>
</html>

