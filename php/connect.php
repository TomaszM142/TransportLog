<?php

	$host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "transport";
	$table="orders";

?>

<?php 
// odbieramy dane z formularza 
$name = $_POST['name']; 
$delivery_address = $_POST['deladdress']; 
$delivery_date_1 = $_POST['DD'];
$delivery_date_2 = $_POST['MM'];
$delivery_date_3 = $_POST['YYYY'];
$deldate = ("$delivery_date_1/$delivery_date_2/$delivery_date_3");
$dellT_1_1 = $_POST['HH'];
$dellT_1_2 = $_POST['MM'];
$dellT_1_3 = $_POST['SS'];
$collT_1_4 = $_POST['PM'];
$deltime = ("$dellT_1_1:$dellT_1_2:$dellT_1_3-$dellT_1_4");
$collPoint = $_POST['colladdress'];
$status-0 = $_POST['picked'];
$status-1 = $_POST['dispatched'];
$$coll_1_1 = $_POST['DD'];
$$coll_1_2 = $_POST['MM'];
$$coll_1_3 = $_POST['YYYY'];
$colldate = ("$delivery_date_1/$delivery_date_2/$delivery_date_3");
$colTime_1 = $_POST['HH'];
$colTime_2 = $_POST['MM'];
$colTime_3 = $_POST['SS'];
$Collampm = $_POST['PM'];
$colltime = ("$dellT_1_1:$dellT_1_2:$dellT_1_3-$dellT_1_4");
$comments = $_POST['coments']; 


if($imie and $email) { 
     
    // łączymy się z bazą danych 
    $connection = @mysql_connect('localhost', 'root', '') 
    or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('transport', $connection) 
    or die('Nie mogę połączyć się z bazą danych'); 
     
    // dodajemy rekord do bazy 
    $ins = @mysql_query("INSERT INTO orders VALUES ('', '$name', '$delivery_address', TO_DATE('$deldate', 'DD/MM/YYYY'), TO_TIME($deltime, 'HH:MM:SS-PM'), '$collPoint', '$status-0', '$status-1', TO_DATE($colldate, 'DD/MM/YYYY'), TO_TIME($colltime, 'HH:MM:SS-PM'), '$comments' ); 
     
    if($ins) echo "Rekord został dodany poprawnie"; 
    else echo "Błąd nie udało się dodać nowego rekordu"; 
     
    mysql_close($connection); 
} 

?>