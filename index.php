<!doctype html>
<html>
<?php $title = "Home | YouthCorp"; include 'head.php'; ?>

<body>
<?php

include_once("analyticstracking.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	if($_POST['sf_email'] == true) {
		$field_email = $_POST['sf_email'];
		
		$mail_to = 'joinus@theyouthcorp.org';
		$subject = 'New Subscriber!';
		
		$body_message .= 'E-mail: '.$field_email."\n";
		
		$headers = 'From: '.$field_email."\r\n";
		$headers .= 'Reply-To: '.$field_email."\r\n";
		
		if (!empty($field_email)) {
		$mail_status = mail($mail_to, $subject, $body_message, $headers);
		}
		
		if ($mail_status) { ?>
			<script language="javascript" type="text/javascript">
				alert('Thanks for subscribing!');
				window.location = 'index.php';
			</script>
		<?php
		}
		else { ?>
			<script language="javascript" type="text/javascript">
				alert('Subscription failure. Did you enter an email?');
				window.location = 'index.php';
			</script>
		<?php
		}
	}
	else if($_POST['ju_name'] == true) {
		$joinus_name = $_POST['ju_name'];
		$joinus_age = $_POST['ju_age'];
		$joinus_location = $_POST['ju_location'];
		$joinus_email = $_POST['ju_email'];
		$joinus_org = $_POST['ju_org'];
		
		$mail_to = 'joinus@theyouthcorp.org';
		$subject = 'Member Request!';
		
		$body_message .= 'Name: '.$joinus_name."\n";
		$body_message .= 'Age: '.$joinus_age."\n";
		$body_message .= 'Location: '.$joinus_location."\n";
		$body_message .= 'E-mail: '.$joinus_email."\n";
		$body_message .= 'Organization: '.$joinus_org."\n";
		
		$headers = 'From: '.$joinus_email."\r\n";
		$headers .= 'Reply-To: '.$joinus_email."\r\n";
		
		if (!empty($joinus_email)) {
			$mail_status = mail($mail_to, $subject, $body_message, $headers);
		}
		
		if ($mail_status) { ?>
			<script language="javascript" type="text/javascript">
				alert("Thanks for the request! We'll get back to you shortly.");
				window.location = 'index.php';
			</script>
		<?php
		}
		else { ?>
			<script language="javascript" type="text/javascript">
				alert('Request failed. Did you enter text into the fields?');
				window.location = 'index.php';
			</script>
		<?php
		}
	}
}
?>
<div id="darken" onClick="hideDarken('darken','mainlogin');"></div>
<div id="darkentwo" onClick="hideDarken('darkentwo','maindonate');"></div>
<div id="top">
    <a href="index.php">
    <img id="logo" src="images/logo.png">
    <h1 id="logoname"><!--<span style="font-family:opensans-bold">-->Youth<!--</span><span style="font-family:opensans-light">-->Corp<!--</span>--></h1>
    </a>
    <ul>
        <a href="about.php"><li>ABOUT</li></a>
        <a href="who.php"><li>WHO ARE WE?</li></a>
        <a href="members.php"><li>MEMBERS</li></a>
        <a href="blog.php"><li>BLOG</li></a>
        <a href="events.php"><li>EVENTS</li></a>
        <a href="contact.php"><li>CONTACT US</li></a>
        <li id="joinus" onClick="showLogin('mainlogin','darken');">Join Us</li>
    </ul>
    <div id="message">
    	<span style="font-family:opensans-light!important">WORK</span> TOGETHER<br><span style="font-family:opensans-light!important">TO</span> CHANGE <span style="font-family:opensans-light!important">THE</span> WORLD
    </div>
    <div id="messagejoinus" class="fadeIn" onClick="showLogin('mainlogin','darken');">Join us</div>
</div>
<div id="yellow">
	<h1 id="helpout">What can you do?</h1>
    <ul>
  		<li onClick="showLogin('mainlogin','darken');"><span style="color:#123D52!important">01/</span> ADD YOUR ORGANIZATION</li>
        <li id="helptwo"><span style="padding:17px;border:1px solid #123D52;border-radius:2px;background-image:url(images/connect.png);background-size:contain;"><span style="color:#123D52!important">02/</span> CONNECT WITH OTHERS</span></li>
        <li><span style="color:#123D52!important">03/</span> WORK TOGETHER</li>
    </ul>
</div>

<div id="currentprojects">
	<h1 class="title">NOTABLE PROJECTS</h1>
    <a href="members.php"><h1 class="titleright">VIEW ALL ></h1></a>
    <div class="project" id="projectleft" style="float:left;margin-left:200px;clear:both;">
    	<div class="projectleft">
             <h1>FISTULA</h1>
             <p>One of our founders, Pretty Purposeful, is doing something awesome. Check them out.</p>
             <a target="_blank" href="http://prettypurposeful.org"><div>
             	More details
             </div></a>
        </div>
        <div class="projectright" style="background-image:url(images/Fistula.png);background-size:cover;">
        </div>
    </div>
    <div class="project" id="projectright" style="float:right;margin-right:200px;">
    	<div class="projectleft">
        	<h1>CORRUPTION</h1>
            <p>Corruption is a big issue in the US. Check out how Greenhouse, one of our founders, is playing its part.</p>
            <a target="_blank" href="http://allaregreen.us"><div>
            	More details
            </div></a>
        </div>
        <div class="projectright" style="background-image:url(images/boehner.png);background-size:cover;">
        </div>
    </div>
</div>
<h1 id="wherearewe" class="title" style="position:absolute;margin:-10px 0px 25px 200px;">WHERE ARE WE?</h1>
<iframe style="width: calc(100% - 400px);display:block;margin:0px auto;margin-top:50px;margin-bottom:70px;" height='250px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/nickrubin.k42llhmp/attribution,zoompan,geocoder,share.html?access_token=pk.eyJ1Ijoibmlja3J1YmluIiwiYSI6InduWTU3MTQifQ.-uvHxAZUG7-SUUdAUewHCA'></iframe>
<div id="events">
	<div id="eventbox">
    	<h1>FEATURED MEMBERS   <span style="position:absolute;margin-left:175px;margin-top:8px;color:#999999!important;font-family:opensans-regular;font-size:18px;z-index:9999;"><a href="members.php">All ></a></span></h1>
    	<div class="eventactive event" id="event3" onClick="switchEvent('event3');">
        	<img src="images/pulpit_logobw.png" style="width:60px;height:60px;float:left;margin:14px;">
            <p><span style="font-family:opensans-light;color:#999999;font-size:17px;">
            Doha, Qatar
            </span><br>
            The Pulpit
        </p></div>
        <div class="event" id="event2" onClick="switchEvent('event2');">
        	<img src="images/pp_logo.png" style="width:60px;height:60px;float:left;margin:14px;">
            <p><span style="font-family:opensans-light;color:#999999;font-size:17px;">
            Southlake, Texas
            </span><br>
        	Pretty Purposeful
        </p></div>
        <div class="event" id="event1" onClick="switchEvent('event1');">
        	<img src="images/greenhouse_logo.png" style="width:60px;height:60px;float:left;margin:14px;">
        	<p><span style="font-family:opensans-light;color:#999999;font-size:17px;">
            Seattle, Washington
            </span><br>
        	Greenhouse
        </p></div>
    </div>
    <h2 id="eventdate">Doha, Qatar</h2>
    <h1 id="eventtitle">The Pulpit</h1>
    <h3 id="eventtext">The Pulpit is an international youth publication that seeks to unite the knowledge, creativity, and literary talent of the world's youth through the world’s oldest common tongue – rhetoric. While it may be Qatar’s first and only online youth publication, The Pulpit is committed to helping aspiring writers find their voice – and providing a greater lectern for armchair veterans of the pen. The Pulpit serves to be a stage for the youth to debate, ideate and innovate new notions – and a nursery to nurture them into concrete ideas.</h3>
    <a id="orgsite" href="http://thepulpit.in" target="_blank"><div id="eventdetails">
    	Check it out >
    </div></a>
</div>
<div id="bottom">
	<h6>Latest blog entry - November 11th, 2014</h6>
    <a href="blog.php"><h1>Welcome to YouthCorp!</h1></a>
    <img src="images/blogone.png">
    <p id="blogpreview">What is YouthCorp, why was it formed, and who are we? Hear from our awesome founder Julia Myers in our first blog post.<br><br>
    <a href="blog.php"><span style="font-size:18px;text-decoration:underline;font-family:opensans-semibold;color:#2f4751;cursor:pointer;">Read it here ></span></a>
    </p>
    <!--<div id="blogbutton">
    	Read article 
    </div>-->
    <div id="subscribebox">
    	<h1>Newsletter Sign-up</h1>
        <form action="index.php" method="post" name="subscribeform">
        	<input autocorrect="off" name="sf_email" spellcheck="false" type="text" placeholder="Enter your email...">
        </form>
        <div id="subscribebutton" onClick="document.subscribeform.submit()">
        	<em>Subscribe</em>
        </div>
    </div>
    <div id="subscribebelow" onClick="showLogin('mainlogin','darken');">
    	Join us
    </div>
</div>
<?php include 'footer.php'; ?>
</body>

</html>
