<?php

session_start();

if (isset($_REQUEST['submit_hospital_signup'])) {

  $conn = mysqli_connect('localhost', 'root', '') or die("unable to connect to a database!");
  //mysql_select_db('bloodbank_database') or die(mysql_error());
  mysqli_select_db($conn, "id15587736_bloodbank_database");
  $hospital_email     = $_POST["hospital_email"];
  $hospital_name      = $_POST["hospital_name"];
  $hospital_contact   = $_POST["hospital_contact"];
  $hospital_address   = $_POST["hospital_address"];
  $hospital_password  = $_POST["hospital_password"];

  $Query1 = mysqli_query($conn, "SELECT * FROM bb_user_info WHERE User_Email='$hospital_email'");
  $rows = mysqli_fetch_array($Query1);
  if ($rows == null) {
    $Query2 = mysqli_query($conn, "INSERT INTO hospital_table (User_Email,Hospital_Name,Contact,Address) 
                              VALUES('$hospital_email','$hospital_name',$hospital_contact,'$hospital_address')");
    if ($Query2) {

      $Query3 = mysqli_query($conn, "INSERT INTO bb_user_info(User_Email, User_Password, User_Role) VALUES 
                                ('$hospital_email','$hospital_password','HOSPITAL') ") or die('error hass occurred at 23');

      if ($Query3) {
        echo "<script type='text/javascript'>alert('Successfully Registered!!')</script>";
        header("refresh:0; url=index.php");
      } else {
        echo "<script type='text/javascript'>alert('Failed Registration!!')</script>";
        header("refresh:0,url=Hospital_Signup.php");
      }
    } else {
      echo "<script type='text/javascript'>alert('Incomplete or Incorrect Form Fields,Please Fill it again!!')</script>";

      header("refresh:0,url=Hospital_Signup.php");
    }
  } else {
    echo "<script type='text/javascript'>alert('Email id exists. Kindly login or Enter unique id which has not been used')</script>";
    header("refresh:0; url=Hospital_Signup.php");
  }
}
