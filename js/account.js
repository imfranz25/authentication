	
	//HIDE MODAL IF CLICK IN WINDOW
	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	  if (event.target == modal_message) {
	    modal_message.style.display = "none";
	    window.location.replace("../index.php");
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
