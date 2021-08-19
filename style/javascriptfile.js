/* Function for responsive navbar of all pages */

function mynavbar() {
	var x = document.getElementById("nav");
	if (x.className === "nav") {
		x.className += " responsive";
	} else {
		x.className = "nav";
	}
}

/* Function for imageslider of home.html */

var Index = 0;
slideshow();
function slideshow() {
	setTimeout(slideshow, 3000);
	var i;
	var slides = document.getElementsByClassName("mySlides");
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	Index++;
	if (Index > slides.length) { Index = 1 }
	slides[Index - 1].style.display = "block";
}

/* Function for validation of feedback.html */

function msg() {
	var name = document.getElementById("name").value;
	var n = /^[A-Za-z\s]+$/;
	var mob = document.getElementById("number").value;
	var m = /^[0-9]{10}$/;
	var email = document.getElementById("email").value;
	var e = /^([A-Za-z0-9\.\_])+\@(([A-za-z0-9\_]+\.)+([A-Za-z]{2,3}))$/;
	var fb = document.getElementById("fb_descp").value;
	if (!name.match(n)) {
		alert('Enter valid name');
		return false;
	}
	else if (!mob.match(m)) {
		alert('Invalid mobile number');
		return false;
	}
	else if (!email.match(e)) {
		alert('Enter valid email');
		return false;
	}
	else if (fb == '') {
		alert('Feedback cannot be empty');
		return false;
	}
	else {
		return true;
	}
}

/* Function to show/hide password of login.php and register.php */

function showpassword() {
	var x = document.getElementsByName("pass");
	for (var i = 0; i <= x.length; i++) {
		if (x[i].type === "password") {
			x[i].type = "text";
		} else {
			x[i].type = "password";
		}
	}
}

/* Function to check src and dest of bookticket.php */

function bt_validate() {
	var src = document.getElementById("src").value;
	var dest = document.getElementById("dest").value;
	if (src == dest) {
		alert("Source and Destination can't be same.");
		return false;
	}
	else {
		return true;
	}
}

/* Function for validation of register.php */

function rvalidate() {
	var name = document.getElementById("uname").value;
	var n = /^[A-Za-z\s]+$/;
	var mob = document.getElementById("unumber").value;
	var m = /^[0-9]{10}$/;
	var email = document.getElementById("uemail").value;
	var e = /^([A-Za-z0-9\.\_])+\@(([A-za-z0-9\_]+\.)+([A-Za-z]{2,3}))$/;
	var pass1 = document.getElementById("pass1").value;
	var pass2 = document.getElementById("pass2").value;
	var p = /^[A-Za-z0-9]{6,8}$/;
	if (!name.match(n)) {
		alert('Enter valid name');
		return false;
	}
	else if (!mob.match(m)) {
		alert('Invalid mobile number');
		return false;
	}
	else if (!email.match(e)) {
		alert('Enter valid email');
		return false;
	}
	else if (!pass1.match(p)) {
		alert('Enter valid password...password must be 6-8 aplhabets or digits');
		return false;
	}
	else if (pass1 != pass2) {
		alert('both password not match');
		return false;
	}
	else {
		return true;
	}
}

/* Function for validation of login.php */
function lvalidate() {
	var uid = document.getElementById("uid").value;
	var u = /^[0-9]{10}$/;
	var pass = document.getElementById("pass").value;
	var p = /^[A-Za-z0-9]{6,8}$/;
	if (!uid.match(u)) {
		alert('Invalid User id/mobile number');
		return false;
	}
	else if (!pass.match(p)) {
		alert('Enter valid password...password must be 6-8 aplhabets or digits');
		return false;
	}
	else {
		return true;
	}
}

function pricevalidate() {
	var p = document.getElementById("price").value;
	if (p == "" || p == "readonly") {
		alert("Invalid Price");
	}
	else {
		window.location = 'payment.php';
	}
}



function hide_forms() {
	var forms = document.getElementsByClassName("pay")
	for (var i = 0; i < forms.length; i++) {
		forms[i].style.display = "none";
	}
}
function debit_payment() {
	hide_forms();
	document.getElementById("debit").style.display = "block";
}
function credit_payment() {
	hide_forms();
	document.getElementById("credit").style.display = "block";
}
function upi_payment() {
	hide_forms()
	document.getElementById("upi").style.display = "block";
}

function dcardvalidate() {
	var cn = document.getElementById("dcard_number").value;
	var pcn = /^[0-9]{12}$/;
	var cmm = document.getElementById("dcard_expmm").value;
	var pmm = /^[0-9]{2}$/;
	var cyy = document.getElementById("dcard_expyy").value;
	var pyy = /^[0-9]{4}$/;
	var ccvv = document.getElementById("dcard_cvv").value;
	var pcvv = /^[0-9]{3}$/;
	if (!cn.match(pcn)) {
		alert('Invalid Card Number');
		return false;
	}
	else if (!cmm.match(pmm)) {
		alert('Invalid Expiry Month');
		return false;
	}
	else if (!cyy.match(pyy)) {
		alert('invalid expiry year');
		return false;
	}
	else if (!ccvv.match(pcvv)) {
		alert('Invalid Card CVV');
		return false;
	}
	else {
		return true;
	}
}

function captcha_verify() {
	var no = document.getElementById('cptno').value;
	var ent = document.getElementById('cptent').value;
	if (no == ent) {
		alert('Booked Sucessfully...');
		return true;
	}
	else {
		alert('not Verified');
		return false;
	}
}