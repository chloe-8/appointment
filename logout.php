<html>
	<head>
		<title>Logout Handler</title>
	</head>
	<body>
		<?php
			session_start();
			session_destroy();
			echo "<script>alert('You are logged out'); window.location.href='homepage.php';</script>";
			
		?>
	</body>
</html>