<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<HTML lang="nl" xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl">
<head> 

 <!META TAGS>
 	<meta http-equiv="Content-Type" content="text/html;   charset=UTF-8" />       
 	<meta name="author" content="Hidde van der Ploeg" />
 	<meta http-equiv="imagetoolbar" content="no" />
 	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
 	<meta name="description" content="###">
 <!TITLE>
	<title>Under The Hundred</title>

 <!ICONS>
 	<link rel="apple-touch-icon-precomposed" href="###"/>
 	<link rel="apple-touch-icon-precomposed" media="screen and (resolution: 326dpi)" href="###" />
 	<link rel="SHORTCUT ICON" href="###" type="image/x-icon" />

 <!CSS>
        <link rel="stylesheet" type="text/css" href="http://www.underthehundred.com/wp-content/themes/underthehundred/style.css" />

          
<!--WEBFONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600,300' rel='stylesheet'
          type='text/css'>
</head>
       


    <body>




        
    
<div class="red"><!--RED-->
<?php
$naar = 'ihavesomething@underthehundred.com'; // Waar moet het naartoe?
$onderwerp = 'New Curated URL'; // Het onderwerp van het bericht
 
// Header instellen, zodat nl2br() werkt
$headers = "MIME-version: 1.0\r\n"; 
$headers .= "content-type: text/html;charset=utf-8\r\n";
 
if(isset($_POST['versturen'])) // Als het formulier verzonden is door op de verzend knop te klikken
{
	
	$url = trim($_POST['url']); // Alle overbodige spaties uit het bericht veld verwijderen
	$fout = false; // Om te kijken straks of er wat fout is
 
	if(empty($url)) // Als het bericht veld niet is ingevuld
	{
		print '<p>Oh Snap!</p>';
		$fout = true;
	}
 
	if($fout == false) // Als er niks fout is (alles is dus netjes ingevuld)
	{
		
 
		if(mail($naar, $onderwerp, nl2br($url)))
		{
			echo( '

      <h6>Thanks for curating!</h6>
      <p class="error">We will see if its cool enough for Under The Hundred.
      </p>
      <a href="http://www.underthehundred.com" title="Back to the Homepage" alt="Home" class="home">Back</a>	      	

');
		}
		else
		{
			print '<p>Helaas, er is wat fout gegaan tijdens het verzenden van het formulier.</p>';
		}
	}
}
?>
</div><!--END RED-->

     	</div><!--END CONTENT-->
        
         
          </div><!--END OF CONTAINER-->        

</body>
</HTML>