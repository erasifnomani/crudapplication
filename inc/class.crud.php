<?php
include_once 'dbconfig.php';

class CRUD
{
	public function __construct()
	{
		$db = new DB_con();
	}
	
	// function for create
	public function create($name,$country,$email,$mobile_no,$about_us,$dob)
	{
		mysql_query("INSERT INTO users(name,country,email,mobile_no,about_us,dob) VALUES('$name','$country','$email','$mobile_no','$about_us','$dob')");
	}
	// function for create
	
	// function for read
	public function read()
	{
		return mysql_query("SELECT * FROM users ORDER BY user_id ASC");
	}
	// function for read
	
	// function for delete
	public function delete($id)
	{
		mysql_query("DELETE FROM users WHERE user_id=".$id);
	}
	// function for delete
	
	// function for update
	public function update($name,$country,$email,$mobile_no,$about_us,$dob,$id)
	{
		mysql_query("UPDATE users SET name='$name', country='$country', email='$email', mobile_no='$mobile_no', about_us='$about_us', dob='$dob' WHERE user_id=".$id);
	}
	// function for update
}
?>