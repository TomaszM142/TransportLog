<?php

session_start();

?>

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

    <div class="container w-auto p-3" style="max-width:1400px;">
            <div class="row">
                <aside class="col-md-2 wrapper bg-men">
                    <!-- Sidebar -->
                    <nav id="sidebar">
                        <div class="sidebar-header ml-3">
                            <h3>Transport Log</h3>
                        </div>
                
                        <ul class="list-unstyled">
                            <a href="../index.php"><img src="../img/logo.png"height="120" alt="Logo"></p>
                            <li class="active">
                                <a href="#submenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle menuText ml-3">Transport</a>
                                <ul class="collapse list-unstyled ml-3" id="submenu">
                                    <li>
                                        <a href="../index.php" class="list-group-item list-group-item-dark list-group-item-action">Daily</a>
                                    </li>
                                    <li>
                                        <a href="bydate.php" class="list-group-item list-group-item-dark list-group-item-action">Date</a>
                                    </li>
                                    <li>
                                        <a href="history.php" class="list-group-item list-group-item-dark list-group-item-action">Dispatched</a>
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
                                          <button type="button" class="btn btn-dark" onClick="window.open('php/form.php','form')">Add</br>Item</button>
                                          
                                        </div>
                                       
                            
                                </div>

                                <!-- Wyswitlanie zamowienia -->
                                <div class="table-responsive">
                                
<table class="table h-auto" id="tablefilter" name="tablefilter">
    <thead>
      <tr>        
        
        <th scope="col">Name</th>
        <th scope="col">Delivery Address</th>
        <th scope="col">Collection Point</th>
        <th scope="col">Picked</th>
        <th scope="col">Despatched</th>
        <th scope="col">Collection Date</th>
        <th scope="col">Delivery Date</th>
        <th scope="col">Comments</th>
        <th scope="col">Options</th>
        </tr>
    </thead>
    <?php   
        require_once 'database.php';


        $ordersQuery = $db->query('SELECT * FROM orders');
        $orders = $ordersQuery->fetchAll();

                               
              
    echo '<tbody>';
    

    foreach ($orders as $order) {
        echo "<tr><td>{$order['name']}</td><td>{$order['delivery_address']}</td><td>{$order['collPoint']}</td><td>{$order['picked']}</td><td>{$order['despatched']}</td><td>{$order['collDate']}</td><td>{$order['delDate']}</td><td>{$order['comments']}</td><td><a style='height: 100%; margin: 2px; padding:0; font-size: 14px; ' class='btn btn-dark' href='php/edit.php?id=".$order['id']."'>Edit</a><br/><a style='height: 100%; margin: 2px; padding:0; font-size: 14px; ' class='btn btn-dark' href='php/delete.php?id=".$order['id']."'>Delete</a></td></tr>";
        
    }
      
    echo '</tbody>';
  
 ?>

  </table>
 
</div>
                        </aside>
               

       
        </div>
    </div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
    <script src="../js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="../js/tablefilter.js"></script>
    <script>
        jQuery('#tablefilter').ddTableFilter();
    </script>
    
	
</body>
</html>