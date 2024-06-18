<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
include "connection.php";
$name=$_POST['name1'];
$email=$_POST['email1'];
$message=$_POST['message1'];

$sql="insert into feedback(name, email, message) values('$name', '$email', '$message')";
$result=mysqli_query($conn, $sql);

if($result){
 echo "feedback submitted successfully. Thank you!";
}
else{
    echo "feedback not submitted";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - Techy Software</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="feed.css">
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

    
    <section id="feedback" class="feedback py-5">
        <div class="container">
            <h2 class="text-center text-white mb-4">Feedback</h2>
            <div class="feedback-form p-4 rounded">
                <form id="feedbackForm" method="POST">
                    <div class="form-group">
                        <label for="name">Your Name:</label>
                        <input type="text" class="form-control" id="name" name="name1" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email:</label>
                        <input type="email" class="form-control" id="email1" name="email1" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Feedback:</label>
                        <textarea class="form-control" id="message1" name="message1" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Feedback</button>
                </form>
            </div>
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
