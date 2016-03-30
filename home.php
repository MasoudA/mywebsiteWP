<?php get_header(); ?>
	    <header class="sb-page-header" >
			<div class="container">
	    		<h1>Blog</h1>
	    		<p>Read my professional and non-professional life experiences...</p>
	    	</div>
    	</header>
	    <div id="posts">
        	<div class="container">
            	<div class="row">
                	<div class="col-md-8">
                        <div id="posts" class="well text">
        		       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <!-- <div <?php post_class(); ?>> -->
                        <div class="row">
                            <div class="col-md-12">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                                    <h2><?php the_title();?></h2>
                                </a>
                                <p class="meta">
                                    <?php echo mywebsite_posted_on();?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <?php // Post thumbnail conditional display.
                            if ( mywebsite_autoset_featured_img() !== false ) : ?>
                                <div class="col-md-3">
                                    <a href="<?php the_permalink(); ?>" title="<?php  the_title_attribute( 'echo=0' ); ?>">
                                        <?php echo mywebsite_autoset_featured_img(); ?>
                                    </a>
                                </div>
                                <div class="col-md-9">
                            <?php else : ?>
                                <div class="col-md-12">
                                <?php endif; ?>
                                        <?php the_excerpt(); ?>
                                </div><!-- /.clmn -->
                            </div><!-- /.row -->

                            <hr/>
                        <!--</div> /.post_class -->
                    <?php endwhile; endif; ?>

                        <?php mywebsite_content_nav('nav-below');?>
                    </div>

                    </div>
                	<div class="col-md-4">
                		<?php get_sidebar(); ?>	
                	</div>
            	</div>
        	</div>
    	</div>
	</div>
</header>

<?php get_footer(); ?>