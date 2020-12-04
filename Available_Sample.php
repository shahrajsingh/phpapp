<?php
session_start();

include 'Connect_to_Database.php';

$query = " ";
$hospital_name = " ";
$available_units = " ";
if ($_SESSION['userrole'] === "RECEIVER") {
  $query = "SELECT * FROM available_sample";
}

if ($_SESSION['userrole'] === "HOSPITAL") {
  $hospital_name = $_SESSION['hospital_name'];
  $query = "SELECT * FROM available_sample WHERE hospital_name='$hospital_name'";
} else {
  $query = "SELECT * FROM available_sample";
}



?>

<?php include 'header_file.php'; ?>
<?php include 'Custom_Menu_File.php'; ?>
<?php include 'sidebar_file.php';  ?>

<?php
if ($stmt = mysqli_prepare($link, $query)) {
  /* execute statement */
  mysqli_stmt_execute($stmt);
  /* bind result variables */
  mysqli_stmt_bind_result($stmt, $id, $blood_group, $hospital_name, $available_units);
  /* fetch values */
?>

  <div class="available-sample">
    <?php
    if ($_SESSION['userrole'] === " ") {
    ?>
      <p class="h3" style="text-align:center"><strong style="color:red;">Attention!!</strong> You are Not Logged In</p>
    <?php
    }
    ?>
    <p class="h2">Available Samples</p>
    <form>

      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col" class="h5">#</th>
            <th scope="col" class="h5">Blood Group</th>
            <th scope="col" class="h5">Hospital Name</th>
            <th scope="col" class="h5">Units Available</th>
            <?php
            if ($_SESSION['userrole'] === "HOSPITAL") {
            ?>
            <?php
            } else {
            ?>
              <th scope="col" class="h5">Request</th>
            <?php
            }
            ?>
          </tr>
        </thead>

        <tbody>
          <?php
          $i = 1;
          while (mysqli_stmt_fetch($stmt)) {
          ?>
            <tr>
              <td><?php echo $i;  ?></td>
              <td><?php echo $blood_group;  ?></td>
              <td><?php echo $hospital_name;  ?></td>
              <td><?php echo $available_units;  ?></td>
              <?php
              if ($_SESSION['userrole'] === "HOSPITAL") {
              ?>
                <?php
              }
              if ($_SESSION['userrole'] === "RECEIVER") {
                if ($_SESSION['receiver_blood_group'] === $blood_group) {
                ?>
                  <td>
                    <a href="Request_Sample.php?Blood_Sample_Id=<?php echo $id; ?>"><button class="btn btn-outline-light">Request Sample</button></a>
                  </td>
                <?php
                } else {
                ?>
                  <td>

                  </td>
                <?php
                }
              }
              if ($_SESSION['userrole'] === " ") {
                ?>
                <td><a href="index.php"><button class="btn btn-outline-light">Request Sample</button></a></td>
              <?php
              }
              ?>
            </tr>
          <?php
            $i++;
          }
          ?>
        </tbody>
      </table>



    </form>
  </div>
<?php
  mysqli_stmt_close($stmt);
}
?>

<?php include 'footer_file.php'; ?>