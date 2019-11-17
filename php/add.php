<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Transport Log</title>
	<meta name="description" content="Transport Log System">
	<meta name="keywords" content="transport, WMS, logistic">
	<meta name="author" content="Tomasz Mlokosiewicz">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>

<body>

<?php

session_start();

require_once 'form.php';
// odbieramy dane z formularza


if (isset($_POST['name'])) {

    $name = filter_input(INPUT_POST, 'name');
    $delivery_address = filter_input(INPUT_POST, 'delivery_address');
    $collPoint = filter_input(INPUT_POST, 'collPoint');
    $picked = filter_input(INPUT_POST, 'picked');
    $despatched = filter_input(INPUT_POST, 'despatched');
    $collDate = filter_input(INPUT_POST, 'collDate');   
    $delDate = filter_input(INPUT_POST, 'delDate');
    $comments = filter_input(INPUT_POST, 'comments');
    

    if (empty($name)) {

        header('Location: add.php');
        
    } else {

        require_once 'database.php';

        $query = $db->prepare('INSERT INTO orders VALUES (NULL, :name, :delivery_address, :collPoint, :picked, :despatched, :collDate, :delDate, :comments)');
        $query->bindValue(':name', $name, PDO::PARAM_STR);
        $query->bindValue(':delivery_address', $delivery_address, PDO::PARAM_STR);
        $query->bindValue(':collPoint', $collPoint, PDO::PARAM_STR);
        $query->bindValue(':picked', $picked, PDO::PARAM_STR);
        $query->bindValue(':despatched', $despatched, PDO::PARAM_STR);
        $query->bindValue(':collDate', $collDate, PDO::PARAM_STR);
        $query->bindValue(':delDate', $delDate, PDO::PARAM_STR);
        $query->bindValue(':comments', $comments, PDO::PARAM_STR);
        $query->execute();

    }


} else {

    header('Location: add.php');
    exit();
}
?>




    <div class="container">

        <header>
            <h1>Success!</h1>
        </header>

        <main>
            <article>
                <p>Order has been added.</p>
                <a href="../index.php">Back to main page</a>
            </article>
        </main>

    </div>

</body>
</html>