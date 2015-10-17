<html>
	<head>
		<?php
			$timezone = "America/Chicago";
			date_default_timezone_set($timezone);
			$current_time = date('g:i A');
			$long_hour = date('G');

			if ($long_hour < 5) {
				$image = "php-night.png";
				$background = "#180629";
				$text_color = "white";
			} else if ($long_hour >= 5 and $long_hour < 11) {
				$image = "php-morning.png";
				$background = "#865f86";
			} else if ($long_hour >= 11 and $long_hour < 16) {
				$image = "php-afternoon.png";
				$background = "#2c87c8";
			} else if ($long_hour >= 16 and $long_hour < 20) {
				$image = "php-evening.png";
				$background = "#c7b02f";
			} else {
				$image = "php-night.png";
				$background = "#180629";
				$text_color = "white";
			}
			
		?>
	</head>
	<body bgcolor = "<?php echo $background ?>">
		<font color = "<?php echo $text_color; ?>"><center>
			<h2>It is <?php echo $current_time ?></h2>
			Time zone: <?php echo date('e'); ?>
		</center></font>
		<img src = "http://making-the-internet.s3.amazonaws.com/<?php echo $image; ?>">
	</body>
</html>