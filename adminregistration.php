<?php
include "conn.php";
if (isset($_POST["submit"])) {
  if ($_POST["des"] === 'hod') {
    $check = mysqli_query($link, "select * from hod where id='$_POST[id]'");
    if (isset($check)) { 
      ?>
                <script>
                    alert('User already exist click ok to login');
                    window.location="adminlogin.php";
                </script>
            <?php
    } else {
      mysqli_query($link, "insert into hod(name,id,dept,mail,pass) values('$_POST[name]','$_POST[id]','$_POST[dept]','$_POST[email]','$_POST[pass]')");
            ?>
      <div class="alert alert-success col-lg-6">
          Registration successfully, You will get email when your account is approved   
      </div>
      <script type="text/javascript">
        alert('registration successfull')
          window.location="adminlogin.php";
      </script>
  <?php
    }
  } else {
    

      mysqli_query($link, "insert into cord(name,id,dept,mail,pass) values('$_POST[name]','$_POST[id]','$_POST[dept]','$_POST[email]','$_POST[pass]')");
          ?>
   
    <script type="text/javascript">
        alert('registration successfull')
        window.location="adminlogin.php";
    </script>
    <?php

  }

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="adminregistration.css">
</head>
<body>
    <div class="container-fluid">
        <!-- <p>hello</p> -->
        <center>
        <a href="adminlogin.php">
        <img src="robo.png" alt=""width="150px" height="150px" style="padding-top:35px">
        </a>
        </center>
    </div>
    

    <!-- registration -->
    <div class="main">
        <form class="signup-form" action="" method="post">
        <div class="form-header">
            <h3>Create Account</h3>
        </div>
       
          <!-- <div class="emo"> -->
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" value="hod"name="des" style="padding-top:20px;" required>HOD 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" value="corde"name="des" required>Coordinator

    <!-- </div> -->
        <div class="form-body">
        <div class="horizontal-group">
            <div class="form-group right">
                <label for="name" class="label-title">Name *</label>
                <input type="text" id="name" class="form-input" placeholder="enter your name" name="name" />
            </div>
            <div class="form-group left">
              <label for="regno" class="label-title">Registeration no *</label>
              <input type="text" id="name" class="form-input" placeholder="enter your Registeration no" required="required" name="id" />
          </div>
        </div>
        <div class="horizontal-group">
          <div class="form-group right">
              <label for="name" class="label-title">department *</label>
              <input type="text" id="name" class="form-input" placeholder="enter your department"name="dept" />
          </div>
          <div class="form-group left">
            <label for="regno" class="label-title">Email *</label>
            <input type="email" id="name" class="form-input" placeholder="enter email" required="required"  name="email"/>
        </div>
      </div>
      

    
      <div class="horizontal-group">
        <div class="form-group left">
          <label for="password" class="label-title">Password *</label>
          <input type="password" id="password" class="form-input" placeholder="enter your password" required="required" name="pass">
        </div>
        <div class="form-group right">
          <label for="confirm-password" class="label-title">Confirm Password *</label>
          <input type="password" class="form-input" id="confirm-password" placeholder="enter your password again" required="required">
        </div>
      </div>

      <script>
        var rangeLabel = document.getElementById("range-label");
        var experience = document.getElementById("experience");
        function change() {
        rangeLabel.innerText = experience.value + "K";
        }
      </script>
    </div>
    </div>


       
    
    <div class="form-footer">
        <!-- <span>* required</span> -->
        <button type="submit" class="btn"name="submit">Create Account</button>
    </div>
    
</body>
</html>