
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

	$Id=$_GET['NewsId'];
	// Establish Connection with MYSQL
$con = mysqli_connect("localhost","root","","role");

	// Specify the query to Insert Record
	$sql = "delete from News_Master where NewsId='".$Id."'";
	// execute query
	mysqli_query ($con,$sql);
	// Close The Connection
	mysqli_close ($con);
	echo '<script type="text/javascript">alert("News Deleted Succesfully");window.location=\'News.php\';</script>';

?>
</body>
</html>
