<?php
session_start();

if (isset($_REQUEST['add_info_submit'])) {
	$new_info = $_POST['add_info'];
	$quantity = $_POST['quantity'];
	if ($new_info === " ") {
		echo "<script type='text/javascript'>alert('No Blood type selected!')</script>";
		header("refresh:0.5; url=index.php");
	} else {
		$hospital_name = $_SESSION['hospital_name'];

		include 'Connect_to_Database.php';

		$query = " ";
		$flag = 0;

		$query = "SELECT blood_group FROM available_sample WHERE hospital_name='$hospital_name'";

		if ($stmt = mysqli_prepare($link, $query)) {
			mysqli_stmt_execute($stmt);
			mysqli_stmt_bind_result($stmt, $blood_group);
			while (mysqli_stmt_fetch($stmt)) {
				if ($new_info == $blood_group) {
					$flag = 1;
				}
			}
			mysqli_stmt_close($stmt);
		}
		if ($flag == 1) {
			$sql = "UPDATE `available_sample` SET units_available = units_available + '$quantity' WHERE blood_group = '$new_info' AND hospital_name = '$hospital_name'";
			if ($stmtx = mysqli_prepare($link, $sql)) {
				if (mysqli_stmt_execute($stmtx)) {
					echo "<script type='text/javascript'>alert('Updated')</script>";
					header("refresh:0; url=index.php");
				} else {
					echo "<script type='text/javascript'>alert('Already in the database!')</script>";
					header("refresh:0; url=index.php");
				}
			} else {
				echo "<script type='text/javascript'>alert('stmt error')</script>";
				header("refresh:0; url=index.php");
			}
		}
		if ($flag == 0) {
			$query1 = "INSERT into available_sample (blood_group,hospital_name,units_available) values('$new_info','$hospital_name','$quantity')";
			if ($stmt1 = mysqli_prepare($link, $query1)) {
				if (mysqli_stmt_execute($stmt1)) {
					echo "<script type='text/javascript'>alert('New Sample Added!!')</script>";
					header("refresh:0; url=index.php");
				} else {
					echo "<script type='text/javascript'>alert('Error Occurred while adding')</script>";
					header("refresh:0; url=index.php");
				}
			} else {
				echo "<script type='text/javascript'>alert('error occurred while creating query')</script>";
				header("refresh:0; url=index.php");
			}
		}
	}
}
