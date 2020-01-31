<?php

    //function to get the favourites movies of the users

    function showMovies($data){
        global $db, $userID;

        switch($data){
            case "favs":
                $stmt = $db ->prepare("SELECT * FROM movies
                    WHERE `movie_id` IN (
                        SELECT `movie_id` FROM `favourites`
                            WHERE `favourites`.`user_id` = ?
                    )
                ORDER BY `title`" );
                $stmt ->bind_param('i', $userID); 
                $tag = "li";
                break;
        }

        $stmt->bind_result($id, $title, $description);
        $stmt->execute();

    }

    if($tag == "li"){
        $output = "<ul class='favs'>";
    }else{
        $output =" ";
    }

?>