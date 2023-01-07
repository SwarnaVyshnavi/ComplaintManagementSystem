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
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="userdash.css">
  

</head>

<body>
  <h1 class="mainheading">Categories Of Grievance</h1>

  <div class="row main">
    <div class="col lg-4">
      <div class="d-flex flex-column flex-shrink-0 p-3 text-white " style="width: 280px; height: 715px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
          </svg>
          <span class="fs-4">Profile</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
          </li>
          <li>
            <img class="profileimg" src="./img/user1.png">
          </li>
          <li>
            <br><br>
            <div>
              Id:<?php echo $_SESSION["id"];  ?>
            </div>
            <div>
              Name:<?php echo $_SESSION["name"];  ?>
            </div>
            <a href="comform.php" class="nav-link text-white">
              <svg class="bi me-2 bar" width="16" height="16">
                <use xlink:href="#table"></use>
              </svg>
              <button>Make Complaint</button>
            </a>
          </li>
          <li>
            <a href="viewcom.php" class="nav-link text-white">
              <svg class="bi me-2 bar" width="16" height="16">
                <use xlink:href="#grid"></use>
              </svg>
              <button>Status Of Complaint</button>
            </a>
          </li>
          <li>
            <a href="../index.html" class="nav-link text-white">
              <svg class="bi me-2 bar" width="16" height="16">
                <use xlink:href="#people-circle"></use>
              </svg>
              <button onclick="logout.php">Logout</button>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="col lg-4 ">
      <div class="first">
                <a href="acad.html"><img src="./img/acd.jpg" class=" images rounded float-start " ></a>
            <a href="account.html"><img src="./img/acc.jfif" class=" images rounded float-start " ></a>
        </div>
        <div class="second">
            <a href="class.html"><img src="./img/cls.jfif" class=" images rounded float-start " ></a>
            <a href="training.html"><img src="./img/tad.jpg" class=" images rounded float-start " ></a> 
        </div>
          </div>
        
        <div class="col lg-4">
            <div class="first">
            <a href="library.html"><img src="./img/lib.jfif" class=" images rounded float-start " ></a>
            <a href="transport.html"><img src="./img/trns.jpg" class=" images rounded float-start " ></a>
            
        </div>
        <div class="second">
            <a href="lab.html"><img src="./img/lab.png" class=" images rounded float-start " ></a>
            <a href="canteen.html"><img src="./img/cnt.jpeg" class=" images rounded float-start " ></a> 
        </div>
      
    </div>
  </div>
  <!-- <script type="text/javascript"> -->
    <!-- function fun(){ -->
   
    <!-- window.location="index.html"; -->
    

  </script>
</body>

</html>