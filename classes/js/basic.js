/*MODAL LOGIN FORM*/
// Get the login modal
var modal = document.getElementById('Login');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Show LOGIN Password 
function showPassword01() {
	var lpsw = document.getElementById("lpsw");
	if (lpsw.type === "password") {
		lpsw.type = "text";
	} else {
		lpsw.type = "password";
	}
}	

// Show SIGN UP Password 
function showPassword02() {
	var spsw01 = document.getElementById("spsw01");
	if (spsw01.type === "password") {
		spsw01.type = "text";
	} else {
		spsw01.type = "password";
	}
	
	var spsw02 = document.getElementById("spsw02");
	if (spsw02.type === "password") {
		spsw02.type = "text";
	} else {
		spsw02.type = "password";
	}
}

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}