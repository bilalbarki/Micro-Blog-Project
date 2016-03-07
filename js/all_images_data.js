//returns all images on a website in table format and hides all website content

document.addEventListener("DOMContentLoaded", function () {
	document.getElementById('showAllImages').addEventListener("click", function(){
    //Javascript to display images on the website and hide website content
    var div=document.createElement("div");
	div.id='all_images_data_other';
	div.style.display="none";
	while (document.body.firstChild)	//until body tag is empty keep doing it
	{
    	div.appendChild(document.body.firstChild);
	}
	
	document.body.appendChild(div);

	var table=document.createElement("table");
	table.id='all_images_data';
	var row = table.insertRow(0);
	var cell1 = row.insertCell(0);
	cell1.innerHTML= '<h1 style="font-weight:bold; text-align:center;">Images</h1>';
	var cell2 = row.insertCell(1);
	cell2.innerHTML= '<h1 style="font-weight:bold; text-align:center;">Image Path</h1>';
	var cell3 = row.insertCell(2);
	cell3.innerHTML= '<h1 style="font-weight:bold; text-align:center;">Alternative Text</h1>';
		


	var img_collect = document.getElementsByTagName('img'); //collection of image
    var img_collect_massiv = []; //array for image
    var alt= [];
    for (var i = 0; i < img_collect.length; i++)
    {
        img_collect_massiv.push(img_collect[i].getAttribute("src")); // push next image
        alt.push(img_collect[i].getAttribute("alt"));
    }
	
	for (var i = 0; i < img_collect_massiv.length; i++)
    {
		var row1 = table.insertRow(i+1);
		var cell1 = row1.insertCell(0);
		cell1.innerHTML='<img src="' + img_collect_massiv[i] + '" alt="' + alt[i] + '" />'
		cell1.style.verticalAlign='middle';
		var cell2 = row1.insertCell(1);
		cell2.style.verticalAlign='middle';
		
		cell2.innerHTML= '<p style="margin-left:5px;">'+ img_collect_massiv[i] + '</p>';
		
		var cell3 = row1.insertCell(2);
		cell3.style.verticalAlign='middle';
		cell3.innerHTML= '<p style="margin-left:5px;">'+ alt[i] + '</p>';

	}
	
	document.body.appendChild(table);
});
	

});