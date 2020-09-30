<!DOCTYPE html>
<html>
<head>
<title>Detail Of Land</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />

</head>

<body>
Land_Location 	Land_City 	Land_PIN 	Land_State 	Land_Type 	Land_Area 	Land_Leas_peirod 	Land_Status 	UID 	TIME
    <div class="contain">
    <div class="element">
        <form action="./php/student.php" method="post">
            <h2>Registration Form</h2>

            <label>Center ID :</label><br/>
            <input type="text" name="C_ID" id="C_ID"><br/>

            <label>State ID :</label><br/>
            <input type="text" name="S_ID" id="S_ID"><br/>

            <label>Land_ID :</label><br/>
            <input type="text" name="Land_ID" id="Land_ID"><br/>

            <label>Class :</label><br/>
            <input type="text" name="class" id="class"><br/>

            <label>School Name :</label><br/>
            <input type="text" name="school" id="school"><br/>

            <label>Address :</label><br/>
            <input type="text" name="address" id="address"><br/>

            <label>Email :</label><br/>
            <input type="text" name="email" id="email"><br/>

            <label>Parents Mobile no. :</label><br/>
            <input type="text" name="pno" id="pno"><br/>

            <label>Mobile No :</label><br/>
            <input type="text" name="mno" id="mno"><br/>

            <label>Subjects</label><br>
            <input type="text" name="sub" id="sub"><br/>
            <br>

            <button type="submit" value="Submit" id="but_submit" name="but_submit">Register</button>

        </form>
    </div>
    </div>

    <div style="width: 100%; background-color: #6ff1b244; text-align: center; position: fixed;bottom:0;">
      <p> <i class="fa fa-copyright" aria-hidden="true"></i>AKM</p>
    </div>

</body>
</html>







<?php
include '../../connect.php';

if(isset($_POST['but_submit'])){

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $fname = mysqli_real_escape_string($con,$_POST['fname']);
    $mname = mysqli_real_escape_string($con,$_POST['mname']);
    $class = mysqli_real_escape_string($con,$_POST['class']);
    $school = mysqli_real_escape_string($con,$_POST['school']);
    $address = mysqli_real_escape_string($con,$_POST['address']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $pno = mysqli_real_escape_string($con,$_POST['pno']);
    $mno = mysqli_real_escape_string($con,$_POST['mno']);
    $sub=mysqli_real_escape_string($con,$_POST['sub']);
  

    

    $sql = "INSERT INTO `student`(`name`, `fname`, `mname`, `class`, `school`, `address`, `email`, `pno`, `mno`, `sub`,`Status`) VALUES ('$name', '$fname', '$mname', '$class', '$school', '$address', '$email', '$pno', '$mno', '$sub','pending')";
 

   if ($con->query($sql) === TRUE) {
        echo "data Saved Successfully!";
        echo '<div> 

                <h3><a href="../index.html">Click Hear To Visit Home Page</a></h3>
                
            </div>
            <div>';
        
    } 
    else 
        echo "Error:" . $sql . "<br>" . $con->error;
    $con->close();
    
    
}

?>