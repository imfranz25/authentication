
<?php
	
	session_start();

	// FUNCTION BACK UP DB FILE
	function backup($dbuser,$dbpass,$dbhost,$dbname,$final_path){
		$temp_path = 'C:/xampp/htdocs/authentication/database/temp/authentication.sql';
		exec('/xampp/mysql/bin/mysqldump --user='.$dbuser. ' --password='.$dbpass.' --host='.$dbhost. ' ' .$dbname. ' > '.$temp_path. '');
		if (file_exists($temp_path)) {
			if (filesize($temp_path) > 0) {
				exec('/xampp/mysql/bin/mysqldump --user='.$dbuser. ' --password='.$dbpass.' --host='.$dbhost. ' ' .$dbname. ' > '.$final_path. '');
				if (file_exists($final_path)) {
					return true;
				}
			}
		}
	}// END

	if (isset($_POST['backup'])) {

		//INITIALIZATION
		$dbuser = 'root';
		$dbpass = '';
		$dbhost = 'localhost';
		$dbname = 'authentication';
		$path = 'C:/xampp/htdocs/authentication/database/authentication.sql';
		//get value
		$backup = $_POST['backup'];

		//condition
		if ($backup === 'backup' ) {
			if (backup($dbuser,$dbpass,$dbhost,$dbname,$path)) {
				$_SESSION['backup_success'] = 'true';
			}
			else{
				$_SESSION['backup_failed'] = 'true';
			}
		}
		else if ($backup === 'download') {
			if (backup($dbuser,$dbpass,$dbhost,$dbname,$path)) {
				header('Content-Description: File Transfer');
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename='.basename($path));
				header('Expires: 0');
				header('Cache-Control: must-revalidate');
				header('Pragma: public');
				header('Content-Length: '.filesize($path));
				readfile($path);
				exit;
			}
			else{
				$_SESSION['download_failed'] = 'true';
			}
		}
		header('location: ../index.php');
	}
?>