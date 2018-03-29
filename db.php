<?php
$hostname = "sql1.njit.edu";
$username = "iac7";
$password = "curtsey94";
$conn = NULL;

try 
{
    $conn = new PDO("mysql:host=$hostname;dbname=iac7",
    $username, $password);
    echo "Connection Successful";
}
catch(PDOException $e)
{
	// echo "Connection failed: " . $e->getMessage();
	http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
}
// Runs SQL query and returns results (if valid)
function runQuery($query) {
	global $conn;
    try {
		$q = $conn->prepare($query);
		$q->execute();
		$results = $q->fetchAll();
		$q->closeCursor();
		return $results;	
	} catch (PDOException $e) {
		http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
	}	  
}
function http_error($message) 
{
	header("Content-type: text/plain");
	die($message);
}


$firstname=$_POST['reg_fname'];
$lastname=$_POST['reg_lname'];
$email=$_POST['reg_email'];
$password=$_POST['reg_pass'];
$phone=$_POST['reg_phone'];
$email=$_POST['reg_bday'];
$birthday=$_POST['reg_bday'];
$gender=$_POST['gender'];

$sql= 'SELECT * FROM accounts WHERE email= "'.$email.'"';
$sqlresult = mysql_query($sql);

if (count ($sqlresult) = 1) {
	 
	 header ("500 Internal Server Error")
	http_error("500 Internal Server Error\n\n"."The email already exists:\n\n" . $e->getMessage());


}
		else 
		{


		$sql = "insert into accounts (email, fname, lname,phone, birthday,
		gender, password) values ('$email','$firstname', '$lastname','$phone','$birthday','$gender','$password')";
		$results = runQuery($sql);
		header("Location: signup.php");
		
		}
	
?>