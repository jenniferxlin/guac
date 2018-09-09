var im = document.getElementsByClassName("image");
function imgResize() {
	
	//console.log(im);
	for (var i = 0; i < im.length; i++) {
		var height = im[i].offsetWidth * (2/3);
		im[i].style.paddingTop = height + 'px';
		//console.log(im[i].offsetWidth, im[i].style.paddingTop);
	}
}

window.onload = imgResize;