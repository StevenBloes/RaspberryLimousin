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
  include 'header.html';
?>
    <?php 
	  try {
	    $host = '192.168.129.9:3306';
	    $user = 'visitor';
	    $pass = 'visitor';
	    $database = 'limousin_db';
	    $mysqli = mysqli_connect($host, $user, $pass, $database);
	    echo '<p><i>connection worked</i></p>';
	    $mysqli_close($mysqli);
	  } catch (Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
      }
	?>
  </body>
</html>

