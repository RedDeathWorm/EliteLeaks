<?php
require '../auth/constants.php';
require '../auth/config.php';
require '../auth/security.php';
require_once '../auth/database.php';
require '../auth/database_functions.php';

if (!isset($_SESSION)) { session_start(); } else { /* we're good */ }

if (isset($_SESSION['token'])) {
	if (in_array($_SESSION['token'], $row['token'])) {
		// client is good and logged in!
	}
} else {

}

$conn->close();

?>
<?php

/* THIS IS THE LOGGED IN AREA!!! */

if (isset($_SESSION['token'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo "Welcome back {0}", $_SESSION['username'];?></title>
</head>
<body>

</body>
</html>

<?php
	die();
}

/* THIS IS THE DEFAULT HOME PAGE!!! */
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo sitetitle;?></title>
</head>
<body>



</body>
</html>