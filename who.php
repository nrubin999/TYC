<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="description" content="We're creating a global network of youth-run organizations. Join us and submit your initiative, company, project, or nonprofit today.">
<title>Who? | YouthCorp</title>
<link type="text/css" rel="stylesheet" href="styles/styles.css">
<link type="text/css" rel="stylesheet" href="styles/animations.css">
<script src="scripts/script.js"></script>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<?php include 'nav.php' ?>
<h1 class="pagetitle">Who are we?</h1>
<div id="headshots">
    <img class="headshot activeheadshot" id="member1" onclick="switchMember('member1');" src="images/headshots/10606319_10152645025612859_8448777422479776948_n.jpg">
    <img class="headshot" id="member4" onclick="switchMember('member4');" src="images/headshots/bw/10525711_682765918443990_5885153812108802473_n.jpg">
    <img class="headshot" id="member3" onclick="switchMember('member3');" src="images/headshots/1233622_1482645005345240_4062516141985052394_n.jpg">
        <img class="headshot" id="member2" onclick="switchMember('member2');" src="images/headshots/bw/10720372_882933388383381_151894376_o.jpg">
    <img class="headshot" id="member5" onclick="switchMember('member5');" src="images/headshots/bw/1500813_1452360005026077_8949019238728989426_o.jpg">
</div>
<div id="personinfo">
	<h1 id="personname">Aditya Karkera</h1>
    <h2 id="personlocation">Doha, Qatar</h2>
    <p id="personbio">Aditya Karkera is the founder and editor-in-chief of The Pulpit - Qatar's first online international youth publication dedicated to encouraging debate, discussion, and dialogue on pressing global issues. He is a nationally accomplished debater, orator, and writer, and has appeared on both print and television for his achievements. Aditya is a Yale Young Global Scholar, one of the youngest TEDx curators in Asia, a highly decorated debater and orator,  a contributing writer for the Times Of India - the world's largest English daily - and the Times Of Israel - one of the Middle East's fastest growing English publications. He is also a noted lover of puppies.</p>
	<!--<a target="_blank" href="http://facebook.com/theyouthcorp"><img src="images/social/facebook500.png"></a>-->
    <a target="_blank" id="biotwitter" href="https://twitter.com/AdiKarkera"><img src='images/social/twitter.png'></a>
    <a target="_blank" id="bioinstagram" href="http://instagram.com/aditya.karkera"><img src="images/social/instagram.png"></a>
    <a target="_blank" id="biolinkedin" href="https://www.linkedin.com/profile/view?id=290269916&authType=NAME_SEARCH&authToken=ZT9S&locale=en_US&trk=tyah2&trkInfo=tarId%3A1415326693535%2Ctas%3Aaditya%2Cidx%3A1-1-1"><img src="images/social/linkedin.png"></a>
    <a target="_blank" id="biowebsite" style='display:none' href="http://instagram.com/aditya.karkera"><img src="images/social/website.png"></a>
    <!--<a target="_blank" href="https://www.youtube.com/user/youthcorp"><img src="images/social/youtube-variation.png"></a>
    <a target="_blank" href="http://www.pinterest.com/youthcorp/"><img src="images/social/pinterest.png"></a>-->
    <a id="bioemail" href="mailto:theyouthc@gmail.com"><img src="images/social/email.png"></a>
</div>
<?php include 'footer.php' ?>
</body>
</html>