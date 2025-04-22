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
  <form action="admin_login.php" method="post">
    <table align="center">
      <tr>
        <th colspan="2">Admin Login Form</th>
      </tr>
      <tr>
        <td>Admin Name:</td>
        <td><input type="text" name="adminName" /></td>
      </tr>
      <tr>
        <td>Admin ID:</td>
        <td><input type="text" name="adminNumber" /></td>
      </tr>
      <tr>
        <td>Admin Password:</td>
        <td><input type="password" name="adminPassword" /></td>
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
        $adminName = $_POST['adminName'];
        $adminPassword = $_POST['adminPassword'];
        $adminNumber = $_POST['adminNumber'];

        $con = mysqli_connect("localhost", "root", "", "DBFinal");
        $que = "SELECT * from AdminValues where adminName = '$adminName' AND adminNumber = '$adminNumber' AND adminPassword = '$adminPassword'";

        $result = mysqli_query($con, $que);

        if(mysqli_num_rows($result) == 1 ){
          echo "<script>window.open('sis_view.php?login=Logged in successfully.','_self')</script>";
        } else {
          echo "<script>alert('Invalid... Try again.')</script>";
        }
      }
    
    ?>

    
  </body>
</html>