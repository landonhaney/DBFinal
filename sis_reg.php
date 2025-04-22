<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <form method="post" action="sis_reg.php">
    <table id="table3" align="center">
        <tr>
          <th colspan="2">Student Info Form</th>
        </tr>
        <tr>
          <td>Student's Name:</td>
          <td><input type="text" name="stu_name" /></td>
        </tr>
        <tr>
          <td>ID Number:</td>
          <td><input type="text" name="stu_id" /></td>
        </tr>
        <tr>
          <td>Date of Birth</td>
          <td><input type="text" name="stu_dob" /></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="stu_email" /></td>
        </tr>
        <tr>
          <td>Phone Number</td>
          <td><input type="text" name="stu_phone" /></td>
        </tr>
        <tr>
          <td>Major</td>
          <td><input type="text" name="stu_major" /></td>
        </tr>
        <!-- <tr>
          <td>DOB:</td>
          <td>
           <select name="stu_dob">
            <option value="null">Year ▼</option>
            <?php
              $currentYear = date("Y");
              $startYear = 1900;
              for ($year = $currentYear; $year >= $startYear; $year--) {
                echo "<option value='$year'>$year</option>";
              }
            ?>
            </select>
          </td>
        </tr> -->
        <tr>
          <td colspan="2" style="text-align: center">
            <button type="submit" name="submit" value="submit" class="btn">Submit</button>
          </td>
        </tr>
      </table>
    </form>
    <br>
    <?php

   $con = mysqli_connect("localhost", "root", "", "DBFinal");

   if(isset($_POST['submit'])){
      $stu_name = $_POST['stu_name']; "<br>";
      $stu_id = $_POST['stu_id']; "<br>";
      $stu_dob = $_POST['stu_dob']; "<br>";
      $stu_email = $_POST['stu_email']; "<br>";
      $stu_phone = $_POST['stu_phone']; "<br>";
      $stu_major = $_POST['stu_major']; "<br>";

      $que = "INSERT INTO `Students` (`stuName`, `IDNumber`, `dateOfBirth`, `email`, `phoneNumber`, `major`) VALUES ('$stu_name', '$stu_id', '$stu_dob', '$stu_email', '$stu_phone', '$stu_major');";

      if(mysqli_query($con, $que)){
         echo "<div class='center'>Data has successfully registered<div>";
      }//fi
   }//fi(isset)

  ?>

<style>
  .center {               
    justify-content: center;    
    align-items: center;     
    color: white;
    text-align: center;
} 
</style>
  <br>
  <div style="text-align: center;">
    <a class="btn" href="sis_view.php">View Student Records</a>
  </div>

  <?php
// Create connection
$con = mysqli_connect("localhost", "root", "", "DBFinal");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 1: Initialize the user-defined variable
mysqli_query($con, "SET @autoid := 0;");

// Step 2: Update the `seq` column with incremental values
$query = "UPDATE Students SET seq = @autoid := (@autoid + 1);";
if (mysqli_query($con, $query)) {
    
} else {
    echo "Error: " . mysqli_error($con);
}

// Close connection
mysqli_close($con);
?>



</body>
</html>