document.addEventListener("DOMContentLoaded", function(event) {

function mediaqueryresponse(mql){
	var user=document.getElementById("Users");
	var aside=document.getElementById("aside");
var links=document.getElementById("links");
var footer=document.getElementById("footer");
var article=document.getElementById("article");
 if (mql.matches){ // if media query matches
  
  article.className = "col-12";
  aside.className = "col-12";
  user.className = "asideGeneralBlock asideUsers col-4";
  links.className = "asideGeneralBlock asideLinks col-4";
  footer.className = "col-4";
 }
 else{
  article.className = "col-9";
  aside.className = "col-3";
  user.className = "asideGeneralBlock asideUsers";
  links.className = "asideGeneralBlock asideLinks";
  footer.className = "";
 }
}

var mql = window.matchMedia("(max-width: 992px) and (min-width: 768px)")
mediaqueryresponse(mql) // call listener function explicitly at run time
mql.addListener(mediaqueryresponse) // attach listener function to listen in on state changes

});