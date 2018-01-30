<?php
include('connect.php');
	$del =$_REQUEST['id'];

	mysql_query("DELETE FROM bill WHERE bill_id = '$del'")or die(mysql_error());  	
	
?>
<script>
alert('Deleted Successfuly');
window.location = "billed.php";
</script>