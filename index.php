<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
<title><?php the_title(); ?> - Under The Hundred</title>
  
  <!--META TAGS-->
    <meta http-equiv="Content-Type" content="text/html;   charset=UTF-8"/>
           <meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="apple-mobile-web-app-title" content="UTH" />
    <meta name="author" content="Hidde van der Ploeg"/>
    <meta http-equiv="imagetoolbar" content="no"/>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
            <meta name="description" content="The best place to go for affordable design products. Always under the hundred." />
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <meta property="og:title" content="Under the hundred today: <?php the_title(); ?>" /> 
        <meta property="og:image" content="<?php the_field('main_image'); ?>" /> 
        <meta property="og:description" content="<?php the_content(); ?>" /> 
      <?php endwhile; else: ?><?php endif; ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
         
<!--WEBFONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600,300' rel='stylesheet'
          type='text/css'>

    <!--ICONS-->
    <link rel="image_src" href="http://www.underthehundred.com/apple-touch-icon-precomposed.png" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
        
        
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39943196-1', 'underthehundred.com');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
    $(document).ready(function() {
            document.onkeydown = function() 
                {
                    var j = event.keyIdentifier;
                    
                    if (j == "Right" && nextUrl != null) {
                      window.location = nextUrl;
                    }
                        
                    else if (j == "Left" && prevUrl != null) {
                        window.location = prevUrl;           
                    } 
                 }
                   });

      $(document).ready(function() {
                    var nextPage = $(".prevP")
                    var prevPage = $(".nextP")
                    nextUrl = nextPage.attr("href")
                    prevUrl = prevPage.attr("href")
                });

</script>
    </head>
    <body <?php body_class(); ?>>




        
    
<div id="maincontainer"> <!--CONTAINER-->
   <div id="content"><!--CONTENT-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="imagecont"> 
  <!-- 
  <p>Title: <?php echo get_permalink( $post->ID ); ?></p>-->

  <?php
  $previous_post_obj  = get_adjacent_post( '', '', true );
  $previous_post_ID = isset( $previous_post_obj->ID ) ? $previous_post_obj->ID : '';
  $previous_post_link     = get_permalink( $previous_post_ID );
  ?>
  <a href="<?php echo $previous_post_link; ?>" rel="next" class="nextP">
      
  </a>


<!-- <a href="/<?php previous_post(); ?>" class="prevP"> </a>
<?php echo next_post_link(); ?>
 -->
    <a href="<?php the_field('Url_of_the_product'); ?>"><img src="<?php the_field('main_image'); ?>" alt="<?php the_title();?>"/></a>
       </div>
       <div id="info">
          <?php the_title(); ?>     
          <h2><?php the_date(); ?></h2>
          <?php
$categories = get_the_category();
$output = '';
if($categories){
  foreach($categories as $category) {
    $output .= '<a  class="category" href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
  }
echo trim($output, $separator);
}
?> 
       </div>        
              <?php the_content(); ?>
               <a class="buttonbuy" title="<?php the_field('Title_of_the_url_product'); ?>" href="<?php the_field('Url_of_the_product'); ?>" target="_blank">Buy now for <strong>&euro;&nbsp;<?php the_field('Price_of_the_product'); ?></strong> </a>
              <h2><?php the_field('Title_of_the_url_product'); ?></h2>

             
        </div><!--END CONTENT-->
 <?php endwhile; else: ?><?php endif; ?>
<div class="red"><!--RED-->
   <div class="container">
      <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" width="120" height="120" class="logo"/>
      <h3>About us</h3>
      <p class="about">We love great design. But who doesn't? We asked ourselves this question too, so we're introducing <strong>Under The Hundred</strong>. A place where great design is curated and for a 100 euros or less, as we believe great design shouldn't have to cost much. And, everyone likes to have a little spare change left come the end of the month. You’ll find a different piece of design, every day. We are <strong>Under The Hundred</strong>.<br/><br/>Cool as a cucumber.
      </p><br/>
<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Funderthehundred&amp;send=false&amp;layout=button_count&amp;width=200&amp;show_faces=false&amp;font=lucida+grande&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=245180315522840" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:21px;" allowTransparency="true"></iframe>
   </div><!-- container -->
</div><!--END RED-->

<?php get_footer(); ?>