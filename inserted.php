<?php
$con = mysqli_connect('localhost','root','','librarydb');
$row = 1;
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if(isset($_POST["submit_file"]))
{
$file = $_FILES["file"]["tmp_name"];
if (($handle = fopen($file, "r")) !== FALSE) {
    fgetcsv($handle);
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
  $srcode = $data[0];
  $firstname = $data[1];
  $lastname = $data[2];
  $department = $data[3];
  $program = $data[4];
  $section = $data[5];
  $insert=mysqli_query($con,"INSERT INTO `student_info`(`sr-code`, `firstname`, `lastname`, `department`, `program`,`section`) VALUES ('$srcode','$firstname','$lastname','$department','$program','$section')");
 if($insert) {
echo '<script> alert("inserted")</script>';
}
else{
echo "not inserted ";
}
}
fclose($handle);
}
}
?>