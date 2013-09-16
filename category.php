<?php get_header(); ?>
<div id="maincontainer">

<!--CONTAINER-->
<div class="red"><!--RED-->
<a href="/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" width="120" height="120" class="logo"/></a>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container">
        <h7><?php single_cat_title(); ?></h7>
        <p class="cat_des">
 <?php echo category_description( $category_id ); ?>         
        </p>
    </div>
<?php endwhile; else: ?><?php endif; ?>
</div><!--END RED-->
<div id="responsive"> 
<div id="itemcontainer">

<?php

  global $wp_query;
$cat_ID = get_query_var('cat');

$args = array( 'numberposts' => -1, 'orderby' => 'post_date', 'category' =>  $cat_ID );
$postslist = get_posts($args);
foreach ($postslist as $post) :  setup_postdata($post); ?> 
    <div class="archiveitem">
    	 
            
            <a href="<?php  the_permalink(); ?>"><img src="<?php the_field('main_image'); ?>" alt="<?php the_title(); ?>"/></a><strong><?php the_title(); ?></strong><br/> <h2><?php the_date(); ?></h2>
                </div>
<?php endforeach; ?>


</div>
</div>
<div class="red">
<a href="/" class="home">Back</a>           
</div>

<div id="footer"><!--FOOTER-->
            <div id="footercont">
                    <ul id="footerlinks">
                  
					<li><a href="/archive" alt="Archive" class="arc"></a></li>
					<li><a class="rss" href="mailto:weare@underthehundred.com?SUBJECT=Hello. I have something under the hundred." alt="Mail"></a></li>
					<li><a href="http://www.twitter.com/underthehundred" alt="Twitter" class="twr" target="_blank"></a></li>
					<li><a href="https://www.facebook.com/underthehundred" alt="Facebook" class="fb" target="_blank"></a></li>	

                    </ul>
            </div>
        
    </div><!--END OF FOOTER-->





                    
         
         
          </div><!--END OF CONTAINER-->        

</body>
</HTML>


