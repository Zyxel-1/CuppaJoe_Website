<html>
<head>
<title>Data From FORMS</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/submit.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
</head>
<body>
<?php
	$name = $_POST['UserName'];
	$email = $_POST['UserEmail'];
	$frequency = $_POST['UserFrequency'];
	$message = $_POST['UserMessage'];
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = NULL;
    $dbname = 'quarts';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Could not connect");

$sql = "INSERT INTO messagepost(name,email,frequency,message) VALUES ('$name','$email','$frequency','$message')";

if (!mysqli_query($conn, $sql)) {
    echo "<p>Error: " . '$sql' . "<br>" . mysqli_error($conn) . "</p>";
}
$conn->close();
?>
<a class="btn btn-default" href="../index.html" role="button">Ok</a>
</body>
</html>