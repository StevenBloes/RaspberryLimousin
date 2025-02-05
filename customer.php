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
  echo "<table><tr><th>Naam</th><th>Adres</th><th>Postcode</th><th>Plaats</th><th>Tel./GSM</th><th>Mail</th><th>Opmerkingen</th><tr>";
  $host = "192.168.129.9:3306";
  $user = "visitor";
  $pass = "visitor";
  $database = "limousin_db";
  $mysqli = mysqli_connect($host, $user, $pass, $database);
  $query = "SELECT name, address, postal, city, phone, mail, remarks FROM customers;";
  $result = mysqli_query($mysqli, $query);
  while ($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>".$row["name"]."</td>
	<td>".$row["address"]."</td>
	<td>".$row["postal"]."</td>
	<td>".$row["city"]."</td>
	<td>".$row["phone"].'</td>
	<td><a href="mailto:'.$row["mail"].'">'.$row["mail"]."</a></td>
	<td>".$row["remarks"]."</td></tr>";
  }
  $mysqli_close($mysqli);
  echo "</table>";
?>
  </body>
</html>

