
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>    
	<title>Garden View Guest House | Contact Us</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<link href="includes/global.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="includes/jquery.min.js"></script>     
	<script type="text/javascript" src="includes/jquery.lavalamp.js"></script>    
	<script type="text/javascript" src="includes/jquery.easing.min.js"></script>
	<script type="text/javascript">       
$(function() {            
$("#lamp").lavaLamp({                
fx: "backout",                 
speed: 700,                
click: function(event, menuItem) {                    
return true;
}            
});            
});
        //For full source code, visit http://www.dynamicdrive.com
        
        var message="";
        ///////////////////////////////////
        function clickIE() {if (document.all) {(message);return false;}}
        function clickNS(e) {if
        (document.layers||(document.getElementById&&!document.all)) {
        if (e.which==2||e.which==3) {(message);return false;}}}
        if (document.layers)
        {document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
        else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}
        
        document.oncontextmenu=new Function("return false")
</script>
</head>
<body>    
<div id="wrapper">        
	 <div id="header">           
	  <h1><a href="index.html" title="Garden View Guest House">Garden View Guest House</a></h1>           
	  <div class="hdr_right">                
	   <div class="contact">                    
	    <span class="mailid"><a href="mailto:manager@gardenviewhotel.in">manager@gardenviewhotel.in</a></span>
                    <span class="phone"><a href="javascript:void(0);">+91-5362-221399, 242355</a></span>              
	   </div>                
	   <div class="topnav">                    
		<ul class="lavaLamp" id="lamp">                       
		 <li><a href="index.html">Home</a></li>                       
		 <li><a href="location.html">Location</a></li>                        
		 <li><a href="accommodation.html">Accommodation</a></li>                       
		 <li><a href="siteseeing.html">Siteseeing</a></li>                       
		 <li><a href="dining.html">Dining</a></li>                       
		 <li><a href="gallery.html">Gallery</a></li>                       
		 <li class="current"><a href="contact.html">Contact Us</a></li>                                   
        </ul>                
	   </div>            
	  </div>
     </div>
     <div id="container" class="inner">
	<div class="outerimg contactinner">
            <div class="mainimg"><img src="images/img_contact.jpg"/></div>
            </div>
	  <div class="lhs">
	   <div class="content">
		
	    <h2>Contact Us</h2>
	    <div  class="email">
	    <h3><strong>E-mail us @</strong> </h3>
			<p><strong>Reach Manager:</strong> <a href="mailto:manager@gardenviewhotel.in">manager@gardenviewhotel.in</a><br/>
			<strong>Send your feedback:</strong> <a href="mailto:sundeep@gardenviewhotel.in">sundeep@gardenviewhotel.in</a><br/>
			<strong>Contact Us:</strong> <a href="mailto:contactus@gardenviewhotel.in">contactus@gardenviewhotel.in</a>
		     </p>
	    </div>
	     <p><strong>GARDEN VIEW GUEST HOUSE</strong></p>
	     <p>1162, SIRWARA ROAD,</p>
	     <p>SULTANPUR - 228001.</p>
	     <p><strong>Telephone:</strong> +91 5362 242355</p>
	     <p><strong>Telephone:</strong> +91 5362 221399</p>
	     <div class="cont_bottom">
	     <p>We look forward to hearing from you. Your reviews and feedback help us to serve you better. It would be our Endeavour to meet your expectations and surpass them. We appreciate your thoughts and encourage you to use the form below. Please send us your valuable comments and suggestions</p>
	     </div>
<?php

$webmasteremailid = "sundeep@gardenviewhotel.in";

//define the receiver of the email
$to = "sundeep@gardenviewhotel.in";
//define the subject of the email
$subject = 'Contact mail from GardenVeiwHotel.in'; 
//define the message to be sent. Each line should be separated with \n
$message = "
      Mail from contact form in GardenViewHotel.in
      First Name = ".$_POST['firstname']."
      Last Name = ".$_POST['lastname']."
      Email Id = ".$_POST['cemail']."
      Country = ".$_POST['country']."
      Interested in receiving updates = ".$_POST['notify']."
      Commnets = ".$_POST['comments']."
"; 
//define the headers we want passed. Note that they are separated with \r\n
$headers = "From: ".$_POST['cemail']."\r\nReply-To: ".$_POST['cemail'];
//send the email
$mail_sent = @mail( $to, $subject, $message, $headers );
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
echo $mail_sent ? "Thanks for contacting us... We will get back to you soon" : "Mail sending failed";
?>


</div>
	  </div>
	  <div class="rhs">
	   <ul>
	    <li class="rhs_photo1 loc2"></li>
	    <li class="rhs_photo2 loc3"></li>
	   </ul>
	  </div>
	   <br class="clear" />
	 </div>
</div>
	 <div id="footer">
        
		<div class="footer_content">
            
		 <div class="foot_left">
<p>Copyright &copy; 2011, Garden View Guest House, All Rights Reserved</p>
           		 </div>            
		 <div class="foot_right"><p>| a Vabnix design</p></div>
	        </div>
    	 </div>
</body>
</html>

	
        