<?php

ini_set ('display_errors', 1);
error_reporting (E_ALL & ~E_NOTICE);

$dbc=mysqli_connect('localhost', 'root', '');

mysqli_query($dbc,'CREATE DATABASE task1;');
mysqli_select_db($dbc, 'task1');

$query = 'CREATE TABLE IF NOT EXISTS Motor(ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, motor1 INT, motor2 INT , motor3 INT , motor4 INT , motor5 INT , motor6 INT );';
mysqli_query($dbc, $query);

	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$n3 = $_POST['n3'];
	$n4 = $_POST['n4'];
	$n5 = $_POST['n5'];
	$n6 = $_POST['n6'];
	
	if (isset($_POST['save'])) {
		$query = "INSERT INTO Motor(motor1, motor2, motor3, motor4,motor5,motor6) VALUES ('$n1','$n2','$n3','$n4','$n5','$n6');";
		if (mysqli_query($dbc, $query)) {
			echo "Updated";
		} else {
			echo "<br>" . mysqli_error($dbc);
		}
		header('location: index.html');
	}
	
	//mysqli_close($dbc);

/////////////////////////////////////////
$query1 = 'CREATE TABLE IF NOT EXISTS Motor_on(ID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,M_on VARCHAR(10));';
mysqli_query($dbc, $query1);

      if (isset($_POST['on'])) {

		$query = "INSERT INTO Motor_on(M_on) VALUES ('on');";
		if (mysqli_query($dbc, $query)) {
			echo "Updated";
		} else {
			echo "<br>" . mysqli_error($dbc);
		}
		header('location: index.html');
	}
	mysqli_close($dbc);



?>