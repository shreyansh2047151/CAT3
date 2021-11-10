<?php
	require_once 'connect.php';
	$sid = $_POST['std-id'];
	$sname = $_POST['std-name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$course = $_POST['course'];
  $addr = $_POST['address'];
	$q_checkadmin = $conn->query("SELECT * FROM `stdinfo` WHERE `st-id` = '$sid'") or die(mysqli_error());
		$v_checkadmin = $q_checkadmin->num_rows;
		if($v_checkadmin == 1){
			echo '
				<script type = "text/javascript">
					alert("student id already taken");
					window.location = "admin.php";
				</script>
			';
		}else{
			$conn->query("UPDATE `admin` SET `std-id` = '$sid', `std-name` = '$sname', `age` = '$age', `gender` = '$gender', `course` = '$course', `address` = '$addr' WHERE `admin_id` = '$_REQUEST[admin_id]'") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Successfully Edited");
					window.location = "admin.php";
				</script>
			';
		}	