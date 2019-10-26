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
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>

<body>

    <div class="container">
            <div class="row">
                <aside class="col-md-2 wrapper bg-men">
                    <!-- Sidebar -->
                    <nav id="sidebar">
                        <div class="sidebar-header ml-3">
                            <h3>Transport Log</h3>
                        </div>
                
                        <ul class="list-unstyled">
                            <a href="index.html"><img src="img/logo.png"height="120" alt="Logo"></p>
                            <li class="active">
                                <a href="#submenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle menuText ml-3">Trasnport</a>
                                <ul class="collapse list-unstyled ml-3" id="submenu">
                                    <li>
                                        <a href="#" class="list-group-item list-group-item-dark list-group-item-action">Daily</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item list-group-item-dark list-group-item-action">Date</a>
                                    </li>
                                    <li>
                                        <a href="#" class="list-group-item list-group-item-dark list-group-item-action">Dispatched</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nav-link menuText ml-3">About</a>
                            </li>
                                                
                            <li>
                                <a href="#" class="nav-link menuText ml-3">Contact</a>
                            </li>
                        </ul>
                    </nav>
                
                </aside>
        
            
        
    

                

                        <aside class="col-md-10 content">

                                              
                                <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="Buttons group">
                                          <button type="button" class="btn btn-secondary" onClick="window.open('form2.html','form')">Add</br>Item</button>
                                          <button type="button" class="btn btn-secondary">Edit</br>Item</button>
                                          <button type="button" class="btn btn-secondary">3</button>
                                          <button type="button" class="btn btn-secondary">4</button>
                                        </div>
                                       
                            
                        </div>

                                <!-- Wyswitlanie zamowienia -->
                                <ul>
<?php include('connect.php');

$conn = new mysqli ($host, $username, $password, $dbName);

if ($conn->connect_error) {
    die("connection failed: ".$conn->connect_error);
}

$sql = "SELECT * FROM orders ORDER BY id"; 
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "id: ".$row["id"]." - Name: ".$row["name"];
}

   ?> 
</ul>



                        </aside>
               

       
        </div>
    </div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>