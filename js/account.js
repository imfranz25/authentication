	
	//HIDE MODAL IF CLICK IN WINDOW
	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	  if (event.target == modal_message) {
	    modal_message.style.display = "none";
	    window.location.replace("../index.php");
	  }
	  if (event.target == modal_message_forgot) {
	    modal_message_forgot.style.display = "none";
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
		var email = document.getElementById('email');
		//validations
		var special_characters = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
		var upper = new RegExp("[A-Z]");
		var lower = new RegExp("[a-z]");
		var mail_format = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

		// Validate Inputs (Condition)
		if (user.value.match(special_characters)) {
			user.setCustomValidity("Special Characters is not allowed"); 
		}
		else if (pass.value.length < 8 && pass.value != '') {
			pass.setCustomValidity("Password must be 8 Characters");
		}
		else if ((!(pass.value.match(special_characters)) | !(pass.value.match(/\d/)) | !(pass.value.match(upper)) | !(pass.value.match(lower)))  &&  pass.value != '') {
			pass.setCustomValidity("Password must contain atleast one special characters, number, upper, and lower case");
		}
		else if (pass.value != cpass.value) {
			cpass.setCustomValidity("Password and Confirm Password does not match");
		}
		else if (!(email.value.match(mail_format)) && email.value != ''){
			email.setCustomValidity("Invalid Email Format");
		}
	}//end

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

	function show_forgot(input_1,input_2){
		document.getElementById("modal_message_forgot").style = "display:block";
		document.getElementById("forgot_dialog_content").innerHTML = "<label class='forgot_pointer' for='"+input_1+"_forgot'>"+input_1+"</label><br><input type='text' name='"+input_1+"_forgot' id='"+input_1+"_forgot' placeholder='Enter your "+input_1+"'><br><label class='forgot_pointer' for='"+input_2+"_forgot'>"+input_2+"</label><br><input type='text' name='"+input_2+"_forgot' id='"+input_2+"_forgot' placeholder='Enter your "+input_2+"'>";
		
	}

	// JQUERY
	$(document).ready(function(){

		$('.close').click(function(e){
			e.preventDefault();// do not refresh browser
			show_modal('none'); // display modal none
		});
		$('#cancel').click(function(e){
			e.preventDefault();// do not refresh browser
			document.getElementById("modal_message_forgot").style = "display:none";
		});

		$('#forgot').click(function(e){
			show_forgot('Username','Email');
		});

	});