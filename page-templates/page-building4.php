<div class="content-page-container" id="c4">
	<div class="content-page-block">
		<div class="content-page-block-text">
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