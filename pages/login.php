<?php
include_once "../bars/intro2.php";
include_once "../footer/footer.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <title>signin or signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
    .container{
        height:600px;
    }
     
    .sin{
        box-shadow: 2px 2px 4px #888888;
    }
    .header{
        text-align:center;
    }
    .forms{
        position:relative;
        top:5%;
    }
    </style> 
</head>
<body>
     <div class="container image">
     <div class="row forms justify-content-around">
      <div class="col-sm-4 sin">
      <h3 class="header">SIGN IN</h3>
      <form class="form-horizontal" action="../includes/signin.inc.php" method="POST">
      <div class="form-group">
      <label for="email" class="control-label col-sm-4">E-mail:</label>
      <div class="col-sm-10" >
      <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
      </div>
      </div><!--end of email-->
      <div class="form-group">
      <label for="password" class="control-label col-sm-2">password:</label>
      <div class="col-sm-10" >
      <input type="password" class="form-control" id="pwd" name="password" placeholder="password">
      </div>
      </div><!--end of password-->
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10" >
      <div class="checkbox">
      <label for=""><input type="checkbox">Remember me</label>
      </div>
      </div>
      </div><!--end of checkbox-->
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="sign-in" >sign in</button>
      <!--write jquery to sign in-->
      </div>
      </div>
      </form><!--end of form-->
      </div><!--end of signin-->
    <div class="col-sm-4 sin">
    <h3 class="header">SIGN-UP</h3><br>
    <form class="form-horizontal" action="../includes/signup.inc.php" method="POST">
    <div class="form-group"> 
    <label for="username" class="control-label col-sm-4">User Name:</label>
    <div class="col-sm-10">
    <input type="text" class"form-control" name="username" placeholder="Name">
    </div>
    </div>
    <div class="form-group">
    <label for="email" class="control-label col-sm-4">E-mail:</label>
    <div class="col-sm-10" >
      <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
      </div>
      </div>
      <div class="form-group">
      <label for="password" class="control-label col-sm-4">Password:</label>
      <div class="col-sm-10" >
      <input type="password" class="form-control" id="pwd" name="password" placeholder="Password">
      </div>
      </div>
      <div class="form-group">
      <label for="Conpassword" class="control-label col-sm-10">Confirm password:</label>
      <div class="col-sm-10" >
      <input type="password" class="form-control" id="pwd"  name="confirmpassword"placeholder="Confirm Password">
      </div>
      </div>
      <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default " name="signup" >sign-up</button>
      <!--write jquery to sign in-->
      </div>
      </div>
    </form>
    </div>
     </div><!--end of row-->
     </div><!--end of container-->
<!--Optional Javascript-->
<!-- jQuery first, then propper.js, then Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>