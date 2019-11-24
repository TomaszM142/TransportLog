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
     
    <link href="../css/fontello.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">    
    <link rel="stylesheet" href="../css/transitions.css">
	<link rel="stylesheet" href="../default.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">    
    <link href="../css/content.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    

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
                                <a href="about.php" class="nav-link menuText ml-3">About</a>
                            </li>
                                                
                            <li>
                                <a href="contact.php" class="nav-link menuText ml-3">Contact</a>
                            </li>
                        </ul>
                    </nav>
                
                </aside>
 
                <!-- Contact details -->
                <aside class="col-md-10 content">
                    
                <section id="contact" class="col align-items-center justify-content-center col-md-12 ">

                    <h2>CONTACT ME</h2>
                    <h6>Get in touch with me</h6>                    
                    <!-- Social media icons -->
                    <div class="about row align-items-center justify-content-center col-md-12">

                        <div class="transition gplus col-1"><a href="mailto:t.mlokosiewicz.com">
                            <img src="../img/google.png"></i></a>
                        </div>
                        <div class="transition github col-1"><a href="https://github.com/TomaszM142" target="_blank">
                            <img src="../img/github.png"></i></a>
                        </div>
                        <div class="transition about-noborder linkedin col-1"><a href="https://www.linkedin.com/in/tomasz-mlokosiewicz-46758814a" target="_blank">
                            <img src="../img/linkedin.png"></i></a>
                        </div>
                    </div>
                    
                    <h2 class="about-noborder">Or fill out the following form:</h2>
                  
                </section>
                    <!-- Contact form -->
                    <section style="margin: 0px" class="row align-items-center justify-content-center col-md-12">
                    <form class="form-group col-md-6" action="mail.php" method="POST">
                        <div class="form-group">
                        <label class="col control-label" for="name">Name</label>
                        <div class="col">                     
                            <input class="form-control" name="name" placeholder="Your name..."></input>
                        </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col control-label" for="email">E-mail</label>
                            <div class="col">
                                <input class="form-control" name="email" placeholder="Your e-mail..."></input>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col control-label" for="message">Message</label>
                            <div class="col">
                                <textarea class="form-control" name="message" placeholder="Write a message..."></textarea>
                            </div>
                        </div>
                        
                        <!-- Submit -->
                        <div class="form-group">
                        <label class="col control-label" for="Submit"></label>
                        <div class="col">
                        <input type="submit" name="send" value="Send">
                        </div>
                        </div>
                    </form>
                    </section>
                                        
                              
                </aside>
               

       
        </div>
    </div>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
    <script src="../js/bootstrap.min.js"></script>

   
	
</body>
</html>
