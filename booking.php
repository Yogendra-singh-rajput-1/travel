<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="bookingstyle.css">
    <title>Travel In India Website</title>
</head>

<body>
    <section>
        <nav>
            <div class="icon">
                <a href="gallary.php"> <i class="fa-sharp fa-regular fa-circle-left"></i></a>

            </div>
            <div class="logo">
                <h1>Travel.Com</h1>
            </div>

            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="popular_places.php">Popular Places</a></li>
                <li><a href="packages.php">Packages </a></li>
                <li><a href="gallary.php">Gallary</a></li>

                <li><a href="booking.php">Booking</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>

            <div class="icon">
                <input type="text" value="" placeholder="Search...">
                <!-- <i class="fa-solid fa-magnifying-glass"></i> -->

            </div>
            <div class="icon">
                <a href="login.php"><i class="fa-sharp fa-regular fa-circle-right"></i></a>

            </div>
        </nav>

        <div class="order" id="Order">
            <h1><span>Booking</span>Now</h1>

            <div class="order_main">

                <div class="order_image">
                    <img src="image/booking.png">
                </div>


                <form action="booking_action.php" method="post">

                    <div class="input">
                        <p>Enter your Name:-</p>
                        <input type="text" placeholder="Enter your Name......" name="name">
                    </div>

                    <div class="input">
                        <p>Enter your E-mail:-</p>
                        <input type="email" placeholder="Enter your E-mail......" name="email">
                    </div>

                    <div class="input">
                        <p>Enter your Contect Number:-</p>
                        <input type="text" placeholder="Enter your Contect Number......" name="phone_number">
                    </div>

                    <div class="input">
                        <p>Number of Passengers:-</p>
                        <input type="number" placeholder="Number of Passengers......" name="number_of_passengers">
                    </div>

                    <div class="input">
                        <p>Name of Places:-</p>
                        <input type="text" placeholder="Enter name of Places ......" name="places">
                    </div>


                    <div class="input" >
                        <p>Pick up Date</p>
                        <input type="date" name="date">
                    </div>
                    <div class="input">
                        <p>Pick up Time</p>
                        <input type="time" name="time">
                    </div>
                    <div class="input">
                        <p>Pick up Point</p>
                        <input type="text" placeholder="Pick up Point....." name="pick_up_point">
                    </div>
                    <div class="input">
                        <p>Enter Your Address:-</p>
                        <input type="text" placeholder="Enter Your Address......" name="address">

                    </div>

                    <!-- <a href="index.php" class="order_btn"> Submit </a> -->
                    <input type="submit" name="Submit" value="Submit" class="order_btn">
                </form>

            </div>

        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>