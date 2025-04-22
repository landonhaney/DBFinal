<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
   $con = mysqli_connect("localhost", "root", "", "DBFinal");
   $del_rec = $_GET['del'];
   $que = "DELETE from Students where seq='$del_rec'";
      
   if(mysqli_query($con, $que)){
      echo "<script>window.open('sis_view.php?deleted=Data has been successfully deleted.','_self')</script>";
   }//fi
  ?>

</body>
</html>