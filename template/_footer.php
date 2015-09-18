<script type="text/javascript">
// Converts canvas to an image
function convertCanvasToImageWhat(canvas) {
	document.getElementById('what-form').value = canvas.toDataURL('image/png');
}
function convertCanvasToImageWho(canvas) {
	document.getElementById('who-form').value = canvas.toDataURL('image/png');
}
// Put event listeners into place
window.addEventListener("DOMContentLoaded", function() {

	//Animation code
	$( ".btn-xl" ).hover(
	  	function() {
	    	$(this).animate({
			    opacity: 0.25
			}, 1000, function() {
			    // Animation complete.
			});
	  	}, function() {
	    	$(this).animate({
			    opacity: 1
			}, 1000, function() {
			    // Animation complete.
			});
	  	}
	);
	var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
	if (navigator.appVersion.indexOf("Win")!=-1 || navigator.appVersion.indexOf("Mac")!=-1 || navigator.appVersion.indexOf("X11")!=-1 || navigator.appVersion.indexOf("Linux")!=-1){
		$(".onlyMobile").remove();
	}
	else if(iOS == true){
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
		context.drawImage(video, 0, 0, 400, 300);
		convertCanvasToImageWhat(canvas);
	});
	document.getElementById("who").addEventListener("click", function() {
		console.log('who');
		context2.drawImage(video2, 0, 0, 400, 300);
		convertCanvasToImageWho(canvas2);
	});
}, false);

</script>