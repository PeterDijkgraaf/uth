<?php get_header(); ?>
<div id="maincontainer">

<!--CONTAINER-->
<div class="red">
<a href="/" class="home" title="Home">Back home</a>
<div class="vleesboek">
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Funderthehundred&amp;send=false&amp;layout=button_count&amp;width=200&amp;show_faces=false&amp;font=lucida+grande&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=245180315522840" scrolling="no" frameborder="0" style="border:none; margin: auto;overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe>    
</div>       
</div>
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
<a href="/" class="home" title="Home">Back home</a>           
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





