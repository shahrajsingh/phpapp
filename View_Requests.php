<?php
session_start();
?>
<?php include 'header_file.php'; ?>
<?php include 'Custom_Menu_file.php'; ?>
<?php include 'sidebar_file.php';  ?>
<?php
include 'Connect_to_Database.php';
$hospital_name = $_SESSION['hospital_name'];
$query1 = "SELECT req.request_id,req.user_email,sample.blood_group 
	   FROM view_requests as req , available_sample as sample 
	   WHERE req.request_id=sample.id AND sample.hospital_name='$hospital_name'";

?>
<div class="view-request">
	<p class="h2">Blood types Required from <?php echo $hospital_name; ?></p>




	<?php

	if ($stmt1 = mysqli_prepare($link, $query1)) {

		mysqli_stmt_execute($stmt1);

		mysqli_stmt_bind_result($stmt1, $request_id, $user_email, $blood_group);

	?>
		<table class="table table-striped table-dark">
			<thead>
				<tr>
					<th scope="col">Request Id</th>
					<th scope="col">Requesters email id</th>
					<th scope="col">Blood Type Requested</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$i = 1;
				while (mysqli_stmt_fetch($stmt1)) {
				?>

					<tr>
						<td><?php echo $request_id; ?></td>
						<td><?php echo $user_email; ?></td>
						<td><?php echo $blood_group; ?></td>
					</tr>

				<?php
					$i++;
				}
				?>
				<?php
				if ($i == 1) {
				?>
					<td colspan="4" style="text-align:center">
						<p class="h6">No Request</p>
					</td>
				<?php

				}
				?>
			</tbody>
		</table>
</div>
<?php
		mysqli_stmt_close($stmt1);
	} else {
		echo "error in view_requests";
		#header("refresh:2,url=index.php");
	}

?>

<?php include 'footer_file.php'; ?>