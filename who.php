<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Who? | YC</title>
<link type="text/css" rel="stylesheet" href="styles/styles.css">
<link type="text/css" rel="stylesheet" href="styles/animations.css">
<script src="scripts/script.js"></script>
</head>

<body>
<?php include 'nav.php' ?>
<h1 class="pagetitle">Who are we?</h1>
<div id="headshots">
    <img class="headshot activeheadshot" id="member1" onclick="switchMember('member1');" src="images/headshots/bw/1011616_616358828452656_822759525399498919_n.jpg">
    <img class="headshot" id="member2" onclick="switchMember('member2');" src="images/headshots/bw/10720372_882933388383381_151894376_o.jpg">
    <img class="headshot" id="member3" onclick="switchMember('member3');" src="images/headshots/bw/10153072_1387429291533479_1597977462_n.jpg">
    <img class="headshot" id="member4" onclick="switchMember('member4');" src="images/headshots/bw/10525711_682765918443990_5885153812108802473_n.jpg">
    <img class="headshot" id="member5" onclick="switchMember('member5');" src="images/headshots/bw/1500813_1452360005026077_8949019238728989426_o.jpg">
</div>
<div id="personinfo">
	<h1 id="personname">Aditya Karkera</h1>
    <h2 id="personlocation">Doha, Qatar</h2>
    <p id="personbio">Aditya Karkera is a nationally accomplished debater, orator, social entrepreneur, and writer who loves to explore new ideas and systematically dismantle them using a healthy mixture of scepticism and curiosity. With his written work featured in the Times Of India and the Times Of Israel – among others – and his oral work making ripples on stages across Qatar, he considers himself to be a Clausewitzian perfectionist. He is also a noted lover of puppies.</p>
</div>
<?php include 'footer.php' ?>
</body>
</html>