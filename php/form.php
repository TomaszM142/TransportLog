

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
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	<script type="text/javascript" src="view.js"></script>
	<script type="text/javascript" src="calendar.js"></script>

	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
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

					<!-- Delivery Date 
					<li id="li_4" >
							<label class="description" for="delivery_date">Delivery Date </label>
							<span>
								<input id="delivery_date_1" name="delivery_date_1" class="element text" size="2" maxlength="2" value="" type="text"> /
								<label for="delivery_date_1">MM</label>
							</span>
							<span>
								<input id="delivery_date_2" name="delivery_date_2" class="element text" size="2" maxlength="2" value="" type="text"> /
								<label for="delivery_date_2">DD</label>
							</span>
							<span>
								 <input id="delivery_date_3" name="delivery_date_3" class="element text" size="4" maxlength="4" value="" type="text">
								<label for="delivery_date_3">YYYY</label>
							</span>
						
							<span id="delivery_date">
								<img id="cal_img_4" class="datepicker" src="calendar.gif" alt="Pick a date.">	
							</span>
							<script type="text/javascript">
								Calendar.setup({
								inputField	 : "element_4_3",
								baseField    : "element_4",
								displayArea  : "calendar_4",
								button		 : "cal_img_4",
								ifFormat	 : "%B %e, %Y",
								onSelect	 : selectDate
								});
							</script>
							 
							</li>

							-->

							<!-- delivery time

							<li id="dell_time" >
									<label class="description" for="dellT_1">Delivery time </label>
									<span>
										<input id="dellT_1_1" name="dellT_1_1" class="element text " size="2" type="text" maxlength="2" value=""/> : 
										<label>HH</label>
									</span>
									<span>
										<input id="dellT_1_2" name="dellT_1_2" class="element text " size="2" type="text" maxlength="2" value=""/> : 
										<label>MM</label>
									</span>
									<span>
										<input id="dellT_1_3" name="dellT_1_3" class="element text " size="2" type="text" maxlength="2" value=""/>
										<label>SS</label>
									</span>
									<span>
										<select class="element select" style="width:4em" id="collT_1_4" name="collT_1_4">
											<option value="AM" >AM</option>
											<option value="PM" >PM</option>
										</select>
										<label>AM/PM</label>
									</span> 
									</li>
					 -->
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
					
					<!-- Status 
					<div class="form-group">
					  <label class="col-md-4 control-label" for="checkboxes">Status</label>
					  <div class="col-md-4">
					  <div class="checkbox">
						<label for="checkboxes-0">
						  <input type="checkbox" name="status-0" id="status-0" value="1">
						  Picked
						</label>
						</div>
					  <div class="checkbox">
						<label for="checkboxes-1">
						  <input type="checkbox" name="status-1" id="status-1" value="2">
						  Dispatched
						</label>
						</div>
					  </div>
					</div>
					-->

					<!-- Delivery date 
					<li id="coll" >
							<label class="description" for="coll_1">Collection Date </label>
							<span>
								<input id="coll_1" name="coll_1_1" class="element text" size="2" maxlength="2" value="" type="text"> /
								<label for="coll_1">MM</label>
							</span>
							<span>
								<input id="coll_1_2" name="coll_1_2" class="element text" size="2" maxlength="2" value="" type="text"> /
								<label for="coll_1_2">DD</label>
							</span>
							<span>
								 <input id="coll_1_3" name="coll_1_3" class="element text" size="4" maxlength="4" value="" type="text">
								<label for="coll_1_3">YYYY</label>
							</span>
						
							<span id="coll_cal_1">
								<img id="cal_img_4" class="datepicker" src="calendar.gif" alt="Pick a date.">	
							</span>
							<script type="text/javascript">
								Calendar.setup({
								inputField	 : "coll_1_3",
								baseField    : "coll_1",
								displayArea  : "coll_1",
								button		 : "cal_img_4",
								ifFormat	 : "%B %e, %Y",
								onSelect	 : selectDate
								});
							</script>
							 
							</li>
							-->
							
							<!-- Delivery Time 		
							<li id="delTime" >
							<label class="description" for="colTime">Collection time </label>
							<span>
								<input id="element" name="colTime_1" class="element text " size="2" type="text" maxlength="2" value=""/> : 
								<label>HH</label>
							</span>
							<span>
								<input id="element" name="colTime_2" class="element text " size="2" type="text" maxlength="2" value=""/> : 
								<label>MM</label>
							</span>
							<span>
								<input id="element" name="colTime_3" class="element text " size="2" type="text" maxlength="2" value=""/>
								<label>SS</label>
							</span>
							<span>
								<select class="element select" style="width:4em" id="element_1" name="Collampm">
									<option value="AM" >AM</option>
									<option value="PM" >PM</option>
								</select>
								<label>AM/PM</label>
							</span> 
							</li>
								-->		
					
					<!-- Comments -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for=comments>Comments</label>
					  <div class="col-md-4">                     
						<textarea class="form-control" id="comments" name="comments">Your comments....</textarea>
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