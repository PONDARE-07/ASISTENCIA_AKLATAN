<?php
	include '../conFunc.php';
?>
<?php
	$srcode = $_POST['sr_code'];

$sql = "SELECT * FROM student_info WHERE sr_code='$srcode'";

if (mysqli_query($link, $sql)) {
  header("Location: studservices.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

?>