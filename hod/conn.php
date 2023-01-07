<?php 
	 $link= mysqli_connect("localhost","root","","project");
     mysqli_select_db($link, "project");
     if(! $link ){
        die('Could not connect: ');
     }
 ?>