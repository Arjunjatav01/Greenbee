<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greenbee</title>
    <!-- -------page icon ---------->
    <link rel="page icon" href="pics/plant.png">
    <!-- ------ stylesheet------- -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="header">
    <div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="pics/plant.png" alt="logo">
            <p>Greenbee</p>
        </div>
        <nav>
            
    
        
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="getknow.html">Get to know us</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
            </ul>
        </nav>
    </div>
    <h3 class="cont">Contact Form</h3>

<div class="container2">
  <form method="POST" action="process.php">
    <label for="fname">First Name</label>
    <input type="text" id="firstname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lastname" name="lastname" placeholder="Your last name..">
    
    <label for="email">Email</label>
    <input type="text" id="email" name="email" placeholder="Email">

    <label for="sub">Subject</label>
    <input type="text" id="subject" name="subject" placeholder="Subject">


    <label for="Enquiry">Enquiry</label>
    <textarea id="enquiry" name="enquiry" placeholder="Write something.." style="height:200px"></textarea>

    <button class="submit" type="submit"> Submit</button>
  </form>
</div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our app</h3>
                    <p>Download App for Android and IOS Mobile phone.</p>
                </div>
                <div class="footer-col-2">
                    <img src="pics/plant.png" alt="logo">
                    <p>Your own Green World</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful links</h3>
                    <ul>
                        <li><a href="getknow.html"> Get to know us</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li><a href="www.facebook.com">Facebook</a></li>
                        <li><a href="www.twitter.com">Twitter</a></li>
                        <li><a href="www.instagram.com">Instagram</a></li>
                        <li><a href="www.youtube.com">Youtube</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022 - Greenbee</p>
        </div>
    </div>
    </body>
    </html>