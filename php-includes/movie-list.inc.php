<?php $favsList = showNonFavs('non_favs'); ?>
        <section class="movie_list">
            <h2>Hi, (username will appear here)</h2>
            <p class="welcome">Here are some movies you might like.
            Click on the heart icon to add them to your favourites list.</p>
           
            <ul>
               
				<?php echo $favsList; ?>
               
            </ul>
       
       
        </section>
        