<?php 
session_start();
if(isset($_POST['search'])){
    $search = $_POST['search'];
    include "../../../includes/database.inc.php";
    $sqlres = mysqli_query($conn, "SELECT * from artist where artist.artist_name LIKE '%$search%' ") or die("could not execute sql ". mysqli_error($conn));
    while($row = mysqli_fetch_assoc($sqlres)){
        echo "<div class='artist_div'><p class='artist' id ='"  . $row['artist_id'] . "'>". $row['artist_name'] ."</p>" .
       "<button id=" .$row['artist_id'] . ">"."Add</button>" . "<button id=" . $row['artist_id'] . ">details" . "</button>" .
        "</div>";   
    }

}

?>