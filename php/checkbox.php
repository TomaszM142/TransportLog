<form action="" method="post">
<label>What Destination Would you Like to Go To?</label><br>
<input type="checkbox" name="Islands[]" value="Aruba- Aruba is a beatiful desert island">Aruba<br>
<input type="checkbox" name="Islands[]" value="Hawaii- Hawaii is a beautiful strand of islands located in the heart of the Pacific Ocean.">Hawaii<br>
<input type="checkbox" name="Islands[]" value="Jamaica- Jamaica is a beautiful island located in the Caribbean Sea">Jamaica<br>
<input type="submit" name="button" value="Submit"/></form>
</form>

<?php

$destinations= $_POST['Islands'];

if(isset($destinations)) {
echo 'You have chosen:' . '<br>' . '<br>';
foreach ($destinations as $key => $value)
{
echo $value . '<br>';
}
}
else 
{
echo "You haven't selected any destination";
}
?>