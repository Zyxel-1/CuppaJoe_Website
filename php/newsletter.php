<html>
<head>
<title>Data From NEWSLETTER</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/submit.css" rel="stylesheet">
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
</head>
<body>
<?php
	$name = $_POST['UserName'];
	$email = $_POST['UserEmail'];
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = NULL;
    $dbname = 'quarts';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Could not connect");

$sql = "INSERT INTO newspost (name, email) VALUES ('$name', '$email')";

if (!mysqli_query($conn, $sql)) {
    echo "<p>Error: " . '$sql' . "<br>" . mysqli_error($conn) . "</p>";
}

//INSERT INTO `newspost` (`name`, `email`) VALUES ('name', 'asd@asdf.com');

/*
if ($conn->query($sql) === TRUE)
{
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} 
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
*/
$conn->close();
?>
<a class="btn btn-default" href="../index.html" role="button">Ok</a>
</body>
</html>