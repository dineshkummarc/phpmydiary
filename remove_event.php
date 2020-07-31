<?php include('admin/dbcon.php'); ?>
<?php
$id = $_POST['id'];
$delete = mysqli_query($GLOBALS["___mysqli_ston"], "delete from event where event_id = '$id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
if($delete){
	echo "done";
}else{
	echo "error";
}
?>

