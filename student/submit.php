<?php
	include '../conFunc.php';
?>
<?php
	$srcode = $_POST['sr_code'];
$con = mysqli_connect('localhost','root','','librarydb');
$student_query = "SELECT id FROM student_info WHERE sr_code='$srcode'";
$student_history_query = "INSERT INTO student_history (student_id,service_id,time_in,time_out) 
		values('$student_id', '$service_id', '$time_in', '$time_out')";

$student_result = mysqli_query($con, $student_query);
$history_result = mysqli_query($con, $student_history_query);

while($student_result){
	echo "result";
	}
?>