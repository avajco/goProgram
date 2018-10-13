<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="../../../bars/userBarADCss.css" >
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <style>
    /* body{
        padding:0px;
        margin:0px;
    }
    .header{
    padding:10px;
    margin: 0px;
    background-color:white;
    }
    li{
    display:inline; 
    padding:20px;

    }
    li a{
        text-decoration:none;
        text-align:center;
        color:black;
    }
     
    li:not(.brand){
     float:right;
    } 
    li a img{
        width:40px;
        height:40px;
        
    }

    li a:hover:not(.brand){
         color:lightgrey;
    }
    .icon{
        display:none;
    } */
     </style>
</head>
<body>
        <ul class="header" id="headerId">
        <li class="brand"> <a href="#"><img src="../../../images/logo.png" alt="brand*~*"></a></li> 
        <li><a href="../../../includes/logout.php?logout=0" method="POST">logout</a></li>  
        <!--my action dropdown-->
        <li><a href="#" onclick="changedrop()" >actions<i class="fa fa-angle-down" id="drop"></i></a>
        <ul class="dropdownopts" id="dropdownopt">
           <li> <a href="./addsongs.php">add song</a></li>
        </ul>
        </li>
        <li><a href="#">search</a></li>  
        <li><a href="#">Profile</a> </li>
        <li class="icon"><a href="javascript:void(0);"  onclick="myFunction()"><i class="fa fa-bars"></i></a></li>
    </ul>

<script>

    function myFunction(){
        var x = document.getElementById("headerId");
        if(x.className === "header"){
            x.className += " responsive";
            //alert(x.className);
        }else{
            x.className ="header";
           // alert(x.className);
        }
    }


    function changedrop(){
        var sign = document.getElementById("drop");
        var opt = document.getElementById("dropdownopt");
          if(sign.className === "fa fa-angle-down"){
              sign.className = "fa fa-angle-up";
              document.getElementById("dropdownopt").style.display = "block";
          }else{
              sign.className = "fa fa-angle-down";
              document.getElementById("dropdownopt").style.display ="none";
          }
             alert("changed to" + " " + sign.className + "  " + opt.className  );

        }
    </script>
    </body>
</html>