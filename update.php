<?php
include 'connect.php';


?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css\style.css">
</head>

<body>
    <div id="container" class="container my-5">
        <form method="POST">
            <div class="form-group">

                <input type="text" class="form-control" placeholder="Enter your name" name="fullname" autocomplete="off">
            </div>

            <div class="form-group">

                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>

            <div class="form-group">

                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
            </div>

            <div class="form-group">

                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
            </div>




            <button name="submit" type="submit" class="btn btn-primary">Update</button>
 
           <!--Updating the information data-->
            <?php
            
            $id = $_GET['updateid'];
            if (isset($_POST['submit'])) {
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
                $password = $_POST['password'];

                $sql = "update `workers` set id=$id, fullname='$fullname',email='$email',mobile='$mobile',password='$password' where id=$id";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    echo "Updated Success";
                    header('location:display.php');
                } else {
                    die(mysqli_error($con));
                }
            }
            ?>
           <!-------------------------------------------------------------->

        </form>
    </div>

</body>

</html>