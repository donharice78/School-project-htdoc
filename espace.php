<?php
$is_invalid = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require("database.php");

    $sql = sprintf(
        " SELECT * FROM user 
    WHERE email = '%s' ",
        $mysqli->real_escape_string($_POST["email"])
    );


    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();


    if ($user) {

        if (password_verify($_POST["password"], $user["password"]))
            session_start();

            session_regenerate_id();
        $_SESSION["user_id"] = $user["id"];
        header("Location:session.php");

        die;
    }

    $is_invalid = true;
}

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
    <link rel="stylesheet" href="espace.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
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
                    <li><a href="espace.php">LOGIN</a></li>
                </ul>
            </div>
            <i class="bi bi-list" onclick="showMenu()"></i>
        </nav>


    </section>


        <!-------------------   Espace ----------------------->

<section class="espace">
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
        
    </div>
    
        
    <form action="" method="post">
    <h3>Login Here</h3>
    <?php if ($is_invalid) : ?>
        <em>Invalid Email</em>
     <?php endif; ?>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="<?=htmlspecialchars($_POST["email"] ?? "")?>">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <button>Log In</button>
        
        <button class="SignUp" ><a href="signUp.php">Sign Up</a></button>
       
       

    </form>
   

 
    

</section>


</body>
</html>

   
</body>
</section>

 



   <!-------------------   Footer ----------------------->
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
<script src="/js/index.js"></script>

        

</body>


</html>