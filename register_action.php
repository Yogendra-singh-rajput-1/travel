
<?php
// Open a new connection to the MySQL server
$linkDB = mysqli_connect("localhost", "root", "", "travel");
if (mysqli_connect_error()) { //for connection error finding
    die('There was an error while connecting to database');
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$data = "INSERT INTO `user` (`name`, `email`,`password`) VALUES ('" . $name . "','" . $email . "','" . $password . "')";

mysqli_query($linkDB, $data);
echo "You have succesfully registered!";

?>