<?php
	include 'conFunc.php';
?>
<?php
	$visitors_name = $_POST['visits'];
	$purpose = $_POST['purpose'];
	

$sql = "insert into visitors(visitors_name,purpose,date_entered) 
		values('$visitors_name','$purpose',NOW())";

if (mysqli_query($link, $sql)) {
  echo '<script> alert("Succesfully registered")</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

?>   
