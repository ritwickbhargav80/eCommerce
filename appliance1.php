<?php
session_start();

?>

<html>
<head>
    <title>card</title>
    <link rel="stylesheet" type="text/css" href="style7.css">
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
            <a href="appliance1.php"><div class="bakwaas" style="font-family: myfont3;">Appliance Repair</div></a>
             <a href="logout.php" style="font-size: 24px; margin: 5px; float: right; text-decoration: none; color: white; border: 1px solid; border-radius: 5px; background: #E2472F; width: 100px; text-align:center; height: 33px;">Logout</a>
            <a href="#" style="font-size: 24px; margin: 5px; float: right; text-decoration: none; color: #E2472F; font-family: myfont3;"><?php echo "Hi, ".$_SESSION['username']; ?></a>
            </nav>
            </div>
        </header>
        <div class="divider"></div>
        <h1 class="neon" data-text="Appliance Repair" style="font-family: myfont5;">Appliance Repair</h1><br><br><br><br><br><br><br>
        <!--br><br><br><br><br><br><br><br><br><br-->
        <h1 style="color: white; font-family: myfont3;">SERVICES FOR YOU:</h1>
    <div class="containerqwe">
        <div class="cardqwe">
            <div class="img-boxqwe">
                <img src="qwe1.jpg">
            </div>
            <div class="contentqwe">
                <br>
                <h2 style="font-family: myfont3;">WASHING MACHINE<br></h2>
                <p style="font-family: myfont4;">We offer you a platform to hire experts in washing machine repair. With the best washing machine repair service near you, Get that faulty washing machine fixed right away!</p>
            <ul>
                <li><a href="washingform1.php" style="text-decoration: none; font-family: myfont4;">CLICK HERE</a></li>
            </ul>
            </div>
        </div>
        <div class="cardqwe">
            <div class="img-boxqwe">
                <img src="qwe3.jpg">
            </div>
            <div class="contentqwe">
                <h2 style="font-family: myfont3;">WATER PURIFIER<br></h2>
                <p style="font-family: myfont4;">Clean & safe drinking water is very critical for healthy human body. The water purifiers	also need proper cleaning, check up and timely services to keep you away from contaminated water.Book a appointment here.</p>
            <ul>
                <li><a href="waterform1.php" style="text-decoration: none; font-family: myfont4;">CLICK HERE</a></li>
            </ul>
            </div>
        </div>
        <div class="cardqwe">
            <div class="img-boxqwe">
                <img src="qwe2.jpg">
            </div>
            <div class="contentqwe">
                <h2 style="font-family: myfont3;">AIR CONDITIONER<br></h2>
                <p style="font-family: myfont4;">Whether you are looking to install a cooling unit for the first time or you are looking to replace your old unit. Our technicians measure your home to find the perfect cooling unit that meets your efficiency needs and budget.</p>
            <ul>
                <li><a href="ACform1.php" style="text-decoration: none; font-family: myfont4;">CLICK HERE</a></li>
            </ul>
            </div>
            </div>
        <div class="cardqwe">
            <div class="img-boxqwe">
                <img src="qwe4.jpg">
            </div>
            <div class="contentqwe">
                <h2 style="font-family: myfont3;">REFRIGERATOR<br></h2>
                <p style="font-family: myfont4;">Enough of calling the refrigerator repair centres a million times! Here, you can hire the best fridge repair service. The trusted professionals, experts in fridge service, are here to offer good refrigerator service near you.</p>
            <ul>
                <li><a href="fridge1.php" style="text-decoration: none; font-family: myfont4;">CLICK HERE</a></li>
            </ul>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
 <script src="tilt.jquery.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.cardqwe').tilt({
                maxTilt: 10,
                glare: true,
                maxGlare: .4
            })
        })
    </script>
    <h1 style="color: white; font-family: myfont3;">ABOUT OUR APPLIANCE REPAIR SERVICE:</h1>
        <p style="font-size: 20px; font-family: myfont4; color: white; text-align: center; padding: 20px; font-size: 22px;">We excel in taking away the pain of finding the right Appliances expert to cater to your needs, right at the comfort of your home. With reasonable pricing, you can avail our Appliances services with just a few clicks of a button. We provide expert and trustworthy professionals at your doorstep. All you need to do is let us know your requirement in Appliances services and schedule a convenient time for a Appliances at home.</p>
        <br>
        <h1 style="color: white; font-family: myfont3;">HOW IT WORKS:</h1>
        <div class="containerlol">
        <div class="boxlol">
            <div class="iconlol"><i class="fa fa-calendar" aria-hidden="true"></i></div>
            <div class="contentlol">
                
                <h3 style="font-family: myfont3;">BOOK YOUR APPOINTMENT</h3><br>
                <p style="font-family: myfont4;">Easily book your appointment online with flexible scheduling.</p>
            </div>
        </div>
                <div class="boxlol">
            <div class="iconlol"><i class="fa fa-wrench" aria-hidden="true"></i></div>
            <div class="contentlol1">
                <h3 style="font-family: myfont3;">LET YOUR HELPER IN</h3><br>
                <p style="font-family: myfont4;">Trust your helper and let him spend some nice time with your appliance.</p>
            </div>
        </div>
                <div class="boxlol">
            <div class="iconlol"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
            <div class="contentlol2">
                <h3 style="font-family: myfont3; text-align: center;">BANG! IT'S DONE..</h3><br>
                <p style="font-family: myfont4;">We take your pain away of searching for helpers and we make it just a matter of few clicks.</p>
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
                <li><a href="appliance1.php" style="text-decoration: none; color: white;">Appliance Repair</a></li>
                <li><a href="cobbler1.php" style="text-decoration: none;">Cobbler</a></li>
                <li><a href="tailor1.php" style="text-decoration: none;">Tailor</a></li>
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