//if navigator.geolocation is not available hide all include location checkboxes

function pe() {
	if (!(navigator.geolocation)){
		var bilal=document.getElementsByClassName('location');
		for (i=0;bilal[i];i++){
			bilal[i].style.visibility = "hidden";
		}
	}
}