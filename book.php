<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <!-- SWIPER CSS LINK  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- FONT STYLE LINK  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- CSS FILE LINK  -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- HEADER SECTION STARTS -->

    <section class="header">
        <!-- LOGO -->
        <a href="home.php" class="logo">VentureVactations</a>
        <!-- NAVBAR  -->
        <nav class="navbar">
            <a href="home.php">HOME</a>
            <a href="package.php">PACKAGE</a>
            <a href="book.php">BOOK</a>
        </nav>

        <div id="menu-btn" class="fa fa-bars"></div>

    </section>

    <!-- HEADER SECTION ENDS  -->

    <div class="heading" style="background:url(images/header-image3.avif) no-repeat"><h1>Bookings</h1></div>


    <!-- BOOKING SECTION STARTS  -->


    <section class="booking">

        <h1 class="heading-title">BOOK YOUR TRIP!</h1>

        <form name="myform" action="book_form.php" method="post" class="book-form" onsubmit="return validateform()">

        <div class="flex">
            <div class="inputBox" id="name">
                <span>Name :</span>
                <input type="text" placeholder="Enter Your Name" name="name">
            </div>
            <div class="inputBox">
                <span>Email :</span>
                <input type="email" placeholder="Enter Your Email" name="email">
            </div>
            <div class="inputBox">
                <span>Phone :</span>
                <input type="number" placeholder="Enter Your Number" name="phone">
            </div>
            <div class="inputBox">
                <span>Address :</span>
                <input type="text" placeholder="Enter Your Address" name="address">
            </div>
            <div class="inputBox">
                <span>Where To :</span>
                <input type="text" placeholder="Place You Want To Visit" name="location">
            </div>
            <div class="inputBox">
                <span>How Many :</span>
                <input type="number" placeholder="Number Of Guests" name="guests">
            </div>
            <div class="inputBox">
                <span>Arrival :</span>
                <input type="date" name="arrival">
            </div>
            <div class="inputBox">
                <span>Departure :</span>
                <input type="date" name="departure">
            </div>
            </div>

            <input type="submit" value="submit" class="btn" name="send">

        </form>

    </section>


    <!-- BOOKING SECTION ENDS  -->


    <!-- FOOTER SECTION STARTS  -->

    <section class="footer">
        <div class="box-container">

            <div class="box">
                <h3>EXTRA LINKS</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms of Use</a>
            </div>

            <div class="box">
                <h3>CONTACT INFO</h3>
                <a href="#"><i class="fas fa-phone"></i> 022 9820 2192</a>
                <a href="#"><i class="fas fa-phone"></i> 022 5643 8192</a>
                <a href="#"><i class="fas fa-envelope"></i> jairamsubhash1234@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Mumbai, India - 400104</a>
            </div>

            <div class="box">
                <h3>FOLLOW US</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
            </div>
        </div>
    </section>



    <!-- FOOTER SECTION ENDS  -->


    <!-- JS FILE LINK  -->
    <script src="script.js"></script>

    <!-- SWIPER JS LINK  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</body>

</html>