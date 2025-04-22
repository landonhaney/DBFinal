<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$con = mysqli_connect("localhost", "root", "", "DBFinal");

// Get the ID of the record to edit from the URL
$edit_rec = $_GET['edit'];

// Fetch the current data for this record
$result = mysqli_query($con, "SELECT stuName, IDNumber, dateOfBirth, email, phoneNumber, major FROM Students WHERE seq='$edit_rec'");
$row = mysqli_fetch_assoc($result);
?>

<body>
  <form method="post" action="edit_process.php">
    <table align="center">
      <tr>
        <th colspan="2">Edit Student Info</th>
      </tr>
      <tr>
        <td>Student's Name:</td>
        <td><input type="text" name="stu_name" value="<?php echo htmlspecialchars($row['stuName']); ?>" /></td>
      </tr>
      <tr>
        <td>ID Number:</td>
        <td><input type="text" name="stu_id" value="<?php echo htmlspecialchars($row['IDNumber']); ?>" /></td>
      </tr>
      <tr>
        <td>Date of Birth:</td>
        <td><input type="text" name="stu_dob" value="<?php echo htmlspecialchars($row['dateOfBirth']); ?>" /></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="stu_email" value="<?php echo htmlspecialchars($row['email']); ?>" /></td>
      </tr>
      <tr>
        <td>Phone Number:</td>
        <td><input type="text" name="stu_phone" value="<?php echo htmlspecialchars($row['phoneNumber']); ?>" /></td>
      </tr>
      <tr>
        <td>Major:</td>
        <td><input type="text" name="stu_major" value="<?php echo htmlspecialchars($row['major']); ?>" /></td>
      </tr>



      <tr>
        <td colspan="2" style="text-align: center">
          <input type="hidden" name="seq" value="<?php echo $edit_rec; ?>">
          <button type="submit" name="update" value="update" class="btn">Update</button>
        </td>
      </tr>
    </table>
  </form>
</body>


</body>
</html>