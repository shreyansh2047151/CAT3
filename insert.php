<?php
	require_once 'connect.php';
	$sid = $_POST['std-id'];
	$sname = $_POST['std-name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$course = $_POST['course'];
  	$addr = $_POST['address'];

	$conn->query("INSERT INTO `stdinfo` VALUES('$sid', '$sanme', '$age', '$gender', '$course', '$addr')") or die(mysqli_error());
		echo '
			<script type = "text/javascript">
				alert("Saved Record");
				window.location = "admin.php";
			</script>
		';
		}