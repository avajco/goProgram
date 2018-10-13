<?php
/**
 * songs db schma(song_id, song_title, song_img, song_lenght, song_type, add_by, song_file, year_recorded, date_added, numb_of_featur, assoc_album,artist,artist_id, count_listen)
 * song_id =>the songs id, important
 * song_img => image file, not important but useful
 * song_lenght=>duration, important
 * song_type=>genre, important
 * add_by: important will help track songs history,can be admin/associate, the artist .. no more
 * song_file=> important, the audio file, full path should not be added to the db for security reasons
 * year_recorded=> important, when the song was recored, important f
 * date_added=> important, current_time_stamp 
 * numb_of_feature=>  important, default: 0
 * assoc_album=> not very important, a group of songs associated as a group, when it is associated with an album, do an automatic categoriation
 * #year_recorded, song_img should match album if it exits (**note more thought has to given to this part of the work when designing the album schma)
 * artist=>name, important.
 * artist_id=>important 
 * count_listen=> important,  song stats
 */
session_start();
if(!isset($_SESSION['user_id'])){
header("Location: ../../index.php");
exit();
}else{
    #includes files
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- java jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="./addSongQuery.js"></script>
   <style>
    .main{
        width:100%;
        height:100%;
    }
    ul{
          text-decoration:none;
    }
    i:hover{
        color:red;
        cursor:pointer;
    }
    .main3{
        display: none;
        position: absolute;
        right:0;
        top:0;
        width:48%;
        height:100%;
    }
    .main2{
        position:absolute;
        left:0;
        top:0;
        width:50%;
        height:100%;
    }
    .artist{
        cursor:pointer;
    }
    .artist_div{
        background:grey;
    }
    </style>
</head>
<body>
    <div class="main">
        <div class="main2">
            <ul>
                <li>added by: <input class="addedby" type="text" name="added" readonly value="<?php echo $_SESSION['user_name']?>"></li>
                <li>artist name:    <input  id="Aname" type="text" required   autofocus></li>
                <li>album name:     <input id="ABname"type="text"  required name="album_name"></li>
                <li>year:           <input class=""type="month" required name="year" ></li>
                <li>song image:     <input type="file" required name="Img_file" ></li>
                <li>song file:       <input type="file" required name="song{_file" ></li>
                <li>genre:          <input type="text" required name="genre" ></li>
                <li>song lenght     <input type="number" required  min="5" max="240" ></li>
                <big id="features" data-last="0">features</big>
                <div id="features_space">
               </div>
               <li><input type="button" onclick="slideOpen()" value="slide open"></li>
               <li><input type="text" id="featCount" readonly name="featCount" value="0"></li>
                <li><input type="button" onclick="add_features()" value="more features"> </li>
                <li><input type="button"  id="submit" name="submit" value="complete"><input type="submit" name="cancel" value="cancel"><input type="reset"></li>
            </ul>
        </div><!--end of main2-->
      <div class="main3" id ="result">
                    
      
      </div><!--main3-->


    </div><!--end of main-->

<script>
    
    function add_features(){
        var features = document.getElementById("features");
        var last_feat = features.getAttribute("data-last");
        var features_space = document.getElementById("features_space");
        var featCount = document.getElementById('featCount');
        var num_last_feat = parseInt(last_feat) + 1;
        features.setAttribute("data-last", num_last_feat);
        var new_feat_li = document.createElement('li');
        var new_feat_input = document.createElement('input');
      //  var new_feat_cancel = document.createElement('input');
        var new_feat_icon_i = document.createElement('i');
        new_feat_icon_i.setAttribute("class", "fa fa-close");
       // new_feat_cancel.setAttribute("type", "button");
       new_feat_input.setAttribute("name",num_last_feat);
       new_feat_input.setAttribute("required","");
        new_feat_li.appendChild(new_feat_input); 
        //new_feat_cancel.appendChild(new_feat_icon_i);
        new_feat_li.appendChild(new_feat_icon_i);
        features_space.appendChild(new_feat_li);
        featCount.setAttribute("value", num_last_feat);
        new_feat_input.addAtrrribute("name", num_feat_input);
        alert(num_last_feat);
    }
</script>
</body>
</html> 