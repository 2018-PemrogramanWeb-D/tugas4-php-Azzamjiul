<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
</head>
<body>
	<?php 
		session_start();
	?>
	
	<h2>Welcome <?php echo $_SESSION["username"]; ?></h2>
	<p>
		<?php 
			date_default_timezone_set("Asia/Bangkok");
			echo date("Y-m-d h:i:s",time()); 
		?>
	</p>
	<p>
		<?php 
			if(date("h")<11)
			{
				echo "Selamat Pagi";
			}
			elseif (date("h")<15) {
				echo "Selamat Siang";
			}
		?>
	</p>

</body>
</html>