<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
<title>Under The Hundred</title>
	
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
        <meta property="og:description" content="The best place to go for affordable design products. Always under the hundred.t" />

<meta name="twitter:card" content="Different product, everyday.>">
<meta name="twitter:url" content="<?php echo get_permalink(); ?>"> 
<meta name="twitter:title" content="Under the hundred today: <?php the_title(); ?>">
<meta name="twitter:description" content="The best place to go for affordable design products. Always under the hundred.">
<meta name="twitter:image" content="<?php the_field('main_image'); ?>"> 
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

<script type="text/javascript">


$(document).ready(function() {


if(document.hasOwnProperty("referrer") && document.referrer.indexOf("webdesignerdepot") > -1 && location.pathname.indexOf("archive") > -1) { 


location.href = 'http://underthehundred.com/';


}


});


</script>
    </head>
    <body <?php body_class(); ?>>




        
    