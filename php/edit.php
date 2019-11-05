<?php

include_once('database.php');

if (isset ($_POST['update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $delivery_address = $_POST['delivery_address'];
    $collPoint = $_POST['collPoint'];
    $comments = $_POST['comments'];

    if (empty($name) || empty($delivery_address) || empty($collPoint) || empty($comments)) {

        if (empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if (empty($delivery_address)) {
            echo "<font color='red'>Delivery Address field is empty.</font><br/>";
        }

        if (empty($collPoint)) {
            echo "<font color='red'>Collection Point field is empty.</font><br/>";
        }

        if (empty($comments)) {
            echo "<font color='red'>Comments field is empty.</font><br/>";
        }
 
        } else {

            $sql = "UPDATE orders SET name=:name, delivery_address=:delivery_address, collPoint=:collPoint, comments=:comments WHERE id=:id";

            $query = $db->prepare($sql);

            $query->bindParam(':id', $id);
            $query->bindParam(':name', $name);
            $query->bindParam(':delivery_address', $delivery_address);
            $query->bindParam(':collPoint', $collPoint);
            $query->bindParam(':comments', $comments);
            $query->execute();

            header('Location: ../index.php');

        }
    }



?>  

<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$sql = "SELECT * FROM orders WHERE id=:id";
$query = $db->prepare($sql);
$query->execute(array(':id' => $id));
 
while($row = $query->fetch(PDO::FETCH_ASSOC))
{
    $name = $row['name'];
    $delivery_address = $row['delivery_address'];
    $collPoint = $row['collPoint'];
    $comments = $row['comments'];
}
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Edit Order</title>
	<meta name="description" content="Transport Log System">
	<meta name="keywords" content="transport, WMS, logistic">
	<meta name="author" content="Tomasz Mlokosiewicz">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>
 
<body>
    <a href="../index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr> 
                <td>Delivery Address</td>
                <td><input type="text" name="delivery_address" value="<?php echo $delivery_address;?>"></td>
            </tr>
            <tr> 
                <td>Collection Point</td>
                <td><input type="text" name="collPoint" value="<?php echo $collPoint;?>"></td>
            </tr>
            <tr> 
                <td>Comments</td>
                <td><input type="text" name="comments" value="<?php echo $comments;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<!-- Edit do zrobienia od podstaw przy uzyciu PDO : http://blog.chapagain.com.np/php-mysql-simple-crud-add-edit-delete-view-using-pdo/ -->