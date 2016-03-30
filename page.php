<?php get_header(); ?>
<?php if ( have_posts() ) :?>
 		
	    <header class="sb-page-header" >
			<div class="container">
	    		<h1><?php the_title(); ?>  
	    		<p></p>
	    	</div>
    	</header>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="row">
                        <div class="col-md-12">
                	     <?php the_content(); ?>
                         </div>
                     </div>
                    <?php endwhile;?>
                </div>
                <div class="col-md-4">
                    <?php get_sidebar(); ?>	
                </div>
            </div>
        </div>	    
<!-- <? else: ?>
    <p><?php _e('Sorry, This page does not exist'); ?></p> -->
<?php endif; ?>

<?php get_footer(); ?>




