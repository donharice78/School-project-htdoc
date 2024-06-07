<?php
session_start();


if (isset($_SESSION["user_id"])) {
    $mysqli = require("database.php");
    $sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
}

include('database.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School</title>
    <link rel="icon" type="image/x-icon" href="img/logo - fave.png" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="footer.css" />
    <link rel="stylesheet" href="aboutUs.css" />
    <link rel="stylesheet" href="session.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>

<body>
    <section class="espace-header">
        <nav class="logo">
            <a href="index.html"><img src="img/Ecole DHN red.png" alt=""></a>
            <div class="nav-links" id="navLinks">
                <i class="bi bi-x" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="aboutUs.php">ABOUT</a></li>
                    <li><a href="courses.php">COURSE</a></li>
                    <li><a href="">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
            <i class="bi bi-list" onclick="showMenu()"></i>
        </nav>


    </section>


    <!-------------------   Espace ----------------------->


<section class="espace">
            <!-- STARTING MAIN CONTENT -->
        <!-- user info -->
        <!-- top left -->
        <div id="topLeft">
            <img src="" id="studentImage" alt="student profile picture" class="rounded-circle">
            <?php if (isset($_SESSION["user_id"])) : ?>
                <h4 id="studentName"><?= htmlspecialchars($user["name"]) ?></h4>
            <?php else : ?>
            <?php endif; ?>
            <span id="studentID"></span>
        </div>

        <!-- student progress -->
        <!-- top right -->
        <div id="topRight">
            <div class="timeDiv">
                <span id="displayTime"></span>
            </div>
            <h5>My Progress</h5>
            <div class="progress">
                <!-- the width generated goes below -->
                <div id="studentProgress" class="progress-bar bg-info" style="" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                </div>
            </div>
            <div class="text-center">
                <button class="btn">Resume</button>
            </div>
        </div>

        <!-- bottom left -->
        <div id="bottomLeft">
            <div id="active">
                <a href="#" onclick="courses()">courses</a>
                <a href="#" onclick="activity()">activity</a>
                <a href="#" onclick="account()">account</a>
            </div>
        </div>

        <!-- bottom right -->
        <div id="bottomRight">
            <h4 id="title"></h4>
            <ul id="list"></ul>

        </div>



</section>





        <!-- ENDING MAIN CONTENT -->

        <!-- STARTING SIDE MENU -->

        <!-- ENDING SIDE MENU -->

        <!--jquery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- popper is required for bootstrap 4 js functionality -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- makes bootstrap 4 js work -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- my custom js -->
        <script type="text/javascript" src="js/main.js"></script>












<!-------------------   Espace ----------------------->





<footer class="footer">
    <div class="footer-container">
        <div class="footer-row">
            <div class="footer-col">
                <h4>DHN Studies</h4>
                <ul>
                    <li><a href="/contact.html">Contact us</a></li>
                    <li><a href="#">about us</a></li>
                    <li><a href="#">privacy policy</a></li>
                    <li><a href="#">affiliate program</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>get help</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">shipping</a></li>
                    <li><a href="#">returns</a></li>
                    <li><a href="#">order status</a></li>
                    <li><a href="#">payment options</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                    <li><a href="#">watch</a></li>
                    <li><a href="#">bag</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">dress</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-------------------   Javascript for Toggle Menu ----------------------->
<script src="index.js"></script>
<script src="session.js"></script>



</body>


</html>