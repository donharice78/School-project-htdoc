<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School</title>
    <link rel="icon" type="image/x-icon" href="img/logo - fave.png" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="contact.css" />
    <link rel="stylesheet" href="footer.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
  </head>

  <body>
    <section class="contact-header">
      <nav>
        <a href="index.html"><img src="img/logo.png" alt="" /></a>
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

    <!-------------------   Contact Form ----------------------->
    <section class="container">
        <div class="form">
            <div class="contact-info">
              <h3 class="title">Let's get in touch</h3>
              <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                dolorum adipisci recusandae praesentium dicta!
              </p>
    
              <div class="info">
                <div class="information">
                  <i class="fas fa-map-marker-alt"></i> &nbsp &nbsp
                  <p>7 Avenue Du General Patton, <br> 77000 Melun</p>
                </div>
                <div class="information">
                  <i class="fas fa-envelope"></i> &nbsp &nbsp
                  <p>lorem@ipsum.com</p>
                </div>
                <div class="information">
                  <i class="fas fa-phone"></i>&nbsp&nbsp
                  <p>123-456-789</p>
                </div>
              </div>
    
              <div class="social-media">
                <p>Connect with us :</p>
                <div class="social-icons">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-instagram"></i>
                  </a>
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </div>
              </div>
            </div>
    
            <div class="contact-form">
              <span class="circle one"></span>
              <span class="circle two"></span>
    
              <form action="index.html" autocomplete="off">
                <h3 class="title">Contact us</h3>
                <div class="input-container">
                  <input type="text" name="name" placeholder="Username" class="input" required/>
                 
                </div>
                <div class="input-container">
                  <input type="email" name="email" placeholder="Email"  class="input" required />
                 
                </div>
                <div class="input-container">
                  <input type="tel" name="phone" placeholder="Phone"  class="input" required />
                  
                </div>
                <div class="input-container textarea">
                  <textarea name="message" placeholder="Message" class="input" required></textarea>
                </div>
                <input type="submit" value="Send" class="btn" />
              </form>
            </div>
          </div>
        </div>
    
    </section>


<!-------------------   Javascript for Toggle Menu ----------------------->
    <script src="/js/index.js"></script>
  </body>

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
    <script src="index.js"></script>


</html>
