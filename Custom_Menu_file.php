 <?php

  if ($_SESSION['userrole'] == " ") {
  ?>

   <li class="nav-item active"><a class="nav-link" href="index.php">
       <p class="h5">Home</p>
     </a></li>
   <li class="nav-item"><a class="nav-link" href="Hospital_Signup.php">
       <p class="h5">Hospital Signup</p>
     </a></li>
   <li class="nav-item"><a class="nav-link" href="Receiver_Signup.php">
       <p class="h5">Receiver Signup</p>
     </a></li>
 <?php
  }
  //i was here
  if ($_SESSION['userrole'] == "HOSPITAL") {
  ?>
   <li class="nav-item active"><?php echo "<a class='nav-link h5'> Hi " . $_SESSION['useremail'] . " !"; ?> </a></li>
   <li class="nav-item"><a class="nav-link" href="Logout.php">
       <p class="h5">Logout</p>
     </a></li>
 <?php
  }
  if ($_SESSION['userrole'] == "RECEIVER") {
  ?>
   <li class="nav-item active"><?php echo "<a class='nav-link h5' > Hi " . $_SESSION['useremail'] . " !"; ?> </a></li>
   <li class="nav-item"><a class="nav-link" href="Logout.php">
       <p class="h5">Logout</p>
     </a></li>
 <?php
  }
  ?>
 </ul>
 </div>
 </nav>
 <!--<div id="content_header"></div>-->
 <div class="container-fluid">
   <div class="row">
     <div class="sidebar" id="sidebar">
       <!--<div id="banner"></div>-->
       <button class="btn btn-outline-dark menu-btn" onclick="toggleSidebar()">
         <i class="material-icons">menu</i></button>
       <ul class="navbar-nav mr-auto" id="sidebar-nav">
         <li class="nav-item"><a class="nav-link h5" href="Available_Sample.php">Available Sample</a></li>