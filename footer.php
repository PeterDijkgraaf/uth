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
	<div class="ghost">
	<div class="white">
		<div class="formcont">
			<p class="mail">Would you like us to curate something you've come across?<br/> 
No problem. Just enter the url of the UTH object down below.</p>
			<form method="post" action="<?php bloginfo('template_directory'); ?>/form.php">
			
		<input type="text" size="18" value="" name="url" id="uth_mv_EMAIL" class="uth_input" placeholder="Enter your URL..."><input type="submit" name="versturen" id="uth_signup_submit" value="Submit" class="button">
	</form>		</div>
	</div>
        </div>            
         
         
          </div><!--END OF CONTAINER--> 
          <div class="skimlinks">
           <script type="text/javascript" src="http://s.skimresources.com/js/53930X1298244.skimlinks.js"></script> 
          </div>
<script type="text/javascript">
$(document).ready(function(){

	 console.log ( "<?php echo $url; ?>" ); 
    // if (<?php echo $url; ?> == location.href) {
    //     alert('that ss the same page');
    // } else {
    // }
    // alert(<?php echo $url; ?>);
});
</script>

<script type="text/javascript"> 
if("<?php ($url == $next_post_link) ?>"){
    document.getElementsByClassName('prevP').style.display = "none"; }
</script>

<script type="text/javascript">
  var GoSquared = {};
  GoSquared.acct = "GSN-126430-F";
  (function(w){
    function gs(){
      w._gstc_lt = +new Date;
      var d = document, g = d.createElement("script");
      g.type = "text/javascript";
      g.src = "//d1l6p2sc9645hc.cloudfront.net/tracker.js";
      var s = d.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(g, s);
    }
    w.addEventListener ?
      w.addEventListener("load", gs, false) :
      w.attachEvent("onload", gs);
  })(window);
</script>
</body>
</HTML>