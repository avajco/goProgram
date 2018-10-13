<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: ../../login.php");
    exit();
}?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>welcom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>loged in as regular user</h1>
    <p>welcome <?php echo $_SESSION['user_name']?></p>
    <a href="../../../includes/logout.php" name="logout" method="POST">logout</a>
</body>
</html>