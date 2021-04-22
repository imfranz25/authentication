<!DOCTYPE html>
<html>
<head>
	<title>My Website | Francis Ong</title>
	<?php require 'accounts/authentication.php'; ?>
</head>
<body>

	<?php if (isset($_POST['destroy'])) {session_destroy();}?>

	<h1>Welcome to My Website</h1>

	<form method="post">
		<button name="destroy">Destroy Session</button>
	</form>
	

</body>
</html>