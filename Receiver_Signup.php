<?php session_start(); ?>
<?php include 'header_file.php'; ?>
<?php include 'Custom_Menu_file.php'; ?>
<?php include 'sidebar_file.php';  ?>
<div class="signup" style="background-image:url(https://picsum.photos/720/480?blur=1)">
  <div class="card receiver-signup-card">
    <div class="card-body">
      <h3 class="card-title" style="color:white">Receiver Signup</h3>
      <form method="post" name="Receiver_Signup " action="Receiver_Signup_Results.php">
        <div class="form-group">
          <label for="receiver_email">Email</label>
          <input type="email" id="Receiver_email" placeholder="eg:- receiver@mail.com" required class="form-control" name="Receiver_Email" value="" /></div>
        <div class="form-group">
          <label for="receiver_name">Name</label>
          <input type="text" id="Receiver_name" placeholder="eg:- city receiver" required class="form-control" name="Receiver_FullName" value="" /></div>
        <div class="form-group">
          <label for="Receiver_age">Age</label>
          <input type="number" class="form-control" id="Receiver_age" required min="18" name="Receiver_Age" /></div>
        <div class="form-group">
          <label for="receiver_contact">Contact</label>
          <input type="tel" id="Receiver_contact" placeholder="e.g:- 123654789" required class="form-control" name="Receiver_Contact" value="" /></div>

        <div class="form-group">
          <label for="Receiver_address">receiver Address</label>
          <input type="text" id="Receiver_address" placeholder="e.g:- 6th Avenue St,NY,12354" required class="form-control" name="Receiver_Address" value="" /></div>
        <div class="form-group">
          <label for="Receiver_bloodgroup">Blood Group</label>
          <select class="form-control" required id="Receiver_bloodgroup" name="Receiver_Blood-Group">
            <option value=" ">select Blood Group</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="B+">B+</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
          </select>
        </div>
        <div class="form-group">
          <label for="Receiver_password">Password</label>
          <input type="password" id="Receiver_password" placeholder="********" required class="form-control" name="Receiver_Password" value="" /></div>

        <div class="form-group">
          <label for="Receiver_password2">Confirm Password</label>
          <input type="password" id="Receiver_password2" placeholder="********" required class="form-control" name="Receiver_Password2" value="" /></div>

        <button class="btn btn-secondary" type="submit" name="submit_receiver_signup" value="Finish">Sign Up</button>

      </form>
    </div>
  </div>
</div>

<?php include 'footer_file.php'; ?>