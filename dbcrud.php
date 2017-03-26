<?php
include_once 'inc/class.crud.php';
$crud = new CRUD();
if(isset($_POST['save']))
{
	$name = strip_tags($_POST['name']);
	$country = strip_tags($_POST['country']);
	$email = strip_tags($_POST['email']);
	$mobile_no = strip_tags($_POST['mobile_no']);
	$about_us = mysql_real_escape_string($_POST['about_us']);
	$dob = date("Y-m-d", strtotime($_POST['dob']));

	
	// insert
    $crud->create($name,$country,$email,$mobile_no,$about_us,$dob);
    // insert
  
	header("Location: index.php");
}


if(isset($_GET['del_id']))
{
	$id = $_GET['del_id'];
	$crud->delete($id);
	header("Location: index.php");
}

if(isset($_POST['update']))
{	
	$id = strip_tags($_GET['edt_id']);
	$name = strip_tags($_POST['name']);
	$country = strip_tags($_POST['country']);
	$email = strip_tags($_POST['email']);
	$mobile_no = strip_tags($_POST['mobile_no']);
	$about_us = mysql_real_escape_string($_POST['about_us']);
	$dob = date("Y-m-d", strtotime($_POST['dob']));
	
	$crud->update($name,$country,$email,$mobile_no,$about_us,$dob,$id);
	header("Location: index.php");
}
?>