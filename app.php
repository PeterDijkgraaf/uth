<?php get_header(); ?>
<div id="maincontainer">

<!--CONTAINER-->

<div id="responsive"> 
<div id="itemcontainer">

<?php
$args = array( 'numberposts' => -1, 'orderby' => 'post_date' );
$postslist = get_posts( $args );
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





