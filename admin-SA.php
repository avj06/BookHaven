<?php 

    $con = mysqli_connect("localhost", "root","","library management system");

    if(!$con){
        die("Connection Failed: ".mysqli_connect_error());
    }

    $sql_query = "SELECT * 
                    FROM staff";

    $result = $con -> query($sql_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Account</title>
    <link rel="stylesheet" href="styles/admin-UA1.css">
    <script async src="js/admin-h.js"></script>
</head>
<body>
    <?php include 'admin-header.php'; ?>
    <main class="table">
        <section class="tb-header">
            <h1>Staff Accounts</h1>
        </section>
        <section class="tb-body">
            <table>
                <thead>
                    <tr>
                        <th> librarian-ID </th>
                        <th> Position </th>
                        <th> First Name </th>
                        <th> Last Name </th>
                        <th> Gender </th>
                        <th> Address </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = $result->fetch_assoc()){?>
                            <tr>
                                <td><?php echo $row['librarian_id'];?> </td>
                                <td> <?php echo $row['position'];?> </td>
                                <td> <?php echo $row['f_name'];?> </td>
                                <td> <?php echo $row['l_name'];?> </td>
                                <td> <?php echo $row['gender'];?> </td>
                                <td> <?php echo $row['address'];?> </td>
                                <td>
                                    <button class="bt-edit">
                                        <ion-icon name="create-outline"></ion-icon>
                                    </button>
                                </td>
                                <td>
                                    <button class="bt-delete">
                                        <ion-icon name="trash-outline"></ion-icon>
                                    </button>
                                </td>
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </section>
    </main>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>