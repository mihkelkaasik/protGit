<canvas id="myCanvas" width="400" height="200"></canvas>

    <script>
      var canvas = document.getElementById('myCanvas');
      var context = canvas.getContext('2d');
      var x = 50;
      var y = 0;
      var width = 300;
      var height = 200;
      var imageObj = new Image();

      imageObj.onload = function() {
        context.drawImage(imageObj, x, y, width, height);
      };
      imageObj.src = 'media/screenshot.png';
	  
	  var dataURL = canvas.toDataURL('image/png');
	   console.log(dataURL);
	  $.ajax({
		type: "POST",
		url: "php/saveImage.php",
		data: { 
			imgBase64: dataURL
		}
		}).done(function(o) {
		console.log('saved'); 
  // If you want the file to be visible in the browser 
  // - please modify the callback in javascript. All you
  // need is to return the url to the file, you just saved 
  // and than put the image in your browser.
		});
    </script>