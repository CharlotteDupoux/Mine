<script type="text/javascript">
// Converts canvas to an image
function convertCanvasToImageWhat(canvas) {
	console.log('fuck1');
	document.getElementById('what-form').value = canvas.toDataURL('image/png');
	//return image;
}
function convertCanvasToImageWho(canvas) {
	console.log('fuck2');
	document.getElementById('who-form').value = canvas.toDataURL('image/png');
	//return image;
}
// Put event listeners into place
window.addEventListener("DOMContentLoaded", function() {
	/*var isAndroid = /(android)/i.test(navigator.userAgent)
	var isMobile = /(mobile)/i.test(navigator.userAgent)
	if (isAndroid || isMobile) {
		console.log('a');
	}*/
	if (navigator.appVersion.indexOf("Win")!=-1 || navigator.appVersion.indexOf("Mac")!=-1 || navigator.appVersion.indexOf("X11")!=-1 || navigator.appVersion.indexOf("Linux")!=-1){
		$(".onlyMobile").remove();
	}
	else{
		$("video").hide();
	}

	var width = window.innerWidth - (window.innerWidth/20);
	var height = (width / 2) + 5;
	// Grab elements, create settings, etc.
	var canvas = document.getElementById("canvas"),
		context = canvas.getContext("2d"),
		video = document.getElementById("video"),
		videoObj = { "video": true },
		canvas2 = document.getElementById("canvas2"),
		context2 = canvas2.getContext("2d"),
		video2 = document.getElementById("video2"),
		videoObj2 = { "video2": true },
		errBack = function(error) {
			console.log("Video capture error: ", error.code); 
		};
	console.log(height);
	console.log(width);

	// Put video listeners into place
	if(navigator.getUserMedia) { // Standard
		navigator.getUserMedia(videoObj, function(stream) {
			video.src = stream;
			video.play();
			video2.src = stream;
			video2.play();
		}, errBack);
	} else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
		navigator.webkitGetUserMedia(videoObj, function(stream){
			video.src = window.webkitURL.createObjectURL(stream);
			video.play();
			video2.src = window.webkitURL.createObjectURL(stream);
			video2.play();
		}, errBack);
	}
	else if(navigator.mozGetUserMedia) { // Firefox-prefixed
		navigator.mozGetUserMedia(videoObj, function(stream){
			video.src = window.URL.createObjectURL(stream);
			video.play();
			video2.src = window.URL.createObjectURL(stream);
			video2.play();
		}, errBack);
	}
	// Trigger photo take
	document.getElementById("what").addEventListener("click", function() {
		console.log('what');
		context.drawImage(video, 0, 0, 800, 600);
		convertCanvasToImageWhat(canvas);
	});
	document.getElementById("who").addEventListener("click", function() {
		console.log('who');
		context2.drawImage(video2, 0, 0, 800, 600);
		convertCanvasToImageWho(canvas2);
	});
}, false);

</script>