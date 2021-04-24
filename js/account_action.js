	
	//HIDE MODAL IF CLICK IN WINDOW
	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	  if (event.target == modal_message) {
	    modal_message.style.display = "none";
	    window.location.replace("../index.php");
	  }
	}// END

	// HIDE CUSTOM VALIDITY MESSAGE WHILE TYPING
	document.addEventListener("DOMContentLoaded",function(){
		var elements = document.getElementsByTagName('input');
		for (var i = 0; i < elements.length; i++){
			elements[i].oninput = function(e){
				e.target.setCustomValidity('');
			}
		}
	}); //END


	//function validate input
	function validate_input(){

		// initialization
		var user = document.getElementById('user');
		var pass = document.getElementById('pass');
		var cpass = document.getElementById('cpass');
		var special_characters = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;

		// Validate Inputs (Condition)
		if (user.value.match(special_characters)) {
			user.setCustomValidity("Special Characters is not allowed");
		}
		else if (pass.value.length < 8) {
			pass.setCustomValidity("Password must be 8 Characters");
		}
		else if (!(pass.value.match(special_characters)) | !(pass.value.match(/\d/))) {
			pass.setCustomValidity("Password must contain atleast one Special Characters, Numbers, Upper, and Lower Case");
		}

	}

	//function show modal authentication
	function show_modal(status){
		// set display status
		document.getElementById("modal").style = "display:"+status+";";
	}//end

	//function show modal message
	function show_message(msg,status){
		// set display status
		document.getElementById("modal_message").style = "display:"+status+";";
		document.getElementById("msg").innerHTML = msg;
	}//end

	$(document).ready(function(){

		$('.close').click(function(e){
			e.preventDefault();// do not refresh browser
			show_modal('none'); // display modal none
		});

	});
