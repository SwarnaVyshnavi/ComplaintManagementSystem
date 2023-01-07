<?php
include "conn.php";
if (isset($_POST["submit"])) {
  $check=mysqli_query($link,"select * from stu where id='$_POST[id]'");
  $count = mysqli_num_rows($check);
        if($count!=0){
            ?>
                <script>
                    alert('User already exist click ok to login');
                    window.location="register.php";
                </script>
            <?php
        } else {
    mysqli_query($link, "insert into stu(name,id,dep,email,pass) values('$_POST[name]','$_POST[id]','$_POST[dep]','$_POST[email]','$_POST[pass]')");
            ?>
      
     
      <script type="text/javascript">
        alert('registration successful');
          window.location="login.php";
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


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container-fluid">
        
        <center>
          <a href="login.php">
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
              <input type="text" id="name" class="form-input" placeholder="enter your department"name="dep" />
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