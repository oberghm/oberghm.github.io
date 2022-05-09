
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>molcurphotos</title>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
</head>
<body>
    <!-- nav bar -->
    <section class="sub-header">
        <nav>
            <a href="index.html">molcurphotos</a>
            <div class="nav-links" id="navLinks">  
                <i class="fa fa-close" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="portfolio.html">PORTFOLIO</a></li>
                    <li><a href="personalwork.html">PERSONAL WORK</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="FAQs.html">FAQs</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>   
            <h1>Contact Me</h1>
    </section>
    
    
<!------- Contact me ------->
    
    <section class="contact-me">
            <div class="row">
                <div class="contact-col">
                    <div>
                        <i class="fa fa-envelope-o"></i>
                        <span>
                            <h5>molcur9284@gmail.com</h5>
                            <p>Please enter your booking requests below.</p>
                        </span>
                    </div>
                </div>
                <div class="contact-col">
                    <form name="frmBook" method="post" action="booking-form-handler.php">
                    <input type="text" name="fldName" placeholder="Enter your name" required>
                    <input type="text" name="fldEmail" placeholder="Enter email address" required>
                    <input type="text" name="fldPhone" placeholder="Enter your phone number" required>
                    <input type="text" name="fldType" placeholder="Enter the type of photos you are interested in" required>
                    <textarea rows="8" name="fldMessage" placeholder="Message" required></textarea>
                    <input type="submit" name="submit" class="hero-btn red-btn">
                    </form> 
                </div>
            </div>
    </section>
    
    
<!-------- footer ---------->

<section class="footer">
        <div class="icons">
            <a href="https://www.facebook.com/molcurphotos/"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/molcurphotos"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/molcurphotos/?hl=en"><i class="fa fa-instagram"></i></a>
            
        </div>
        <a href="https://www.instagram.com/molcurphotos/?hl=en" class="footer-link"><p>made with <i class="fa fa-heart-o"></i> by Hallie Oberg, Justin, and Spencer</p></a>
</section>      
  
  
<!----JavaScript for toggle menu---->
<script>
    var navLinks = document.getElementById("navLinks");

    function showMenu() {
        navLinks.style.right = "0";
    }

    function hideMenu() {
        navLinks.style.right = "-200px";
    }
</script> 
    
</body>
</html>  


<?php

require_once('sql_conn.php');


// get the post records
if(isset($_POST['submit'])){        
    $fldName = $_POST['fldName'];
    $fldEmail = $_POST['fldEmail'];
    $fldPhone = $_POST['fldPhone'];
    $fldType = $_POST['fldType'];
    $fldMessage = $_POST['fldMessage'];


// database insert SQL code
    $query= "INSERT INTO tbl_booking (fldName, fldEmail, fldPhone, fldType, fldMessage) VALUES ('$fldName', '$fldEmail', '$fldPhone', '$fldType', '$fldMessage')";
    $result = mysqli_query($dbc, $query) or die('Error querying database.');

    echo "<p align='center'> Thank you for your submission, I will be in contact with you shortly!<p>";

}

?>