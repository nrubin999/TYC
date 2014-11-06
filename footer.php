<div id="footer">
<table>
	<tr style="font-size:20px;">
    	<td style="font-family:opensans-bold!important;color:white!important;cursor:auto;">WHO WE ARE</td>
        <td style="font-family:opensans-bold!important;color:white!important;cursor:auto;">WHAT WE DO</td>
        <td style="font-family:opensans-bold!important;color:white!important;cursor:auto;padding:0 80px 10px 300px;">FIND US ELSEWHERE:</td>
    </tr>
    <tr>
    	<td><a href="who.php">Our Team</a></td>
        <td><a href="blog.php">Blog</a></td>
        <td rowspan="2" style="padding:0px 0px 0px 140px">
        	<a target="_blank" href="http://facebook.com/theyouthcorp"><img src="images/social/facebook500.png"></a>
            <a target="_blank" href="http://twitter.com/theyouthcorp"><img src='images/social/twitter.png'></a>
            <a target="_blank" href="http://instagram.com/youthcorp"><img src="images/social/instagram.png"></a>
            <a target="_blank" href="https://www.youtube.com/user/youthcorp"><img src="images/social/youtube-variation.png"></a>
            <a target="_blank" href="http://www.pinterest.com/youthcorp/"><img src="images/social/pinterest.png"></a>
            <a href="mailto:theyouthc@gmail.com"><img src="images/social/email.png"></a>
        </td>
    </tr>
    <tr>
    	<td><a href="members.php">Members</a></td>
        <td><a href="about.php">Our Mission</a></td>
    </tr>
    <tr>
    	<td>Press</td>
        <td onClick="showLogin('mainlogin','darkenthree');">Get Involved</td>
    </tr>
    <tr>
    	<td><a href="contact.php">Contact Us</a></td>
        <td><a href="events.php">Events</a></td>
    </tr>
</table>
</div>
<div id="darkenthree" onClick="hideDarken('darkenthree','mainlogin');"></div>
<div id="mainlogin">
	<form action="index.php" method="post" name="joinusform">
		<p class="label">Your Full Name:</p>
		<input name="ju_name" autofocus style="text-transform:capitalize;" id="text" spellcheck="false" class="text" type="text">
        <p class="label">Your Age:</p>
		<input name="ju_age" style="text-transform:capitalize;" id="text" spellcheck="false" class="text" type="text">
        <p class="label">Your Location:</p>
		<input name="ju_location" style="text-transform:capitalize;" id="text" spellcheck="false" class="text" type="text">
		<p class="label">Your Email Address:</p>
		<input name="ju_email" class="text" spellcheck="false" onKeyUP="trackChange(this.value)" type="text">
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