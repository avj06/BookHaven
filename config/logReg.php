<?php

    @include 'db.php';
    // $host = "localhost";
    // $username = "root";
    // $password = "";
    // $db_name = "library management system";



    // $con = mysqli_connect($host, $username,$password,$db_name);

    // if(!$con){
    //     die("Connection Failed: ".mysqli_connect_error());
    // }

    if(isset($_POST['login_btn'])){
        $email = $_POST['login_email'];
        $password = $_POST['login_password'];

        if($email === '1@admin' && $password==='admin123'){
            session_start();
            header("Location: ../admin-DB.php");
            exit();
        } else {
            $sql_query = "SELECT * 
            FROM users 
            WHERE email='$email' AND password='$password'";

            $result = $con -> query($sql_query);

            if($result -> num_rows>0){
                session_start();
                $row=$result->fetch_assoc();
                $_SESSION['email']=$row['email'];
                header("Location: ../dash.php");
                exit();
            } else{
                echo "Incorrect Email or Password";
            }
        }    
    }

    if(isset($_POST['submit_reg'])){
        $reg_fname = $_POST['reg_fname'];
        $reg_lname = $_POST['reg_lname'];
        $reg_email = $_POST['reg_email'];
        $reg_password = $_POST['reg_password'];
        $reg_type = $_POST['type'];

        $checkEmail="SELECT * FROM users WHERE email ='$reg_email'";
        $emailResult = $con -> query($checkEmail);

        if($emailResult -> num_rows> 0){
            echo "Email Address Already Exists!";
            header("Location: ../index.php?error=email_exists");
            exit();
        } else {
            $sql_query = "INSERT INTO users(f_name, l_name, email, password, type)
            VALUES ('$reg_fname', '$reg_lname', '$reg_email', '$reg_password', '$reg_type')";

            if($con -> query($sql_query)==TRUE){
                header("Location: ../index.php?success=1");
            } else{
                echo "Error: " . $con -> error;
            }
        }
    }
?>