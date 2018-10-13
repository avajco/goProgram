<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: ../../login.php");
    exit();
}
else{
 include '../../../bars/userbar.php';   
}?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>loged in as admin</h1><br>
    <p>welcome <?php echo $_SESSION['user_name']?></p>
<!--     <a href="../../../includes/logout.php" name="logout" method="POST">logout</a>
 -->
 <script>
    
</script>
</body>
</html>