<?php
	require_once 'connect.php';
	$conn->query("DELETE FROM `stdinfo` WHERE `stu_id` = '$_REQUEST[stu_id]'") or die(mysqli_error());
	header('location:student.php');