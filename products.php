<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products and Services - Techy Software</title>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
    <link rel="stylesheet" href="products.css">
</head>
<body class="bg-gray-100">
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Techy Software</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav1" aria-controls="nav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="products.php">Products and Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="feedback.php">Feedback</a>
                </li>
            </ul>
        </div>
    </nav>

    
    <section class="services py-10">
        <div class="container">
            <h2 class="text-3xl font-bold text-center mb-8 fade-in" data-aos="fade-up">Our Products and Services</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="service-card fade-in" data-aos="flip-left">
                        <img src="web.jpg" alt="Web Development" class="service-img">
                        <h3 class="text-xl font-semibold mt-4">Web Development</h3>
                        <p>Creating responsive and robust web applications tailored to your needs.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="service-card fade-in" data-aos="flip-right">
                        <img src="mobile.jpg" alt="Mobile App Development" class="service-img">
                        <h3 class="text-xl font-semibold mt-4">Mobile App Development</h3>
                        <p>Designing user-friendly mobile apps to enhance customer engagement.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="service-card fade-in" data-aos="flip-up">
                        <img src="cloud.jpg" alt="Cloud Solutions" class="service-img">
                        <h3 class="text-xl font-semibold mt-4">Cloud Solutions</h3>
                        <p>Providing scalable cloud services to optimize your business operations.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="https://www.linkedin.com/company/techy-softwares/" class="visit-button" target="_blank">Visit Us</a>
            </div>
        </div>
    </section>

    
    <section id="socials" class="socials text-center">
        <div class="container">
            <h2>Follow Us</h2>
            <a href="https://www.linkedin.com/company/techy-softwares/" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn" class="social-icon">
            </a>
            <a href="https://nexusinfo.in/" target="__blank">
                <img src="nexus.jpeg" alt="Nexus" class="social-icon">
            </a>
            <a href="https://www.instagram.com/nexusinfo.in?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="__blank">
                <img src="insta.png" alt="Instagram" class="social-icon">
            </a>
        </div>
    </section>

    
    <section id="quick-links" class="quick-links py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="products.php">Products and Services</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                    </ul>
                </div>
                <div class="col-md-9 text-center">
                    
                </div>
            </div>
        </div>
    </section>

    
    <footer id="footer" class="footer py-4 bg-dark text-white text-center">
        <div class="container">
            <p>&copy; 2024 Techy Software. All rights reserved.</p>
        </div>
    </footer>

    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
