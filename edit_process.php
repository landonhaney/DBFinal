<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$con = mysqli_connect("localhost", "root", "", "DBFinal");

if (isset($_POST['update'])) {
    $seq = $_POST['seq'];
    $stu_name = mysqli_real_escape_string($con, $_POST['stu_name']);
    $stu_id = mysqli_real_escape_string($con, $_POST['stu_id']);
    $stu_dob = mysqli_real_escape_string($con, $_POST['stu_dob']);
    $stu_email = mysqli_real_escape_string($con, $_POST['stu_email']);
    $stu_phone = mysqli_real_escape_string($con, $_POST['stu_phone']);
    $stu_major = mysqli_real_escape_string($con, $_POST['stu_major']);

    $que = "UPDATE Students SET 
                stuName = '$stu_name', 
                IDNumber = '$stu_id', 
                dateOfBirth = '$stu_dob', 
                email = '$stu_email', 
                phoneNumber = '$stu_phone', 
                major = '$stu_major' 
            WHERE seq = '$seq'";

    if (mysqli_query($con, $que)) {
        echo "<script>window.open('sis_view.php?updated=Data has been successfully updated.', '_self');</script>";
    } else {
        echo "Update failed: " . mysqli_error($con);
    }
}
?>


</body>
</html>