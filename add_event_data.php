<?php
 include('admin/dbcon.php');
 include('session.php');
$id = $session_id;
if (isset($_POST['add'])){
	$date_start = $_POST['date_start'];
	$date_end = $_POST['date_end'];
	$title = $_POST['title'];
	$note = mysqli_real_escape_string($GLOBALS["___mysqli_ston"], $_POST['note']);
	$venue = $_POST['venue'];
	$note .="<br>VENUE:: ".$venue;
	$query = mysqli_query($GLOBALS["___mysqli_ston"], "insert into event (user_id,event_title,note,date_start,date_end) values($id,'$title','$note','$date_start','$date_end')")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
	?>
	<script>
	window.location = "add-events.php";
	</script>
<?php
}
?>
