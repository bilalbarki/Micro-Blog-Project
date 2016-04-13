//if add location is checked, get user location and display it in alert

function geolocation () {

	var postButton=document.getElementById('sendButton');

	document.getElementById('sendButton').addEventListener('click', function () {
		if(document.getElementById('location').checked) {
			navigator.geolocation.getCurrentPosition(function(position) {
			  alert('Your status was posted from ' + position.coords.latitude + ' ' + position.coords.longitude);
			});
			
		}
		else{
			alert('Your reply was posted!');
		}

	})


}