<?php

session_start();

include("includes/conFunc.php");

$_SESSION['username']=="";

date_default_timezone_set('Asia/Kolkata');

$ldate=date( 'd-m-Y h:i:s A', time () );


session_unset();

$_SESSION['errmsg']="You have successfully logout";

?>

<script language="javascript">

document.location="adminlogin.php";

</script>

