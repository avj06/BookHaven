<?php 

    require 'db.php';

    if(isset($_POST['edit_user_btn'])){
        $userid = $_POST['user_id'];
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $type = $_POST['type'];

        $sql_query = "UPDATE users
                      SET f_name = '$fname', l_name = '$lname', email = '$email', password = '$password', type = '$type'
                      WHERE user_id = $userid";

        if($con -> query($sql_query)==TRUE){
            header("Location: ../admin-UA.php?success=1");
        } else{
            echo "Error: " . $con -> error;
        }
    }

?>