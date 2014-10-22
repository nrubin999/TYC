// JavaScript Document

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
		eventText.innerHTML = "Text for event 3";
		eventDate.innerHTML = "March 26, 2016";
		eventTitle.innerHTML = "2016 Youth Conference";
	}
	if(id == "event2") {
		eventText.innerHTML = "Text for event 2";
		eventDate.innerHTML = "March 25, 2015";
		eventTitle.innerHTML = "2015 Youth Conference";
	}
	if(id == "event3") {
		eventText.innerHTML = "Text for event 1";
		eventDate.innerHTML = "March 24, 2014";
		eventTitle.innerHTML = "2014 Youth Conference";
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