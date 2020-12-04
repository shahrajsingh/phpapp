<?php
session_start();
if (isset($_SESSION['userrole']) === false) {
  $_SESSION['userrole'] = " ";
  $_SESSION['useremail'] = " ";
  $_SESSION['hospital_name'] = " ";
}
?>


<?php include 'header_file.php'; ?>
<?php include 'Custom_Menu_file.php'; ?>
<?php include('sidebar_file.php'); ?>

<?php

if ($_SESSION['userrole'] == " ") {

?>
  <div class="signup" style="background-image:url(https://picsum.photos/720/480?blur=1)">
    <div class="card signup-card">
      <div class="card-body">
        <h4 class="card-title" style="color:white;">Sign In</h4>
        <form method="post" name="login_form" action="Login.php">
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" id="email" type="email" name="login_email" value="" required placeholder="e.g:- johndoe@gmail.com" />
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" id="password" type="password" name="login_password" placeholder="********" value="" required />
          </div>
          <button class="btn btn-outline-primary" name="login_submit" type="submit" value="Sign In">Sign In</button>
        </form>
      </div>
    </div>
  </div>
<?php
} else {

?>
  <p class="h2" style="margin:2rem">Welcome Back :)</p>

<?php

}

include 'footer_file.php';

?>