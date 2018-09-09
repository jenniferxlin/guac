// about page
// hover function for guac members

function showBio(element) {

	var x = $(element).position().left + 160;
    var y = $(element).position().top - 150;

	var box = element.childNodes[0];
	
	box.style.visibility = "visible";
	box.style.top = y + 'px' ;
	box.style.left = x + 'px';
}

function showBioLow(element) {

	var x = $(element).position().left + 160;
    var y = $(element).position().top - 320;

	var box = element.childNodes[0];
	
	box.style.visibility = "visible";
	box.style.top = y + 'px' ;
	box.style.left = x + 'px';
}


function hideBio(element) {
	var box = element.childNodes[0];
	box.style.visibility = "hidden";
}