<?php
    
function testFav(){
    global $db, $userID, $movieID;
    
    $stmt = $db-> prepare ("SELECT * FROM movies
            WHERE `movie_id` IN ( SELECT movie_id FROM
             `favourites` WHERE `movie_id` = ? AND `user_id` = ?)");


    $stmt->bind_param('ii', $movieID, $userID);
    $stmt->execute();
    $stmt->store_result();
    $numrows = $stmt->num_rows;
  

    if ($numrows<1) {
      //  $stmt = $db -> prepare("INSERT INTO `test_db` ()");
      return("Add to Favourites");
    } else {
        return("Remove from favorites");
    }
    
    $stmt ->close();
  
}

?>