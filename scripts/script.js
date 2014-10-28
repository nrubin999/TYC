// JavaScript Document

function switchMember(id) {
	var member1 = document.getElementById("member1");
	var member2 = document.getElementById("member2");
	var member3 = document.getElementById("member3");
	var member4 = document.getElementById("member4");
	var member5 = document.getElementById("member5");
	member1.className = "headshot";
	member2.className = "headshot";
	member3.className = "headshot";
	member4.className = "headshot";
	member5.className = "headshot";
	document.getElementById(id).className += " activeheadshot";
	var name = document.getElementById("personname");
	var location = document.getElementById("personlocation");
	var bio = document.getElementById("personbio");
	if(id == "member1") {
		name.innerHTML = "Aditya Karkera";
		location.innerHTML = "Doha, Qatar";
		bio.innerHTML = "Aditya Karkera is a nationally accomplished debater, orator, social entrepreneur, and writer who loves to explore new ideas and systematically dismantle them using a healthy mixture of scepticism and curiosity. With his written work featured in the Times Of India and the Times Of Israel – among others – and his oral work making ripples on stages across Qatar, he considers himself to be a Clausewitzian perfectionist. He is also a noted lover of puppies.";
	}
	if(id == "member2") {
		name.innerHTML = "Jae Hyun Park";
		location.innerHTML = "Seoul, South Korea";
		bio.innerHTML = "He is a boy from Korea";
	}
	if(id == "member3") {
		name.innerHTML = "Julia Myers";
		location.innerHTML = "Southlake, Texas";
		bio.innerHTML = "Julia Myers, 17, a high school junior, is the co-founder and chairman of Pretty Purposeful, a charity that provides obstetric fistula repair surgeries for women in Africa. She is a spokesperson for global health issues and child soldiers and has appeared on television and in multiple news publications. Julia is a Yale Young Global Scholar, a Youth Ambassador to China, a Teen Attorney and has competed in a national speech and debate league. She is also a National Latin Scholar, an AP Scholar with Distinction, and holds a black belt in Taekwondo. Julia has practiced piano for over ten years, has attended the SMU Institute for Young Pianists, and is an award-winning music theory student. Her awards include the Southlake Youth of the Year and the Kohl’s Cares Regional scholarship award.";
	}
	if(id == "member4") {
		name.innerHTML = "Nick Rubin";
		location.innerHTML = "Seattle, Washington";
		bio.innerHTML = "He is a boy from Washington";
	}
	if(id == "member5") {
		name.innerHTML = "Maria Myers";
		location.innerHTML = "Southlake, Texas";
		bio.innerHTML = "Maria Myers, 15, is the co-founder and CEO of Pretty Purposeful, a 501(c)(3) nonprofit she started two years ago with her sister Julia. She is passionate about empowering girls through events, fundraising for fistula repair surgeries, and raising awareness about women's issues. She works as an independent graphic designer and social media marketing strategist, as well as running all of the marketing, social media and sales for the site she created: PrettyPurposeful.org. She has been interviewed on live TV for U.S. and Asian media outlets and featured in several newspaper articles and magazines. She has participated in competitive speech and debate for 4 years, placing in the top 10% nationally in several events. She is a Teen Attorney with the Southlake Metroport Teen Court program. Maria and her sister were recognized as the Southlake Youth of the Year for 2014. She has been playing Piano for 10 years and studied at the Southern Methodist University Institute for Young Pianists, performing in Caruth Concert Hall. She is working towards her black belt in Taekwondo (one belt level away)! Maria spoke at the 2014 United Nations Youth Assembly on the Global Partnerships panel and discussed her nonprofit and ways young people can make a difference. She hopes to study law or policy and continue to empower girls everywhere. In her free time, she enjoys watching TED talks, creating art, and riding her big, retro purple bicycle.";
	}
}

function switchEvent(id) {
	var event1 = document.getElementById("event1");
	var event2 = document.getElementById("event2");
	var event3 = document.getElementById("event3");
	event1.className = "event";
	event2.className = "event";
	event3.className = "event";
	document.getElementById(id).className += " eventactive";
	var eventText = document.getElementById("eventtext");
	var eventDate = document.getElementById("eventdate");
	var eventTitle = document.getElementById("eventtitle");
	if(id == "event1") {
		eventText.innerHTML = "Greenhouse is a free browser extension for Chrome, Safari, and Firefox that exposes the role money plays in US Congress and highlights key election races. Displays on any web page detailed campaign contribution data for every Senator and Representative, including total amount received and breakdown by industry and by size of donation. Puts vital data where it’s most relevant so you can discover the real impact of money on America's political system.";
		eventDate.innerHTML = "Seattle, Washington, USA";
		eventTitle.innerHTML = "Greenhouse";
	}
	if(id == "event2") {
		eventText.innerHTML = "Pretty Purposeful is a 501(c)(3) nonprofit run by two teen sisters focused on empowering youth locally and globally to find their purpose. We put on local events, sell products, and raise funds for and awareness about Obstetric Fistula repair surgeries. Its purpose is to help girls and young women in Africa who suffer from the childbirth injury of obstetric fistula to receive the surgery and education they need to lead meaningful lives again.";
		eventDate.innerHTML = "Southlake, Texas, USA";
		eventTitle.innerHTML = "Pretty Purposeful";
	}
	if(id == "event3") {
		eventText.innerHTML = "The Pulpit is an international youth publication that seeks to unite the knowledge, creativity, and literary talent of the world's youth through the world’s oldest common tongue – rhetoric. While it may be Qatar’s first and only online youth publication, The Pulpit is committed to helping aspiring writers find their voice – and providing a greater lectern for armchair veterans of the pen. The Pulpit serves to be a stage for the youth to debate, ideate and innovate new notions – and a nursery to nurture them into concrete ideas.";
		eventDate.innerHTML = "Doha, Qatar";
		eventTitle.innerHTML = "The Pulpit";
	}
}

function showLogin(id1,id2) {
	var div = document.getElementById(id2);
	var login = document.getElementById(id1);
	if(div.style.display == "none") {
		div.style.display = "block";
		login.classList.toggle('slideUp');
	}
	else  {
		div.style.display = "block";
		login.classList.toggle('slideUp');
	}
}

function hideDarken(id1, id2) {
	var darken = document.getElementById(id1);
	var login = document.getElementById(id2);
	if(darken.style.display == "block") {
		darken.style.display = "none"
		login.classList.toggle('slideUp');
	}
	else {
		darken.style.display = "none";
		login.classList.toggle('slideUp');
	}
}

function donateChange(amt) {
	var amount = amt;
	if (amount) {
		document.getElementById("submit2").className += " blue";
 	 	document.getElementById("submit2").removeAttribute("disabled");
	} 
}

var findme = "@";
var findmetwo = ".";
function trackChange(email) {
	var address = email;
if ( address.indexOf(findme) > -1 ) {
	if ( address.indexOf(findmetwo) > -1 ) {
  document.getElementById("submit").className += " blue";
  document.getElementById("submit").removeAttribute("disabled");
	}
} else {
  document.getElementById("submit").className =
   document.getElementById("submit").className.replace
      ( /(?:^|\s)Blue(?!\S)/g , '' );
	document.getElementById("submit").setAttribute("disabled");
}
}; 