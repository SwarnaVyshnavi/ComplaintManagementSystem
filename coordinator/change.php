<?php


  session_start();
  if(!isset($_SESSION["name"])){
    ?>
    <script type="text/javascript">
        window.location='account.html';
    </script>

    <?php
  }
  else{
    $_SESSION['complaint_no'] = $_POST['sno'];
  }

    include 'conn.php';
    
    

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../student/comform.css">
</head>
<body>
    <div class="container-fluid"><br/><br/><br><br>
    <!-- <a href="hoddash.php">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M10.78 19.03a.75.75 0 01-1.06 0l-6.25-6.25a.75.75 0 010-1.06l6.25-6.25a.749.749 0 011.275.326.749.749 0 01-.215.734L5.81 11.5h14.44a.75.75 0 010 1.5H5.81l4.97 4.97a.75.75 0 010 1.06z"></path></svg></a> -->
        <h1>Action Form</h1><br/>
        <!-- <h5><i>Vignan's Institute of Information and Technology(VIIT)</i></h5>
        <H5><i>Duvvada Visakhapatnam, Andhra Pradesh</i></H5> -->
    </div>
    <div class="main">
        <?php
        $res=mysqli_query($link,"select * from complaint where sno='$_POST[sno]'");
        $value=mysqli_fetch_array($res);
        ?>
        <form class="signup-form" action="change2.php" method="post">
        <div class="form-body">
            <label for="name" class="label-title">Name:</label>
            <input type="text" id="name" class="form-input" value="<?php echo $value["name"]  ?>" placeholder="<?php echo $value["name"]  ?>" name="name"  disabled/><br/>
            <label for="regno" class="label-title">Registeration no:</label>
            <input type="text" id="name" class="form-input" value="<?php echo $value['id'] ?>"placeholder="<?php echo $value['id'] ?>"name="id"  disabled/><br/>
        <!-- </div>
        <div class="form-select"> -->
            <label for="Categories" class="label-title">Categories:</label>
            <input type="text" id="name" class="form-input" value="<?php echo $value["cat"]  ?>" placeholder="<?php echo $value["cat"]  ?>" name="name"  disabled/><br/>

            <label for="type" class="label-title">Type:</label>
             <input type="text" id="name" class="form-input" value="<?php echo $value["type"]  ?>" placeholder="<?php echo $value["type"]  ?>" name="name"  disabled/><br/>
 
            <label for="Date of Complaint" class="label-title">Date of Complaint:</label>
            <input type="text" id="name" class="form-input" value="<?php echo $value["dateof"]  ?>" placeholder="<?php echo $value["dateof"]  ?>" name="name"  disabled/><br/>
            <label for="dept" class="label-title">Department:</label>
            <input type="text" class="form-input" value="<?php echo $value['dept'] ?>" placeholder="<?php echo $value['dept'] ?>" name="dept"  disabled/><br/>
            
            <br/> 
            <label for="description" class="label-title">Description of Grivance:</label>
            <textarea rows="5" cols="50"  class="form-input"  placeholder="<?php echo $value['description'] ?>" name="description" disabled></textarea>
            <label for="description" class="label-title">Complaint Upload:</label>
            <!-- <form action="/action_page.php"> -->
                <!-- <input type="file" id="myFile" name="filename"> -->
                <select name="action" id="">
                    <option value="In-processing">In-processing</option>
                    <option value="Not valuable">Not valuable</option>
                    <option value="closed">closed</option>
                    <option value="forwarded">forwarded</option>
                </select>
                <input type="hidden" name="sno" value="<?php echo $value['sno'] ?>">
        <button  name="submit"class="btn1">Update</button>
        <!-- <input type="submit" class="btn2" name="submit" value="create"> -->
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