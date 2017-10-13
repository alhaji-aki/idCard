$('#subsidiary').change(function () {
    var value = $('#subsidiary option:selected').val()
    var imageLocation = "";
    switch (value) {
        case "SubahHolding":
            imageLocation = "images/subahHolding.jpg";
            break;
        case "SubahInfo":
        	imageLocation = "images/subahInfo.jpg";
            break;
        case "Vanguard":
        	imageLocation = "images/vanguard.jpg";
            break;
        case "Melchia":
        	imageLocation = "images/melchia.jpg";
            break;
        case "Adroit":
        	imageLocation = "images/adroit.jpg";
            break;
        case "DocuPro":
            imageLocation = "images/docupro.jpg";
            break;
        default:
            break;
	}
	var img = imageLocation;
    $('#canvas').css("background-image", "url(" + img + ")");
})

function showImage(imageLocation) {
	var canvas = document.querySelector('#canvas');
	var ctx = canvas.getContext("2d");

	//var imageData = ctx.getImageData(0,0,640,340);

	var image = new Image();
	image.onload = function () {
		image.src = imageLocation;
		ctx.drawImage(image, 0,0);
		console.log("done");
	}
	

	/* var imageWidth = image.width;
	var imageHeight = image.height; */

	
	/* canvas.width = imageWidth;
	canvas.height = imageHeight; */
	//ctx.drawImage(image, 0, 0);
	
}