<!DOCTYPE html>
<?php
session_start();

?>
<html>
<head>
<title>Tailor</title>
<link rel="stylesheet" type="text/css" href="style8.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
            @font-face
            {
                font-family:myfont3;
                src: url(PatuaOne-Regular.woff);
            }
            @font-face
            {
                font-family:myfont4;
                src: url(Quicksand-Bold.woff);
            }
            @font-face
            {
                font-family:myfont5;
                src: url(Quicksand-Regular.woff);
            }
        </style>
</head>
<body>
    <header>
        <div class="wrapper">
        <nav class="lol">
            <a href="Homepage1.php"><div class="logo" style="font-family: myfont3; color: #E2472F;">YOUR HELPERS : </div></a>
            <a href="tailor1.php"><div class="bakwaas" style="font-family: myfont3;">Tailor</div></a>
                         <a href="logout.php" style="font-size: 24px; margin: 5px; float: right; text-decoration: none; color: white; border: 1px solid; border-radius: 5px; background: #E2472F; width: 100px; text-align:center; height: 33px;">Logout</a>
            <a href="#" style="font-size: 24px; margin: 5px; float: right; text-decoration: none; color: #E2472F; font-family: myfont3;"><?php echo "Hi, ".$_SESSION['username']; ?></a>
            </nav>
            </div>
        </header>
        <div class="divider"></div>
        <h1 class="neon" data-text="Tailor" style="font-family: myfont5;">Tailor</h1><br><br><br><br><br><br><br>
    <div class="card1">
        <div class="imgBox">
        <img src="men.jpg" style="width: 300px; height: 400px;">
        </div>
        <div class="details"><h3 style="font-family: myfont3; font-size: 25px;">TAILORING SERVICES FOR MEN</h3>
            <p style="font-family: myfont4; font-size: 20px;">Tailored Suits, Shirts, Sherwani, Pathani, we stitch almost everything, Book today and our Expert tailor will visit you at your doorstep.</p>
            <a href="men1.php" style="font-family: myfont4; font-size: 20px; text-decoration: none;"> CLICK ME </a>
        </div>
    </div>
    <div class="card2">
        <div class="imgBox">
        <img src="women.jpg" style="width: 300px; height: 400px;">
        </div>
        <div class="details"><h3 style="font-family: myfont3;   font-size: 25px;">TAILORING SERVICES FOR WOMEN</h3>
            <p style="font-family: myfont4; font-size: 20px;">Your own personalized boutique at your doorstep, Call our expert tailor home for all your tailoring needs.</p>
            <a href="women1.php" style="font-family: myfont4; font-size: 20px; text-decoration: none;"> CLICK ME </a>
        </div>
    </div>
    <div class="card3">
        <div class="imgBox">
        <img src="corporate.jpg" style="width: 300px; height: 400px;">
        </div>
        <div class="details"><h3 style="font-family: myfont3;  font-size: 25px;">CORPORATE DRESS DESIGNERS</h3>
            <p style="font-family: myfont4; font-size: 20px;">Are you looking for Corporate Dress designing or tailoring, then you are at the right place, we are expert in designing corporate uniform.</p> <a href="corporate1.php" style="font-family: myfont4; font-size: 20px; text-decoration: none;"> CLICK ME </a></div>
    </div>
    <div class="card4">
        <div class="imgBox">
        <img src="kid.jpg" style="width: 300px; height: 400px;">
        </div>
        <div class="details"><h3 style="font-family: myfont3;  font-size: 25px;">TAILORING SERVICES FOR KIDS</h3>
            <p style="font-family: myfont4; font-size: 20px;">Why should grown-ups have all the fun? We love to cater to the little ones too.</p> <a href="kids1.php" style="font-family: myfont4; font-size: 20px; text-decoration: none;"> CLICK ME </a></div>
        
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h1 style="color: white; font-family: myfont3;">ABOUT OUR TAILOR SERVICES:</h1>
        <p style="font-size: 20px; font-family: myfont4; color: white; text-align: center; padding: 20px; font-size: 22px;">At times, your size, style, choice of fabric or certain colour is not available. YOUR HELPERS is all about made- to- measure and cut-to-fit philosophy. Tailoring is synonymous with perfection in measurements, choice of fabric, colour, pattern, collar and cuffs et al. A nascent venture but elegance and sophistication best describes YOUR HELPERS’s services. With design focus on craftsmanship and aesthetics. Beautiful fabrics, chic designs, exceptional craftsmanship, and fine attention to detail, we know our client’s requirements. Our team of tailors are so inspired by the sophistication and elegance. Our team showcases the workmanship that had been handed down from generation to generation. At YOUR HELPER, we offer exceptional fitting to our made to measure garments. We aim to fit into the specific client needs as we as a brand stand has an affinity for combining perfect fit with exquisite details. Our stitched pieces speak for itself like a graceful statement.</p>
        <br>
        <h1 style="color: white; font-family: myfont3;">HOW IT WORKS:</h1>
        <div class="containerlol">
        <div class="boxlol">
            <div class="iconlol"><i class="fa fa-truck" aria-hidden="true"></i></div>
            <div class="contentlol">
                
                <h3 style="font-family: myfont3;">SCHEDULE YOUR PICK-UP</h3><br>
                <p style="font-family: myfont4;">Easily arrange pickup online with flexible scheduling.</p>
            </div>
        </div>
                <div class="boxlol">
            <div class="iconlol"><i class="fa fa-industry" aria-hidden="true"></i></div>
            <div class="contentlol1">
                <h3 style="font-family: myfont3;">TO OUR SERVICE PROVIDERS</h3><br>
                <p style="font-family: myfont4;">Customize your service according to your choice.</p>
            </div>
        </div>
                <div class="boxlol">
            <div class="iconlol"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
            <div class="contentlol2">
                <h3 style="font-family: myfont3; text-align: center;">DELIVERY RIGHT BACK TO YOU</h3><br>
                <p style="font-family: myfont4;">We deliever your clothes after redefining, right back at your doorsteps.</p>
            </div>
        </div>
    </div>
    <footer>
            
        <div class="footer-main">
        <div class="footer-inner">
        <div class="footer-left">
        <div class="footer-box">
        <h6>SERVICES</h6>
            <ul>
                <li><a href="appliance1.php" style="text-decoration: none;">Appliance Repair</a></li>
                <li><a href="cobbler1.php" style="text-decoration: none;">Cobbler</a></li>
                <li><a href="tailor1.php" style="text-decoration: none; color: white">Tailor</a></li>
                <li><a href="laundry1.php" style="text-decoration: none;">Laundry</a></li>
                <li><a href="About1.php" style="text-decoration: none;">About Developers</a></li>
            </ul>
        </div>
        <div class="footer-box">
        <h6>FOLLOW US:</h6>
            <ul style="display: flex">
                <li><a href="#" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px; margin-right: 20px;"><i class="fa fa-facebook" aria-hidden="true"></i>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </a>
                </li>
                
                <li><a href="#" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px; margin-right: 20px;"><i class="fa fa-twitter" aria-hidden="true"></i>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </a>
                </li>
                
                <li><a href="#" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px; margin-right: 20px;"><i class="fa fa-google-plus" aria-hidden="true"></i>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </a>
                </li>
                
                <li><a href="#" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px; margin-right: 20px;"><i class="fa fa-linkedin" aria-hidden="true"></i>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </a>
                </li>
                
                <li><a href="#" style="width: 50px; height: 50px; line-height: 50px; font-size: 20px; margin-right: 20px;"><i class="fa fa-instagram" aria-hidden="true"></i>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    </a>
                </li>
            </ul>
        </div>
            
        </div>
    <div class="footer-left">
        <div class="footer-box">
        <h6>INFORMATION</h6>
            <ul>
                <li><a href="#" style="text-decoration: none;">Terms</a></li>
                <li><a href="#" style="text-decoration: none;">Clients</a></li>
                <li><a href="#" style="text-decoration: none;">Partners</a></li>
                <li><a href="#" style="text-decoration: none;">Support</a></li>
            </ul>
        </div>
    </div>
            <div class="footer-left">
        <div class="footer-box">
        <h6>CONTACT US</h6>
            <ul>
                <li style="font-size: 14px; color: #999; font-family: myfont4;"><h3 style="color: white;">Mail Id:</h3>your.helpers1729@gmail.com</li>
                <li style="font-size: 14px; color: #999; font-family: myfont4;"><h3 style="color: white;">Contact No.:</h3>+91 821 829 0235</li>
            </ul>
        </div>
    </div>
        <div class="clr"></div>
        </div>
        </div>
        </footer>
</body>
</html>