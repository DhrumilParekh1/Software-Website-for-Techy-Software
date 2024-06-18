<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include "connection.php";
    $emailx = $_POST['email2'];

    $sql = "INSERT INTO newsletter(email) VALUES('$emailx')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Thank you for subscribing!";
    } else {
        echo "Try again";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Techy Software provides innovative software solutions to enhance your business operations.">
    <meta name="keywords" content="software, tech, business solutions, technology, software development">
    <title>Software website for Techy Software</title>
   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Techy Software</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav1" aria-controls="nav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav1">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
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

    
    <section id="home" class="home">
        <div class="container">
            <div class="content">
                <h1>Welcome to Techy Software</h1>
                <p class="lead">Softwares and services tailor made for your needs</p>
            </div>
        </div>
    </section>

   
    <section id="moving-photos" class="carousel slide" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="person.jpg" class="d-block w-100" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Explore our products</h5>
                    <a href="products.php" class="btn btn-primary">Explore more</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pichome1 (1).jpg" class="d-block w-100" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Explore our products</h5>
                    <a href="products.php" class="btn btn-primary">Explore More</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pichome2.jpg" class="d-block w-100" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Explore our products</h5>
                    <a href="products.php" class="btn btn-primary">Explore More</a>
                </div>
            </div>
        </div>
    </section>

    
    <section id="socials" class="socials">
        <div class="container text-center">
            <h2>Follow Us</h2>
            <a href="https://www.linkedin.com/company/techy-softwares/" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/LinkedIn_logo_initials.png" alt="LinkedIn" class="social-icon">
            </a>
            <a href="https://nexusinfo.in/" target="__blank">
                <img src="nexus.jpeg" alt="Nexus" class="social-icon">
            </a>
            <a href="https://www.instagram.com/nexusinfo.in?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="__blank">
                <img src="insta.png" alt="insta" class="social-icon">
            </a>
        </div>
    </section>

   
    <section id="newsletter" class="newsletter py-5">
        <div class="container text-center">
            <h2>Subscribe to our Newsletter</h2>
            <form method="post" class="form-inline justify-content-center mt-4">
                <input type="email" name="email2" class="form-control mb-2 mr-sm-2" placeholder="Enter your email" required>
                <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
            </form>
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

   
    <footer id="footer" class="footer py-4 bg-dark text-white">
        <div class="container text-center">
            <p>&copy; 2024 Techy Software. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
