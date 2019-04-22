<html>
<head>
<title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="style5.css">
</head>
<body>
    <?php
if(isset($_POST['sendmail']))
{
    session_start();
    $email = $_POST['user'];
    $link = mysqli_connect("localhost", "root", "", "project") or die("Cannot connect to the Database");
    $email = stripcslashes($email);
    $email = mysqli_real_escape_string($link, $email);
    $result = mysqli_query($link, "SELECT * FROM register Where email='$email'") or die("failed to query database".mysql_error());
    $row = mysqli_fetch_array($result);
    if($row['email'] == $email)
        {
                $_SESSION['password'] = $row['password'];

    require 'PHPMailerAutoload.php';
                require 'credential.php';
                $mail = new PHPMailer;

    //$mail->SMTPDebug = 4;

                $mail->IsSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';                 // Specify main and backup server
                $mail->Port = 587;                                    // Set the SMTP port
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = EMAIL;                // SMTP username
                $mail->Password = PASS;                  // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

                $mail->From = EMAIL;
                $mail->FromName = 'YOUR HELPERS';
                $mail->AddAddress($_POST['user']);  // Add a recipient
                $mail->addReplyTo(EMAIL);

                $mail->IsHTML(true);                                  // Set email format to HTML

                $mail->Subject = 'YOUR PASSWORD!';
                $mail->Body    = 'Dear Customer,<br><br>Your Password is: <strong>'.$_SESSION['password'].'</strong><br><br>Hope you are enjoying our services.<br>This mail is generated automatically.<br>So, kindly dont reply to this mail.<br><br>Thank you,<br>Team Your Helpers';

                if(!$mail->Send()) 
                {
                    echo '<script type="text/javascript"> window.onload= function() { alert("Message could not be sent. Try again later.");}</script>';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                    exit;
                }

                echo '<script type="text/javascript"> window.onload= function() { alert("Message send successfully! Check Your Email Id.");}</script>';     
        }
        else
        {
                echo '<script type="text/javascript"> window.onload= function() { alert("Failed to Login!");}</script>';
        }
}
?>
    <div class="loginbox">
    <img src="avtar1.png" class="avtar">
        <h1>Forgot Password</h1>
        <form id="login" method="post">
            <p>Enter Your Email Address:</p>
            <input type="email" name="user" id="user" placeholder="Enter Email Address" required>
            <input type="submit" id="btn" name="sendmail" value="Send Password">
            <a href="index.html">Ohh..I think I remember my password now!</a><br>
            <a href="register.html">New user. Wanna register yourself?</a>
        </form>
    </div>
</body> 
</html>