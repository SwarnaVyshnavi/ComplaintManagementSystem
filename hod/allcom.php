<?php
  session_start();
  if(!isset($_SESSION["name"])){
    ?>
    <script type="text/javascript">
        window.location='login.php';
    </script>

    <?php
  }
  include 'conn.php';
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>View complaint</title>

    <style>
      body{
        background-image: url('../bg.jpg');
      }
    
    </style>
    
</head>
<body>
<a href="hoddash.php">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M10.78 19.03a.75.75 0 01-1.06 0l-6.25-6.25a.75.75 0 010-1.06l6.25-6.25a.749.749 0 011.275.326.749.749 0 01-.215.734L5.81 11.5h14.44a.75.75 0 010 1.5H5.81l4.97 4.97a.75.75 0 010 1.06z"></path></svg></a>

    <center><h2>Complaints table</h2></center>
    <br><br>
    <?php
    // $name=$_SESSION["name"];
    $res=mysqli_query($link,"select * from complaint where access='H' ");
    $count=mysqli_num_rows($res);
    if($count==0){
       ?>
       <h3> you Have no Complaints</h3>
       <?php
        
    }
    else {
        ?>
        <div class="container">

<table class="table table-striped table-hover">


  <thead>
    <tr>
    <th scope="col">Complaint NO</th>
      <th scope="col">Name</th>
      <th scope="col">Register Number</th>
      <th scope="col">Category</th>
      <th scope="col">Type</th>
      <th scope="col">Date Of Complaint</th>
      <th scope="col">Department</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($values=mysqli_fetch_array($res))
    {
        echo "<tr>";
        echo "<td>";    echo " $values[sno] ";   echo "</td>";

            echo "<td>";    echo " $values[name] ";   echo "</td>";
            echo "<td>";    echo " $values[id] ";   echo "</td>";
            echo "<td>";    echo " $values[cat] ";   echo "</td>";
            echo "<td>";    echo " $values[type] ";   echo "</td>";
            echo "<td>";    echo " $values[dateof] ";   echo "</td>";
            echo "<td>";    echo " $values[dept] ";   echo "</td>";
            echo "<td>";    echo " $values[description] ";   echo "</td>";
            echo "<td>";    echo " $values[status] ";   echo "</td>";

            echo "</tr>";
    }
    ?>

        <?php
    }

    ?>
    </div>

</body>
</html>