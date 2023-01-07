<?php


  session_start();
  if(!isset($_SESSION["name"])){
    ?>
    <script type="text/javascript">
        window.location='account.html';
    </script>

    <?php
  }

    include 'conn.php';

    if (isset($_POST['submit'])){
        mysqli_query($link, "insert into complaint(name,id,cat,type,dateof,description,dept,filename,status) values('$_SESSION[name]','$_SESSION[id]','$_POST[cat]','$_POST[type]','$_POST[dateof]','$_POST[description]','$_SESSION[dep]','$_POST[filename]','pending')");
            ?>
            <script>
                alert("complaint registered successfully")
                window.location='./userdash.php';
            </script>
            <?php
        // }
    }

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="comform.css">
</head>
<body>
    <div class="container-fluid"><br/><br/><br><br>
    <!-- <a href="hoddash.php">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M10.78 19.03a.75.75 0 01-1.06 0l-6.25-6.25a.75.75 0 010-1.06l6.25-6.25a.749.749 0 011.275.326.749.749 0 01-.215.734L5.81 11.5h14.44a.75.75 0 010 1.5H5.81l4.97 4.97a.75.75 0 010 1.06z"></path></svg></a> -->
        <h1>Complaint Form</h1><br/>
        <!-- <h5><i>Vignan's Institute of Information and Technology(VIIT)</i></h5>
        <H5><i>Duvvada Visakhapatnam, Andhra Pradesh</i></H5> -->
    </div>
    <div class="main">
        <form class="signup-form" action="" method="post">
        <div class="form-body">
            <label for="name" class="label-title">Name:</label>
            <input type="text" id="name" class="form-input" value="<?php echo $_SESSION["name"]  ?>" placeholder="<?php echo $_SESSION["name"]  ?>" name="name" required disabled/><br/>
            <label for="regno" class="label-title">Registeration no:</label>
            <input type="text" id="name" class="form-input" value="<?php echo $_SESSION['id'] ?>"placeholder="<?php echo $_SESSION['id'] ?>"name="id" required disabled/><br/>
        <!-- </div>
        <div class="form-select"> -->
            <label for="Categories" class="label-title">Categories:</label>
            <select  class="form-input" name="cat" required>
                <option value="Type of categories">Type of categories</option>
                <option value="Accounts and Billing">Accounts and Billing</option>
                <option value="Academics">Academics</option>
                <option value="Library">Library</option>
                <option value="Transport">Transport</option>
                <option value="Classroom">Classroom</option>
                <option value="Training & placements">Training & placements</option>
                <option value="Laboratories">Laboratories</option>
                <option value="Canteen">Canteen</option>
            </select><br/>
            <label for="type" class="label-title">Type:</label>
            <select  class="form-input" name="type" required>
                <option value="type">Type</option>
                <option value="Complaint">Complaint</option>
                <option value="Grivance">Request</option>
            </select><br/>
            <label for="Date of Complaint" class="label-title">Date of Complaint:</label>
            <input type="date" class="form-input" name="dateof" required><br/>
            <label for="dept" class="label-title">Department:</label>
            <input type="text" class="form-input" value="<?php echo $_SESSION['dep'] ?>" placeholder="<?php echo $_SESSION['dep'] ?>" name="dept" required disabled/><br/>
            
            <br/> 
            <label for="description" class="label-title">Description of Grivance:</label>
            <textarea rows="5" cols="50"  class="form-input"  placeholder="Enter description of Grivance" name="description" required></textarea>
            <label for="description" class="label-title">Complaint Upload:</label>
            <!-- <form action="/action_page.php"> -->
                <input type="file" id="myFile" name="filename">
                
        <!-- <button type="submit" class="btn1">Create</button> -->
        <input type="submit" class="btn2" name="submit" value="create">
        <!-- <button type="submit" class="btn3">Create</button> -->
    <!-- </div> -->
            </form>
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
    
    
    
</body>
</html>