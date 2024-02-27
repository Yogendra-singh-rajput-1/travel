
<?php
// Open a new connection to the MySQL server
$linkDB = mysqli_connect("localhost", "root", "", "travel");
if (mysqli_connect_error()) { //for connection error finding
    die('There was an error while connecting to database');
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$number_of_passengers = $_POST['number_of_passengers'];
$address = $_POST['address'];
$places = $_POST['places'];
$date = $_POST['date'];
$time = $_POST['time'];
$pick_up_point = $_POST['pick_up_point'];
$data = "INSERT INTO `book_data` (`name`, `email`,`phone_number`,`number_of_passengers`,`address`,`places`, `date`, `time`, `pick_up_point`) VALUES ('" . $name . "','" . $email . "','" . $phone_number . "','" . $number_of_passengers . "','" . $address . "', '" . $places . "','" . $date . "','" . $time . "','" . $pick_up_point . "')";

mysqli_query($linkDB, $data);
echo "You have succesfully registered!";

?>