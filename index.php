<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Home | YC</title>
<link type="text/css" rel="stylesheet" href="styles/styles.css">
<link type="text/css" rel="stylesheet" href="styles/animations.css">
<script src="scripts/script.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
</head>

<body>
<div id="darken" onClick="hideDarken('darken','mainlogin');"></div>
<div id="darkentwo" onClick="hideDarken('darkentwo','maindonate');"></div>
<div id="top">
    <a href="index.php">
    <img id="logo" src="images/logo.png">
    <h1 id="logoname">YouthCorp</h1>
    </a>
    <ul>
        <a href="about.php"><li>ABOUT</li></a>
        <a href="who.php"><li>WHO ARE WE?</li></a>
        <a href="members.php"><li>MEMBERS</li></a>
        <a href="blog.php"><li>BLOG</li></a>
        <a href="events.php"><li>EVENTS</li></a>
        <a href="contact.php"><li>CONTACT US</li></a>
        <li id="joinus" onClick="showLogin('maindonate','darkentwo');">Join Us</li>
    </ul>
    <div id="message">
    	WE <span style="font-family:opensans-light!important">NEED</span> HELP<br>CHANGING <span style="font-family:opensans-light!important">THE</span> WORLD
    </div>
    <div id="messagejoinus" class="fadeIn" onClick="showLogin('mainlogin','darken');">Join us</div>
</div>
<div id="yellow">
	<h1 id="helpout">How can you help?</h1>
    <ul>
  		<li><span style="color:#123D52!important">01/</span> ADD YOUR ORGANIZATION</li>
        <li id="helptwo"><span style="padding:17px;border:1px solid #123D52;border-radius:2px;background-image:url(images/connect.png);background-size:contain;"><span style="color:#123D52!important">02/</span> CONNECT WITH OTHERS</span></li>
        <li><span style="color:#123D52!important">03/</span> WORK TOGETHER</li>
    </ul>
</div>
<div id="currentprojects">
	<h1 class="title">CURRENT PROJECTS</h1>
    <h1 class="titleright">VIEW ALL ></h1>
    <div class="project" id="projectleft" style="float:left;margin-left:200px;clear:both;">
    	<div class="projectleft">
             <h1>SONGXI, CHINA</h1>
             <p>Lorum ipsum dolor sit amet something. Lorum ipsum dolor sit amet. Lorum ipsum dolor sit amet.</p>
             <div>
             	More details
             </div>
        </div>
        <div class="projectright" style="background-image:url(images/man.jpg);background-size:cover;">
        </div>
    </div>
    <div class="project" id="projectright" style="float:right;margin-right:200px;">
    	<div class="projectleft">
        	<h1>DOHA, QATAR</h1>
            <p>Lorum ipsum dolor sit amet something. Lorum ipsum dolor sit amet. Lorum ipsum dolor sit amet.</p>
            <div>
            	More details
            </div>
        </div>
        <div class="projectright" style="background-image:url(images/greenhouse.JPG);background-size:cover;">
        </div>
    </div>
</div>
<div id="events">
	<div id="eventbox">
    	<h1>UPCOMING EVENTS   <span style="float:right;padding:8px 20px 0px 0px;color:#999999!important;font-family:opensans-regular;font-size:18px;">All ></span></h1>
    	<div class="eventactive event" id="event3" onClick="switchEvent('event3');"><p>
        	<span style="font-family:opensans-light;color:#999999;font-size:17px;">
            March 24, 2014
            </span><br>
            2014 Youth Conference
        </p></div>
        <div class="event" id="event2" onClick="switchEvent('event2');"><p>
        	<span style="font-family:opensans-light;color:#999999;font-size:17px;">
            March 25, 2015
            </span><br>
        	2015 Youth Conference
        </p></div>
        <div class="event" id="event1" onClick="switchEvent('event1');"><p>
        	<span style="font-family:opensans-light;color:#999999;font-size:17px;">
            March 26, 2016
            </span><br>
        	2016 Youth Conference
        </p></div>
    </div>
    <h2 id="eventdate">March 24, 2014</h2>
    <h1 id="eventtitle">2014 Youth Conference</h1>
    <h3 id="eventtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sagittis ligula sed consequat ultricies. Maecenas cursus, metus in molestie venenatis, magna velit aliquet augue, in rhoncus purus nulla non nulla.
    <br><br>Aenean pretium sapien sed sollicitudin tincidunt. Vivamus accumsan nisi ac nulla aliquam convallis. Donec facilisis diam sit amet hendrerit eleifend. Phasellus posuere tortor quis lorem ultrices pharetra.
    Praesent laoreet lacinia orci a suscipit.</h3>
    <div id="eventdetails">
    	Event details >
    </div>
</div>
<div id="bottom">
	<h6>Latest blog entry - October 11th, 2014</h6>
    <h1>Let's Talk About Cancer...</h1>
    <img src="images/blogshot.png">
    <p id="blogpreview">Everyone gets cancer. It may be a loved one. It may be a dog. But, talking about it is something that everyone should do...<br><br>
    <span style="font-size:18px;text-decoration:underline;font-family:opensans-semibold;color:#2f4751;cursor:pointer;">Read article ></span>
    </p>
    <!--<div id="blogbutton">
    	Read article 
    </div>-->
    <div id="subscribebox">
    	<h1>Newsletter Sign-up</h1>
        <form>
        	<input autocorrect="off" spellcheck="false" type="text" placeholder="Enter your email...">
        </form>
        <div id="subscribebutton">
        	<em>Subscribe</em>
        </div>
    </div>
    <div id="subscribebelow">
    	Join us
    </div>
</div>
<?php include 'footer.php'; ?>
<div id="mainlogin">
	<form>
		<p class="label">Your Full Name:</p>
		<input autofocus style="text-transform:capitalize;" id="text" spellcheck="false" class="text" type="text">
        <p class="label">Your Age:</p>
		<input style="text-transform:capitalize;" id="text" spellcheck="false" class="text" type="text">
        <p class="label">Your Location:</p>
		<input style="text-transform:capitalize;" id="text" spellcheck="false" class="text" type="text">
		<p class="label">Your Email Address:</p>
		<input class="text" spellcheck="false" onKeyUP="trackChange(this.value)" type="text">
		<input class="submit" disabled id="submit" type="submit" value="Request Invite">
	</form>
</div>
<div id="maindonate">
	<form>
		<p class="label">Your Full Name:</p>
		<input autofocus style="text-transform:capitalize;" id="text" spellcheck="false" class="text" type="text">
        <p class="label">Amount:</p>
		<input autofocus style="text-transform:capitalize" id="text" spellcheck="false" class="text" placeholder="$" type="text" onKeyUP="donateChange(this.value)">
		<input class="submit2" disabled id="submit2" type="submit" value="Donate Now">
	</form>
</div>
</body>

</html>
