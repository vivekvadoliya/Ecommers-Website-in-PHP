<!DOCTYPE html>
<html lang="en">

<head>
    <title>Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <a href="index.php">
            <h2>Users Data:</h2><br>
        </a>
        <table class="table table-bordered">
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'jaldhi_database');
            if (isset($_GET['del'])) {

                $del_id = $_GET['del'];

                $delet = " DELETE FROM register_data_sc WHERE id='$del_id'";
                $run_delet = mysqli_query($conn, $delet);

                if ($run_delet === true) {
                    echo "Record delete";

                } else {
                    echo "faild";
                }



            }
            ?>



            <thead>
                <tr>
                    <!-- <th>Id</th> -->
                    <!-- <th>Username</th> -->
                    <th>ID</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Delete</th>
                    <th>Edit
                    <th>
                </tr>
            </thead>
            <tbody>
                <?php

                $conn = mysqli_connect('localhost', 'root', '', 'jaldhi_database');
                $select = " SELECT * FROM register_data_sc";
                $run = mysqli_query($conn, $select);
                while ($row_user = mysqli_fetch_array($run)) {
                    $id = $row_user['id'];

                    //  $name = $row_user ['name'];
                    $email = $row_user['email'];
                    //  $email = $row_user ['email'];
                    $password = $row_user['password'];



                    ?>
                    <tr>
                        <td>
                            <?php echo $id; ?>
                        </td>
                        <td>
                            <?php echo $email; ?>
                        </td>
                        <td>
                            <?php echo $password; ?>
                        </td>
                        <td><a class="btn btn-danger" href="table.php?del=<?php echo $id; ?>">Delete</a></td>
                        <td><a class="btn btn-success" href="update.php?edit=<?php echo $email; ?>">Edit</a></td>

                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

</body>

</html>