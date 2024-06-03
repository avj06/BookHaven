<?php 

    $con = mysqli_connect("localhost", "root","","library management system");

    if(!$con){
        die("Connection Failed: ".mysqli_connect_error());
    }

    $sql_query = "SELECT * 
                    FROM users";

    $result = $con -> query($sql_query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Accounts</title>
        <link rel="stylesheet" href="styles/admin-UA1.css">
        <link rel="stylesheet" href="styles/admin-popup.css">
        <script async src="js/admin-h.js"></script>
</head>
<body>
    <!-- tuts https://youtu.be/wHspfWWn1II?si=HS0V-14HG5mYKNyt -->
    <?php include 'admin-header.php'; ?>
    <main class="table">
        <section class="tb-header">
            <h1>User Accounts</h1>
            <nav>
                <button class="btn-AC" onclick="ua_createAcc()"> Add Account</button>
                <button class="btn-VR"> Verify Register </button>
            </nav>
            
        </section>
        <section class="tb-body">
            <table>
                <thead>
                    <tr>
                        <th> user-id </th>
                        <th> img </th>
                        <th> First Name</th>
                        <th> Last Name</th>
                        <th> Email</th>
                        <th> Password</th>
                        <th> Type </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = $result->fetch_assoc()){?>
                            <tr id="row">
                                <td><?php echo $row['user_id'];?> </td>
                                <td> <img src="images/user-profile/winter1.jpg" alt=""> </td>
                                <td> <?php echo $row['f_name'];?> </td>
                                <td> <?php echo $row['l_name'];?> </td>
                                <td> <?php echo $row['email'];?> </td>
                                <td> <?php echo $row['password'];?> </td>
                                <td class="type"> <?php echo $row['type'];?> </td>
                                <td>
                                    <button class="bt-edit"
                                        onclick="popedit(this)"
                                        data-userid="<?php echo $row['user_id']; ?>"
                                        data-fname="<?php echo $row['f_name']; ?>"
                                        data-lname="<?php echo $row['l_name']; ?>"
                                        data-email="<?php echo $row['email']; ?>"
                                        data-password="<?php echo $row['password']; ?>"
                                        data-type="<?php echo $row['type']; ?>">
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

    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>

        <div class="form-box edit">
            <h2>Edit User</h2>
            <form action="config/BE_admin-UA-create.php" method="post">

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <input type="number" id="user_id" name="user_id" readonly>
                    <label>User-id</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon>
                    </span>
                    <input type="text" id="first_name" name="first_name">
                    <label>First Name</label>
                </div>

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person-outline"></ion-icon> 
                    </span>
                    <input type="text" id="last_name" name="last_name">
                    <label>Last Name</label>
                </div>

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" id="email" name="email">
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" id="password" name="password">
                    <label>Password</label>
                </div>

                <div class="student-teacher">
                    <label>
                        <input type="radio" name="type" value="student">Student
                    </label>
                    <label>
                        <input type="radio" name="type" value="faculty">Faculty
                    </label>
                </div>

                <button type="submit" class="btn" name="edit_user_btn">Save Changes</button>
            </form>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>