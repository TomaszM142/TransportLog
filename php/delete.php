<?php
// Deleting order form database
include_once('database.php');

$id = $_GET['id'];

$sql = 'DELETE FROM orders WHERE id=:id';
$query = $db->prepare($sql);
$query->execute(array(':id' => $id));

header('Location: ../index.php');

?>
