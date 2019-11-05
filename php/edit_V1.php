<?php

if($_POST['action'] == 'edit')
 
{
    $name = filter_input(INPUT_POST, 'name');
    $delivery_address = filter_input(INPUT_POST, 'delivery_address');
    $collPoint = filter_input(INPUT_POST, 'collPoint');
    $comments = filter_input(INPUT_POST, 'comments');
  
   // przygotowanie szkieletu zapytania
 
  $edit = $db->prepare('UPDATE customers SET name = :name, delivery_address = :delivery_address =  collPoint =  :collPoint, comments = :comments WHERE id = :id');
 
  // przypisujemy zmienne do placeholderów
 
  bindValue(':name', $name, PDO::PARAM_STR);
 
  bindValue(':delivery_address', $delivery_address, PDO::PARAM_STR);
 
  bindValue(':collPoint', $collPoint, PDO::PARAM_STR);
 
  bindValue(':comments', $comments, PDO::PARAM_STR);
 
  bindValue(':id', $id, PDO::PARAM_INT);
 
  // wykonujemy zapytanie
 
  $result = $edit->execute();
 
  if($result !== false)
 
  {
 
    echo 'Zaktualizowano użytkownika o ID = ' . $id;
 
  } else {
 
    echo 'Wystąpił błąd';
 
  }
 
 
 
  $edit->closeCursor();
 
  unset($edit);
 
  $db = null;
 
}

?>
