<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
  </head>
  <body>
    <!-- Table 1 -->
  <form method="post">
    <table align="center">
      <tr>
        <th colspan="2">Student Login Form</th>
      </tr>
      <tr>
        <td>Student Name:</td>
        <td><input type="text" name="studentName" /></td>
      </tr>
      <tr>
        <td>Student ID:</td>
        <td><input type="text" name="studentNumber" /></td>
      </tr>
      <tr>
        <td>Phone Number:</td>
        <td><input type="text" name="studentPhone" /></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center">
          <button type="submit" name="login" value="login" class="btn">Login</button>
        </td>
      </tr>
    </table>
</form>

    <?php
      if(isset($_POST['login'])){
        $studentName = $_POST['studentName'];
        $studentNumber = $_POST['studentNumber'];
        $studentPhone = $_POST['studentPhone'];

        $con = mysqli_connect("localhost", "root", "", "DBFinal");
        $que = "SELECT * from Students where stuName = '$studentName' AND IDNumber = '$studentNumber' AND phoneNumber = '$studentPhone'";

        $result = mysqli_query($con, $que);

        if(mysqli_num_rows($result) == 1 ){
          echo "<script>window.open('sis_student_view.php?login=Logged in successfully.','_self')</script>";
        } else {
          echo "<script>alert('Invalid... Try again.')</script>";
        }
      }
    
    ?>

    
  </body>
</html>