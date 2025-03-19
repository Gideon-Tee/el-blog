<?PHP
	$servername = getenv('DB_HOST');
	$username = getenv('DB_USER');
	$password = getenv('DB_PASS');
	$dbname = getenv('DB_NAME');

	
	$conn = new mysqli($servername, $username, $password, $dbname);
	$conn->set_charset('utf8');
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>
