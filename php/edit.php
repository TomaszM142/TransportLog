<?php

include_once('database.php');

if (isset ($_POST['update'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $delivery_address = $_POST['delivery_address'];
    $collPoint = $_POST['collPoint'];
    $picked = $_POST['picked'];
    $despatched = $_POST['despatched'];
    $collDate = $_POST['collDate'];
    $delDate = $_POST['delDate'];
    $comments = $_POST['comments'];

    if (empty($name) || empty($delivery_address) || empty($collPoint) || empty($picked) || empty($despatched) || empty($collDate) || empty($delDate) || empty($comments)) {

        if (empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if (empty($delivery_address)) {
            echo "<font color='red'>Delivery Address field is empty.</font><br/>";
        }

        if (empty($collPoint)) {
            echo "<font color='red'>Collection Point field is empty.</font><br/>";
        }

        if (empty($picked)) {
            echo "<font color='red'>Picked field is empty.</font><br/>";
        }

        if (empty($despatched)) {
            echo "<font color='red'>Despatched field is empty.</font><br/>";
        }

        if (empty($collDate)) {
            echo "<font color='red'>Collection date field is empty.</font><br/>";
        }

        if (empty($delDate)) {
            echo "<font color='red'>Delivery date field is empty.</font><br/>";
        }

        if (empty($comments)) {
            echo "<font color='red'>Comments field is empty.</font><br/>";
        }
 
        } else {

            $sql = "UPDATE orders SET name=:name, delivery_address=:delivery_address, collPoint=:collPoint, picked=:picked, despatched=:despatched, collDate=:collDate, delDate=:delDate, comments=:comments WHERE id=:id";

            $query = $db->prepare($sql);

            $query->bindParam(':id', $id);
            $query->bindParam(':name', $name);
            $query->bindParam(':delivery_address', $delivery_address);
            $query->bindParam(':collPoint', $collPoint);
            $query->bindParam(':picked', $picked);
            $query->bindParam('despatched', $despatched);
            $query->bindParam('collDate', $collDate);
            $query->bindParam('delDate', $delDate);
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
    $picked = $row['picked'];
    $despatched = $row['despatched'];
    $collDate = $row['collDate'];
    $delDate = $row['delDate'];
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
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 	<link rel="stylesheet" href="/resources/demos/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->
	
</head>
 
<body>
    <a href="../index.php">Home</a>
    <br/><br/>
    <div class="container col-md-6 content">
    <form enctype="multipart/form-data" class="form-horizontal " name="Edit" method="post" action="edit.php">        
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Customer Name</label>  
                <div class="col-md-4">
                    <input class="form-control" type="text" name="name" value="<?php echo $name;?>"></td>
                </div>
        </div>
        <div class="form-group">
			<label class="col-md-4 control-label" for="textinput">Delivery Address</label>  
				<div class="col-md-4">
                    <input class="form-control" type="text" name="delivery_address" value="<?php echo $delivery_address;?>"></td>
                </div>
		</div>         
 

        <div class="form-group">
			<label class="col-md-4 control-label" for="selectbasic">Collection Point</label>
				<div class="col-md-4">
					<select id="selectbasic" name="collPoint" class="form-control" value="<?php echo $collPoint;?>">
						<option value="WH1" <?php if ($collPoint=="WH1") { echo 'selected="selected"';}?>>WH1</option>
						<option value="WH2" <?php if ($collPoint=="WH2") { echo 'selected="selected"';}?>>WH2</option>
					</select>
				</div>
		</div>

        <div class="form-group">
			<label class="col-md-4 control-label" for="textinput">Picked?</label>  
            <div class="radio">
				<label for="picked">						  
					<input type="radio" name="picked" value="YES" <?php if ($picked=="YES") { echo 'checked="checked"';}?>>
						YES
				</label>
			</div>
			<div class="radio">
				<label for="picked">
					<input type="radio" name="picked" value="NO" <?php if ($picked=="NO") { echo 'checked="checked"';}?>>
						NO
				</label>
			</div>
        </div>

        <div class="form-group">
			<label class="col-md-4 control-label" for="textinput">Despatched?</label>  
            <div class="radio">
				<label for="despatched">						  
					<input type="radio" name="despatched" value="YES" <?php if ($despatched=="YES") { echo 'checked="checked"';}?>>
						YES
				</label>
			</div>
			<div class="radio">
				<label for="despatched">
					<input type="radio" name="despatched" value="NO" <?php if ($despatched=="NO") { echo 'checked="checked"';}?>>
						NO
				</label>
			</div>
        </div>

        <div class="form-group">
			<label class="col-md-4 control-label" for="collDate">Collection date</label>  
				<div class="col-md-4">                  
                    <input class="form-control" type="text" value="<?php echo $collDate;?>" required="" id="collDate" name="collDate" autocomplete="off" onchange="console.log(d.getDate())">
						<script>
							$( function() {
								$( "#collDate" ).datepicker();
								$( "#format" ).on( "change", function() {
								$( "#collDate" ).datepicker( "option", "dateFormat", $( this ).val() );
								});
							} );
						
						</script>
                </div>
        </div>

        <div class="form-group">
			<label class="col-md-4 control-label" for="delDate">Delivery date</label>  
				<div class="col-md-4">                  
                    <input class="form-control" type="text" value="<?php echo $delDate;?>" required="" id="delDate" name="delDate" autocomplete="off" onchange="console.log(d.getDate())">
						<script>
							$( function() {
								$( "#delDate" ).datepicker();
								$( "#format" ).on( "change", function() {
								$( "#delDate" ).datepicker( "option", "dateFormat", $( this ).val() );
								});
							} );
						
						</script>
                </div>
        </div>
        
        <div class="form-group">
			<label class="col-md-4 control-label" for="textinput">Comments</label>  
				<div class="col-md-4">
                    <input class="form-control" type="text" name="comments" value="<?php echo $comments;?>"></td>
                </div>
        </div>
                  
            <div class="col-md-4 control-label">
                <td><input class="form-control btn btn-primary" type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td class="col-md-2"><input type="submit" name="update" value="Update"></td>
            </div>
       
    </form>
</div>
</body>
</html>

<!-- poprawic wyglad - pobawic sie bootstrapem -->