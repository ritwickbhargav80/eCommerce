<?php
session_start();

?>

<html>
    <head>
        <title>Laundary</title>
        <link rel="stylesheet" href="style9.css">
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
            <a href="laundry1.php"><div class="bakwaas" style="font-family: myfont3;">Laundary</div></a>
<a href="logout.php" style="font-size: 24px; margin: 5px; float: right; text-decoration: none; color: white; border: 1px solid; border-radius: 5px; background: #E2472F; width: 100px; text-align:center; height: 33px;">Logout</a>
            <a href="#" style="font-size: 24px; margin: 5px; float: right; text-decoration: none; color: #E2472F; font-family: myfont3;"><?php echo "Hi, ".$_SESSION['username']; ?></a>
            </nav>
            </div>
        </header>
        <div class="divider"></div>
        <h1 class="neon" data-text="Laundry" style="font-family: myfont5;">Laundry</h1><br><br><br><br><br><br><br>
        <!--br><br><br><br><br><br><br><br><br><br-->
        <h1 style="color: white; font-family: myfont3;">SERVICES FOR YOU:</h1>
        <div class="testimonials">
            <a href="WashandFold1.php" style="text-decoration: none;"><div class="card">
                <div class="layer"></div>
                <div class="content"><p style="font-family: myfont4;">Lately, after a thorough cycle of drying, our service providers will neatly fold and pack your laundry into our branded laundary bags and deliver it directly at your doorsteps.</p>
                    <div class="image"><img src="Pic14.jpg"></div>
                </div>
                <div class="details"><h2 style="color: white; font-family: myfont3;">WASH AND FOLD</h2></div>
                </div></a>
            <a href="washandiron1.php" style="text-decoration: none;"><div class="card">
                <div class="layer"></div>
                <div class="content"><p style="font-family: myfont4;">Want those tough creases on your clothes to vanish? We use specialized steam ironing process that adjusts the temperature and pressure to suit the type of garment being processed.</p>
                    <div class="image"><img src="Pic18.JPG"></div>
                </div>
                <div class="details"><h2 style="color: white; font-family: myfont3;">WASH AND IRON</h2></div>
                </div></a>
            <a href="" style="text-decoration: none;"><div class="card">
                <div class="layer"></div>
                <div class="content"><p style="font-family: myfont4;">Some type of clothing require special cleaning methods. We provide the highest quality drycleaning at your doorstep. From silks to leathers, to drapes and wedding gowns, we do it all.</p>
                    <div class="image"><img src="Pic16.JPG"></div>
                </div>
                <div class="details"><h2 style="color: white; font-family: myfont3;">DRYCLEAN</h2></div>
                </div></a>
            <a href="" style="text-decoration: none;"><div class="card">
                <div class="layer"></div>
                <div class="content"><p style="font-family: myfont4;">All your premium wear garments will be washed using premium fabric specific detergents. Strains will be spotted using advanced stain removing techniques before being washed.</p>
                    <div class="image"><img src="Pic19.JPG"></div>
                </div>
                <div class="details"><h2 style="color: white; font-family: myfont3;">PREMIUM WASH</h2></div>
                </div></a>
        </div>
        <br>
        <h1 style="color: white; font-family: myfont3; padding: 0px 20px;">WHY CHOOSE US:</h1>
        <div class="card4">
            <div class="front"><img src="Pic20.jpg" style="width: 300px; height: 300px;"></div>
            <div class="back">
                <div class="details">
                    <h2><b style="text-decoration: underline;">HIGH QUALITY SERVICES</b><br><br><span>Laundry services coupled with customised experience.</span></h2>
                </div>
            </div>
        </div>
            <div class="card1">
            <div class="front"><img src="Pic21.jpg" style="width: 300px; height: 300px;"></div>
            <div class="back">
                <div class="details">
                    <h2><b style="text-decoration: underline;">ONLINE ORDER AND PICK-UP</b><br><br><span>Direct pickup from your doorstep within 24hrs under express delievery.</span></h2>
                </div>
            </div>
        </div>
            <div class="card2">
            <div class="front"><img src="Pic15.jpg" style="width: 300px; height: 300px;"></div>
            <div class="back">
                <div class="details">
                    <h2><b style="text-decoration: underline;">ONE CLICK SOLUTION</b><br><br><span>Washing, Dry Cleaning and Ironing in one place for you.</span></h2>
                </div>
            </div>
        </div>
            <div class="card3">
            <div class="front"><img src="Pic22.png" style="width: 300px; height: 300px;"></div>
            <div class="back">
                <div class="details">
                    <h2><b style="text-decoration: underline;">SAFETY OF CLOTHES</b><br><br><span>Expert Staff within depth knowledge of fabric and garments.</span></h2>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h1 style="color: white; font-family: myfont3;">ABOUT OUR LAUNDRY SERVICES:</h1>
        <p style="font-size: 20px; font-family: myfont4; color: white; text-align: center; padding: 20px; font-size: 22px;">We provide premium washing and dry cleaning service leveraging mobile based technology. We pick up your dirty buds from your doorstep and deliver fresh, clean clothes back at your doorstep.<br><br>We provide affordable and convenient way of getting your wash, laundry and dryclean done with premium quality. Our instant pickup at a slot chosen by you is one of the reason why we are best at it. We also do laundry with antiseptic wash, fabric softner and hygenic detergents.<br><br>Try us by scheduling the pickup and get your laundry and dry clean at the tap of a button.</p>
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
                <p style="font-family: myfont4;">Customize your service by choosing between wash & dry, dry cleaning and other schemes.</p>
            </div>
        </div>
                <div class="boxlol">
            <div class="iconlol"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
            <div class="contentlol2">
                <h3 style="font-family: myfont3; text-align: center;">DELIVERY RIGHT BACK TO YOU</h3><br>
                <p style="font-family: myfont4;">We deliever your clothes after processing, right back at your doorsteps.</p>
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
                <li><a href="tailor1.php" style="text-decoration: none;">Tailor</a></li>
                <li><a href="laundry1.php" style="text-decoration: none; color: white;">Laundry</a></li>
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