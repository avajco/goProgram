<?php
session_start();
if(!isset($_SESSION['user_id'])){
   header("Location: ../pages/index.php");
}else{
    if(isset($_POST['submit'])){
       #if the submit button is pressed 
       
     $count =  $_POST['featCount'];
     if($count == 0){

     }else{
     $i=0;
     while($count > $i){
         $i += 1;
        echo $_POST[$i];
        #for every feature add them on a feature table
        /**
         * song_id
         * artist_id
         */
     }
    }
    }elseif(isset($_POST['cancel'])){
        #if the cancel button is pressed 
        echo "you entered cancel";
    }else{

    }
}





?>