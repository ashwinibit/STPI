<?php
   include("config.php");
   // session_start();

   if(isset($_POST['but_submit'])){
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      

      

      // Check connection
      if (!$db) {
      	die("Connection failed: " . mysqli_connect_error());
      }

         // echo "hello";
         $sql = "SELECT * FROM login_details WHERE UID = `$myusername` and Password = `$mypassword`";
         $result = $db->query($sql);
      echo "here";
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($result->num_rows > 0) {
         // session_register("myusername");
         // $_SESSION['login_user'] = $myusername;
         echo "locj";
         // header("location: ./dashboard.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }


?>