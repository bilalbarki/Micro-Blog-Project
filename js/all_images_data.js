//returns all images on a website in table format and hides all website content

document.addEventListener("DOMContentLoaded", function () {
	document.getElementById('showAllImages').addEventListener("click", function(){
    var images=document.getElementsByTagName('img');
	var div=document.createElement("div");
	div.id='all_images_data_other';
	div.style.display="none";
	while (document.body.firstChild) //append everything in the body to the new created div
	{
    	div.appendChild(document.body.firstChild);
	}
	
	document.body.appendChild(div); //append div to body

	var table=document.createElement("table");
	table.id='all_images_data';
	var row = table.insertRow(0);
	var cell1 = row.insertCell(0);
	cell1.innerHTML= '<h1 style="font-weight:bold; text-align:center; vertical-align:center;">Images</h1>';
	var cell2 = row.insertCell(1);
	cell2.innerHTML= '<h1 style="font-weight:bold; text-align:center; margin-left:10px;">Image Path</h1>';
	var cell3 = row.insertCell(2);
	cell3.innerHTML= '<h1 style="font-weight:bold; text-align:center; margin-left:10px;">Alternative Text</h1>';
	
	for (i=0;images[i];i++){
		var row = table.insertRow(i+1);
		var cell1 = row.insertCell(0);
		cell1.appendChild(images[i]);
		cell1.style.verticalAlign='middle';
		var cell2 = row.insertCell(1);
		cell2.style.verticalAlign='middle';
		cell2.innerHTML= '<p style="margin-left:10px;">'+ images[i].getAttribute("src"); + '</p>';
		var cell3 = row.insertCell(2);
		cell3.style.verticalAlign='middle';
		cell3.innerHTML= '<p style="margin-left:10px;">'+ images[i].getAttribute("alt") + '</p>';
		
	}
	document.body.appendChild(table);
});
	

});