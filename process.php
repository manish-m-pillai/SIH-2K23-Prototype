<?php
include_one 'database.php';
if(isset($_POST['save']))
{
	$CASE ID = $_POST['CASE ID'];
	$CASE CATEGORY = $_POST['CASE CATEGORY'];
	$SUB CATEGORY = $_POST['SUB CATEGORY'];
	//$DATE = $_POST['POST'];

	$sql = "INSERT INTO cases(CASE ID, CASE CATEGORY, SUB CATEGORY)
VALUES ('$CASE ID','$CASE CATEGORY','$SUB CATEGORY')";

if (mysqli_query($conn, $sql)){
	echo "New record uploded successfully !";
}else{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>