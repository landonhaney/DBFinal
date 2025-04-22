<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student's Info Records'</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="sis_view.php">
        <table id="table3" align="center">
            <tr>
                <th colspan="8">Student Info Records</th>
            </tr>
            <tr class="bold">
                <td>Student's Name</td>
                <td>ID Number</td>
                <td>Date of Birth</td>
                <td>Email</td>
                <td>Phone Number</td>
                <td>Major</td>
                <!-- <td>Delete</td>
                <td>Edit</td> -->
            </tr>
            <tr>
                <?php
                    $con = mysqli_connect("localhost", "root", "", "DBFinal");
                    $que = "SELECT * FROM Students";
                    $run = mysqli_query($con, $que);

                    $i = 1;
                    while($row = mysqli_fetch_array($run)){
                        $stu_name = $row['0'];
                        $stu_id = $row['1']; 
                        $stu_dob = $row['2']; 
                        $stu_email = $row['3']; 
                        $stu_phone = $row['4']; 
                        $stu_major = $row['5']; 
                        $stu_seq = $row['seq']
                        ?>

                        <td><?php echo $stu_name; $i++; ?></td>
                        <td><?php echo $stu_id; ?></td>
                        <td><?php echo $stu_dob ?></td>
                        <td><?php echo $stu_email; ?></td>
                        <td><?php echo $stu_phone; ?></td>
                        <td><?php echo $stu_major; ?></td>
                        <td><button class="btn"><a class="link" href="sis_del.php?del=<?php echo $stu_seq; ?>">Delete</a></button></td>
                        <td><button class="btn"><a class="link" href="sis_edit.php?edit=<?php echo $row['seq']; ?>">Edit</a>
                        </button></td>
                        
                </tr>
            <?php
                }
            ?>
            
        </table>
    </form>
    <br>
        <div class="center_message">
            <?php echo @$_GET["login"]; ?>
        </div>
    <br>

    <?php 
        if (isset($_GET['deleted'])) {
            $message = htmlspecialchars($_GET['deleted']);
            echo "<div class='center_message'>$message</div>";
        }
    ?>
    

    <style>
        .center_message {
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }
    </style>

    <?php echo @$_GET['edit']; ?>

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


    <br>
    <div style="text-align: center;">
        <a class="pageClick" href="sis_reg.php">Register New</a>
    </div>
    <div style="text-align: center; padding-top: 4rem;" >
        <a style="font-size: 20px;" href="sis_logout.php">Logout</a>
    </div>

    <!-- <div style="display: block; height: 95vh; text-align: center; font-size: 1rem"> -->
        <p class="copyright">Landon Haney &#169 2024</p>
    <!-- </div> -->
    
</body>
</html>