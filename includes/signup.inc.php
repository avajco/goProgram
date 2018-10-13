<?php
//check if sign-up button is clicked
if(isset($_POST['signup'])){
 include_once("../includes/database.inc.php");
 $name = mysqli_real_escape_string($conn,$_POST['username']);
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $password = mysqli_real_escape_string($conn, $_POST['password']);
 $confirmpassword = mysqli_real_escape_string($conn,$_POST['confirmpassword']);
 //error handlers 
 if(empty($name)||empty($email)||empty($password)||empty($confirmpassword)){
    header("Location: ../pages/login.php?signup=empty");
    exit();
 }else{
     //check input characters are valid
     if(!preg_match("/^[a-zA-Z]*$/", $name)){
        header("Location: ../pages/login.php?signup=invalid_name");
        exit();
     }else{
         //check if email is valid 
         if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../pages/login.php?signup=invalid_email");
            exit();
         }else{
             //if user email exist
             $sqlreq = mysqli_query($conn, "SELECT * FROM users WHERE users.email= '$email'") or die("could not execute query ". mysqli_error($conn));
             if(mysqli_num_rows($sqlreq)>0){
                header("Location: ../pages/login.php?signup=users_exits");
                exit();
             }else{
                 $hashedpassword = password_hash($password,PASSWORD_DEFAULT);
                 //insert into database
                 mysqli_query($conn, "INSERT INTO users (users.name, users.email, users.password) values ('$name', '$email','$hashedpassword')") or die("could not execute query ". mysqli_error($conn));
                 header("Location: ../pages/login.php");
                 exit();
                }

         }
     }
 }
}else{
    header("Location: ../pages/login.php");
    exit();
}

?>