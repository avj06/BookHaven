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
    <div class="form-box edit">

    <div class="wrapper">
        
    </div>

    <!-- <h2>Edit User</h2>
        <form action="" method="post">

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
    </div> -->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>