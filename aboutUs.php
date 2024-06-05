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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
    <section class="aboutUs-header">
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
    <!-------------------   About us ----------------------->
    <section class="section_all bg-light" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title_all text-center">
                        <h3 class="font-weight-bold">Welcome To <span class="text-custom">Lorem Ipsum</span></h3>
                        <p class="section_subtitle mx-auto text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br />Lorem Ipsum has been the industry's standard dummy text.</p>
                        <div class="">
                            <i class=""></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row vertical_content_manage mt-5">
                <div class="col-lg-6">
                    <div class="about_header_main mt-3">
                        <div class="about_icon_box">
                            <p class="text_custom font-weight-bold">Lorem Ipsum is simply dummy text</p>
                        </div>
                        <h4 class="about_heading text-capitalize font-weight-bold mt-4">Lorem Ipsum is simply dummy text of the printing industry.</h4>
                        <p class="text-muted mt-3">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>

                        <p class="text-muted mt-3"> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img_about mt-3">
                        <img src="https://i.ibb.co/qpz1hvM/About-us.jpg" alt="" class="img-fluid mx-auto d-block">
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="about_content_box_all mt-3">
                        <div class="about_detail text-center">
                            <div class="about_icon">
                                <i class="fas fa-pencil-alt"></i>
                            </div>
                            <h5 class="text-dark text-capitalize mt-3 font-weight-bold">Creative Design</h5>
                            <p class="edu_desc mt-3 mb-0 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="about_content_box_all mt-3">
                        <div class="about_detail text-center">
                            <div class="about_icon">
                                <i class="fab fa-angellist"></i>
                            </div>
                            <h5 class="text-dark text-capitalize mt-3 font-weight-bold">We make Best Result</h5>
                            <p class="edu_desc mb-0 mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="about_content_box_all mt-3">
                        <div class="about_detail text-center">
                            <div class="about_icon">
                                <i class="fas fa-paper-plane"></i>
                            </div>
                            <h5 class="text-dark text-capitalize mt-3 font-weight-bold">best platform </h5>
                            <p class="edu_desc mb-0 mt-3 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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