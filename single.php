<?php
/**
 * Default Post Template
 * Description: Post template with a content container and right sidebar.
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
  <header class="sb-page-header" >
        <div class="container">
            <h1><?php the_title();?></h1>
        </div>
    </header>
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if (function_exists('mywebsite_breadcrumbs')) {
            mywebsite_breadcrumbs();
        } ?>
        </div><!--/.span12 -->
    </div><!--/.row -->

    <!--<header class="post-title">
        <h1><?php the_title();?></h1>
    </header> -->

    <div class="row content">
        <div class="col-md-9">
             <p class="meta"><?php echo mywebsite_posted_on();?></p>
            <?php the_content(); ?>
            <?php the_tags('<p>Tags: ', ', ', '</p>'); ?>
            <?php endwhile; // end of the loop. ?>
            <hr/>
        </div><!-- /.span8 -->
         <div class="col-md-3">
             <?php get_sidebar(); ?> 
         </div>
     </div>
    <div class="row">    
        <div class="col-md-9">        
        <?php mywebsite_content_nav('nav-below'); ?>  
        <?php comments_template(); ?>
        </div>
        <div class="col-md-3">
        </div> 
    </div> 
</div>
    <?php get_footer(); ?>