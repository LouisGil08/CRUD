<?php
include 'connect.php';


$sql = "Select * from `workers`";
$result = $con->query($sql);
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css\style.css">
    <title>CRUD Operation</title>
</head>

<body>
    <div id="project-concept">
        <h1>PHP and MYSQL CRUD Operations</h1>
    </div>
    <div class="container-sm my-5">
        <div id="title">
            <h1>Workers Management System</h1>
        </div>

        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">Sl no</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>

                <?php
                 
                if ($result) {
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $fullname = $row['fullname'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];

                        echo '<tr>
                                 <th scope="row">' . $id . '</th>
                                 <td>' . $fullname . '</td>
                                 <td>' . $email . '</td>
                                 <td>' . $mobile . '</td>
                                 <td>' . $password . '</td>
                                 <td>
                                      <button class="btn btn-primary" ><a class="text-light" href="update.php?updateid=' . $id . '">Update</a></button>
                                      <button class="btn btn-danger" ><a class="text-light" href="delete.php?deleteid=' . $id . '">Delete</a></button>
                                 </td>
                              </tr>';


                    }
                }


                ?>


            </tbody>
        </table>
        <button id="btn-addworker" class="btn btn-primary my-5"><a href="user.php" class="text-light">Add Worker</a></button>
    </div>

</body>

</html>