<div class="content-page-container" id="c2">
	<div class="content-page-block">
		<div id="content-page-block-text-bio">
            <?php
                if( have_posts() ){
                    while( have_posts() ){
                        the_post();
                        the_title('<h1>', '</h1>');
                        the_content(); 

                    }
                }
            ?>  
	    </div>
    </div>
</div>

