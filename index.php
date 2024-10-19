<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>harvey looks at the calendar</title>
	</head>
	<body>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<img style="display:none" src="harvey.png" crossorigin="anonymous" />
		<canvas id="canvas">
		<script>
			var canvas = document.getElementById('canvas');
			canvas.width = $('img').width();
			canvas.crossOrigin = "Anonymous";
			canvas.height = $('img').height();

			var ctx = canvas.getContext('2d');
			ctx.drawImage($('img').get(0), 0, 0);
			ctx.font = "36pt Arial";

			// redraw image
			ctx.clearRect(0, 0, canvas.width, canvas.height);
			ctx.drawImage($('img').get(0), 0, 0);

			// refill text
			ctx.fillStyle = "#4c528a";
			ctx.fillText(<?php date("Y"); ?>, 210, 620);
		</script>
	</body>
</html>