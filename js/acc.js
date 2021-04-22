	
	//HIDE MODAL IF CLICK IN WINDOW
	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	}

	//function show modal authentication
	function show_modal(status){
		// set display status
		document.getElementById("modal").style = "display:"+status+";";
	}//end

	$(document).ready(function(){

		$('.close').click(function(e){
			e.preventDefault();// do not refresh browser
			show_modal('none'); // display modal none
		});
	

	});
