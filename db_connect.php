<?php

// Questo file serve per connettersi al database da qualsiasi altro file usando l'istruzione: include 'connect.php';
// bisogna ovviamente modificare username, password e il nome del database con i vostri dati
// ATTENZIONE: quando fate i commit escludete questo file altrimenti vengono committati i vostri dati!!!

$mysql_host="127.0.0.1";
$mysql_username="root";
$mysql_password="";
$database="progetto";
$connect=mysql_connect ($mysql_host, $mysql_username, $mysql_password);
$connectdb=mysql_select_db("$database", $connect);
if (!$connect ) {
  echo "mysql_connect : " . mysql_error() . "<br />";
  echo "Error code :" . mysql_errno() . "<br />";
  die('Error connecting to mysql');
}
?>