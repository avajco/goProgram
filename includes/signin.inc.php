<?php
session_start();
if(isset($_POST["sign-in"])){
    echo "signed in";
    include_once('./database.inc.php');
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    #check for errors
    if(empty($email) || empty($password)){
        header("Location: ../pages/login.php?signin=empty");
        exit();
    }else{
       $sqlreq = mysqli_query($conn,"SELECT * FROM users where users.email = '$email'") or die("could not execute query " . mysqli_error($conn));
       if(mysqli_num_rows($sqlreq) > 0){
            $row = mysqli_fetch_assoc($sqlreq);
             #dehash password
            $hashed_verify =  password_verify($password, $row['password']);
            if($hashed_verify == false){
                header("Location: ../pages/login.php?signin=error");
                 exit();
            }elseif($hashed_verify == true){
               // user login
               $_SESSION['user_name'] = $row['name'];
               $_SESSION['user_email'] = $row['email'];
               $_SESSION['user_id'] = $row['id'];
               $_SESSION['user_role'] = $row['role'];
               //check role
               if($row['role'] == 1){
               header("Location: ../pages/u/a/welcomepage.php");
            }elseif($row['role'] == 0){
                header("Location: ../pages/u/r/welcomepage.php"); 
            }
    }
    }else{
        #account does not exit.
        header("Location: ../pages/login.php?signin=error");
    }
    }
}else{
    #signin button not clicked.
    header("Location: ../pages/login.php");
    exit();
}

?>