<?php
$id = $_GET['id'];
$wpis= "SELECT * FROM orders WHERE id='$id'";
$czytaj = mysql_query($wpis);
$wyswietl = mysql_fetch_array($czytaj);
?>