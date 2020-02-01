<?php

    if(isset($_GET['data'])){
            $data = $_GET['data'];
    }

    function addRemoveFavourites($data){
        global $db, $userID, $movieID;
        switch($data){
            
            case "Add to Favourites": 
                $stmt = $db->prepare("INSERT INTO `favourites` (user_id, movie_id) VALUES (?, ?)");
                $stmt->bind_param('ii', $userID, $movieID);        
            break;  

            case "Remove from favorites":
                $stmt = $db->prepare("DELETE FROM `favourites` WHERE `movie_id` = ?");   // DELETE ... FROM ... WHERE
                $stmt->bind_param('i', $movieID);    // 'i' for integer; only parameter is $id        
            break;
        }
     
        $stmt->execute();               
        $stmt->close();                 
        
    }

?>