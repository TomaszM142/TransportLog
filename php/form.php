

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>ADD ITEM</title>
	<meta name="description" content="Transport Log System">
	<meta name="keywords" content="transport, WMS, logistic">
	<meta name="author" content="Tomasz Mlokosiewicz">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../view.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 	<link rel="stylesheet" href="/resources/demos/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	


	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script type="text/javascript" src="../js/datepicker/build/SalsaCalendar.min.js"></script>
	<script type="text/javascript" src="../calendar.js"></script>
	<![endif]-->



</head>
	<body>
		
			<form enctype="multipart/form-data" class="form-horizontal" action="add.php" method="POST">
					<fieldset>
					
					<!-- Form Name -->
					<legend>Add Item</legend>
					
					<!-- Name-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Customer Name</label>  
					  <div class="col-md-4">
					  <input id="textinput" name="name" type="text" placeholder="Name..." class="form-control input-md" required="">
						
					  </div>
					</div>
					
					<!-- delivery address-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="textinput">Delivery Address</label>  
					  <div class="col-md-4">
					  <input id="textinput" name="delivery_address" type="text" placeholder="Address..." class="form-control input-md" required="">
						
					  </div>
					</div>
	
					<!-- Coll Point -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="selectbasic">Collection Point</label>
					  <div class="col-md-4">
						<select id="selectbasic" name="collPoint" class="form-control">
						  <option value="WH1">WH1</option>
						  <option value="WH2">WH2</option>
						</select>
					  </div>
					</div>
					
					<!-- Picked -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="radios">Picked?</label>
					  <div class="col-md-4">
					  <div class="radio">
						<label for="picked">						  
						  <input type="radio" name="picked" value="YES">
						  YES
						</label>
						</div>
						<div class="radio">
						<label for="picked">
						  <input type="radio" name="picked" value="NO" checked="checked">
						  NO
						</label>
						</div>
					   </div>
					</div>

					<!-- Despatched -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="radio">Despatched?</label>
					  <div class="col-md-4">
					  <div class="radio">
						<label for="despatched" default="NO">						  
						  <input type="radio" name="despatched" value="YES">
						  YES
						</label>
						</div>
						<div class="radio">
						<label for="despatched">
						  <input type="radio" name="despatched" value="NO" checked="checked">
						  NO
						</label>
						</div>
					   </div>
					</div>

					<!-- Collection date -->
					<div class="form-group">
					<label class="col-md-4 control-label" for="collDate">Collection date </label>
						<div class="col-md-4">
							<input type="text" required="" id="collDate" name="collDate" autocomplete="off" onchange="console.log(d.getDate())">
							<script>
							$( function() {
								$( "#collDate" ).datepicker({ dateFormat: "dd/mm/yy" }).val();
								$( "#format" ).on( "change", function() {
								$( "#collDate" ).datepicker( "option", "dateFormat", $( this ).val() );
								});
							} );
						
							</script>
						</div>
					</div>

					
					<!-- Delivery date -->
					<div class="form-group">
					<label class="col-md-4 control-label" for="delDate">Delivery date </label>
						<div class="col-md-4">
							<input type="text" required="" id="delDate" name="delDate" autocomplete="off" onchange="console.log(d.getDate())">
							<script>
							$( function() {
								$( "#delDate" ).datepicker({ dateFormat: "dd/mm/yy" }).val();
								$( "#format" ).on( "change", function() {
								$( "#delDate" ).datepicker( "option", "dateFormat", $( this ).val() );
								});
							} );
							</script>
						</div>
					</div>
								
					
					<!-- Comments -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="comments">Comments</label>
					  <div class="col-md-4">                     
						<textarea class="form-control" id="comments" name="comments" placeholder="Your comments...."></textarea>
					  </div>
					</div>
					
					<!-- Button -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="Submit"></label>
					  <div class="col-md-4">
						<button id="Submit" name="Submit" class="btn btn-primary">Submit</button>
					  </div>
					</div>
					
					</fieldset>
					</form>
					

	</body>
	

</html>