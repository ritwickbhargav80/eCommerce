<?php
session_start();

?>

<html>
    <head>
            <title>First Page</title>
            <link rel="stylesheet" type="text/css" href="style3.css">
             
            <script src="jquery-3.3.1.min.js">
            </script>
    </head>
    <body>
        <header>
        <div class="wrapper">
        <nav class="lol">
            <div class="logo">YOUR HELPERS</div>
             <a href="logout.php" style="font-size: 24px; margin: 5px; float: right; text-decoration: none; color: white; border: 1px solid; border-radius: 5px; background: #E2472F; width: 100px; text-align:center; height: 33px;">Logout</a>
            <a href="#" style="font-size: 24px; margin: 5px; float: right; text-decoration: none; color: #E2472F;"><?php echo "Hi, ".$_SESSION['username']; ?></a>
         </nav>
        <div class="container">
        <div class="column active">
            <div class="content">
                <h1>1</h1>
                <a href="appliance1.php">
                    <div class="box">
                    <h2>REPAIR APPLIANCES</h2>
                    <p>Best in class appliances service. We help in taking away the pain of finding the right appliances expert to cater to your needs. With reasonable pricing, you can avail our appliances services with just a few click of a button. We provide you home comfort service at your doorstep.</p>
                </div>
                </a>
            </div>
            <div class="bg bg1"></div>
        </div>
        <div class="column">
            <div class="content">
                <h1>2</h1>
                <a href="cobbler1.php">
                <div class="box">
                    <h2>COBBLER</h2>
                    <p>Team of expert shoe cobblers and craftsmen will make your boots, shoes and handbags look brand new again and deliver them back to you. All you have to do is to grab your worn out shoes, select the repair services that you need and submit your order online. "BANG" you are done.</p>
                </div>
                </a>
            </div>
            <div class="bg bg2"></div>
        </div>
        <div class="column">
            <div class="content">
                <h1>3</h1>
                <a href="tailor1.php">
                    <div class="box">
                        <h2>TAILOR</h2>
                    <p>Team of designers, helping you solve your Bespoke wardrobe worries. Got a fabric or looking for an end-to-end solution? Leave it all on us. We visit your home for design & measurement and fabric swatches. We provide an experience that epitomises that age old craft of refine tailoring.</p>
                </div>
                </a>
            </div>
            <div class="bg bg3"></div>
        </div>
        <div class="column">
            <div class="content">
                <h1>4</h1>
                <a href="laundry1.php">
                    <div class="box">
                        <h2>LAUNDARY</h2>
                    <p>We provide premium quality laundry and dry cleaning services through easy mobile and web interface. We pick up your dirty laundry from your doorstep and deliver clean clothes with fresh breeze back to you in an affordable price and convenient way of getting rid of your laundry problems.</p>
                </div>
                </a>
            </div>
            <div class="bg bg4"></div>
        </div>
        <div class="column">
            <div class="content">
                <h1>5</h1>
                <a href="About1.php">
                    <div class="box">
                    <h2>ABOUT DEVELOPERS</h2>
                    <p>We are committed to the awesomeness in everything that we do - and that includes taking care of your daily needs. We match you with the right proffessionals with the right budget. And we have a great team working behind who believes that teamwork is what makes the dream work.</p>
                </div>
                </a>
            </div>
            <div class="bg bg5"></div>
        </div>
    </div>
        <script src="jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(document).on('mouseover', '.wrapper .container .column', function(){
            $(this).addClass('active').siblings().removeClass('active')
        })
    </script>
            </div>
        </header>
        <div class="divider"></div>
    </body>
</html>