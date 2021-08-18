<?php



$mysqli = new mysqli('localhost','root','','myeventstrial') or die($mysqli_error($mysqli));

$id = 0;
$datepicker = '';
$eventname = '';
$eventremindervalue = '';
$eventreminder = '';


$update = false;




if (isset($_POST['savereminder'])){

	$datepicker = $_POST['datepicker'];
	$eventname = $_POST['eventname'];
	$eventremindervalue = $_POST['eventremindervalue'];
	$eventreminder = $_POST['eventreminder'];



	$mysqli->query("INSERT INTO myevent (datepicker,eventname,eventremindervalue,eventreminder) VALUES('$datepicker','$eventname','$eventremindervalue','$eventreminder')") or die($mysqli->error);

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "Success";

	header("location: myeventtrial.php");


}

if (isset($_GET['delete'])){
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM myevent WHERE id=$id") or die($mysqli->error);


	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: myeventtrial.php");
}

if (isset($_GET['edit'])){
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM myevent WHERE id=$id") or die($mysqli->error());
	
	//gives an error countable and uncountable looking for ajax command
	if ($result && $row = $result->fetch_array()){
		$datepicker = $row['datepicker'];
		$eventname = $row['eventname'];
		$eventremindervalue = $row['eventremindervalue'];
		$eventreminder = $row['eventreminder'];
		
	}	
		
	
}


if (isset($_POST['update'])){
	$id = $_POST['id'];
	$datepicker = $_POST['datepicker'];
		$eventname = $_POST['eventname'];
		$eventremindervalue = $_POST['eventremindervalue'];
		$eventreminder = $_POST['eventreminder'];

		$mysqli->query("UPDATE myevent SET datepicker='$datepicker', eventname='$eventname', eventremindervalue='$eventremindervalue', eventreminder='$eventreminder' WHERE id=$id") or die($mysqli->error);

		$_SESSION['message'] = "Your Reminder has been Updated";
		$_SESSION['msg_type'] = "Warning";

		header("location: myeventtrial.php");

}