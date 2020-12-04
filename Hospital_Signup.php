<?php session_start(); ?>
<?php include 'header_file.php'; ?>
<?php include 'Custom_Menu_file.php'; ?>
<?php include 'sidebar_file.php';  ?>
<div class="signup" style="background-image:url(https://picsum.photos/720/480?blur=1)">
  <div class="card hospital-signup-card">
    <div class="card-body">
      <h3 class="card-title" style="color:white;">Hospital Signup</h3>
      <img class="hospital-logo" src="https://imgsto.s3.ap-south-1.amazonaws.com/Hospital_logo.png">
      <form method="post" name="hospital_signup" action="Hospital_Signup_Results.php">


        <div class="form-group">
          <label for="hospital_email">Hospital Email</label>
          <input type="email" id="hospital_email" placeholder="eg:- hospital@mail.com" required class="form-control" name="hospital_email" value="" /></div>
        <div class="form-group">
          <label for="hospital_name">Hospital Name</label>
          <input type="text" id="hospital_name" placeholder="eg:- city hospital" required class="form-control" name="hospital_name" value="" /></div>

        <div class="form-group">
          <label for="hospital_contact">Hospital Contact</label>
          <input type="tel" id="hospital_contact" placeholder="e.g:- 123654789" required class="form-control" name="hospital_contact" value="" /></div>

        <div class="form-group">
          <label for="hospital_address">Hospital Address</label>
          <input type="text" id="hospital_address" placeholder="e.g:- 6th Avenue St,NY,12354" required class="form-control" name="hospital_address" value="" /></div>

        <div class="form-group">
          <label for="hospital_password">Password</label>
          <input type="password" id="hospital_password" placeholder="********" required class="form-control" name="hospital_password" value="" /></div>

        <div class="form-group">
          <label for="hospital_password2">Confirm Password</label>
          <input type="password" id="hospital_password2" placeholder="********" required class="form-control" name="hospital_password2" value="" /></div>

        <button class="btn btn-warning" type="submit" name="submit_hospital_signup" value="Finish">Sign Up</button>

      </form>
    </div>
  </div>
</div>



<?php include 'footer_file.php'; ?>