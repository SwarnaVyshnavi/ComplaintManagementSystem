<?php

include "conn.php";
if (isset($_POST["login"])) {
    $count = 0;
    $res = mysqli_query($link, "select * from stu where name='$_POST[name]' && pass= '$_POST[pass]' ");
    $count = mysqli_num_rows($res);
    if ($count == 0) {
?>
<div class="alert alert-warning">
    <strong style="color:#333">Invalid!</strong> <span style="color: red;font-weight: bold; ">Username Or
        Password.</span>
</div>
<?php
    } else {
        session_start();
        $_SESSION["name"] = $_POST["name"];
        $res = mysqli_query($link, "select * from stu where name='$_POST[name]'");
        $rid = mysqli_fetch_array($res);
        $_SESSION["id"] = $rid['id'];
        $_SESSION['dep'] = $rid['dep']

    ?>
        <script>
            window.location="./student/userdash.php";
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
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css" >
</head>

<body style="background-color:#fff;">
    <div class="container-fluid">
        <!-- <p>hello</p> -->
        <center>
        <img src="robo.png" alt=""width="150px" height="150px" style="padding-top:35px">
        </center>
    </div>


    <!-- registration -->
    <div class="main">
        <form class="signup-form" action="" method="post">
            <div class="form-header">
                <h3>LOGIN HERE!</h3>
            </div>
            <div class="form-body">
                <div class="horizontal-group">
                    <div>
                        <label for="name" class="label-title">UserName:*</label>
                        <input type="text" id="name" class="form-input" placeholder="UserName" name="name" required/>
                    </div>
                    <div>
                        <label for="regno" class="label-title">password:*</label>
                        <input type="password" id="name" class="form-input" placeholder="password" required
                            name="pass" />
                    </div>
                    <div class="sign-up">
                        <p>Dont have an account?<a href="register.php" >sign-up</a></p>
                    </div>
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
    <!-- <center> -->
        <!-- <div class="sign-up">
            <p>Dont have an account?</p><a href="register.php"></a>
        </div> -->
    <!-- </center> -->

    <div class="form-footer">
        <!-- <span>* required</span> -->
        <button type="submit" class="btn" name="login">Login</button>
    </div>
    <br><br><br><br><br><br><br><br><br>
    
    <!-- <footer>
        <div class="foot">
            <span>hod</span>
            <span>coordinator</span>
        </div>
    </footer> -->
</body>

</html>
</body>

</html>