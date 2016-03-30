<div class="well"> 
        <?php
            if (function_exists('dynamic_sidebar')) {
                dynamic_sidebar("home_right_1");
            } ?>
    <a href="<?php echo home_url().'\index.php\blog';?>">Back to Blog Home</a>
</div>