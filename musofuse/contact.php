<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $subject = $_POST['contact_subject'];

  $name = 'Name: '.$_POST['contact_name']."\r\n<br />";
  $email = 'Email: '.$_POST['contact_email']."\r\n<br />";
  $phone = 'Phone: '.$_POST['contact_phone']."\r\n<br />";

  $message = $name.$email.$phone.'Message: '.wordwrap($_POST['contact_message'], 70, "\r\n");
            //to ,subject, message
  $success = mail('admin@townsvillemusic.org.au', $subject, $message);
}


include("php/dbconnect.php");

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Townsville Community Music Centre - Contact</title>
<meta name="description" content="With the support of the Townsville City Council, we work from an office in the Civic ... All private schools and most government schools have music teachers.">
<link rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!-- JS -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.royalslider.min.js"></script>
</head>

<body>

<!-- import common navigation -->

<?php
require("php/header.php");
?>

<!-- WEBSITE LAYOUT Box -->
<div id="boxed_content" class="boxed_content">
<div class="inner">
<div id="content" class="site-content">
  <div class="page-inner">
    <div class="">
      <header class="page-header">
        <h1 class="page-title">Contact Us</h1>
      </header>
      <div class="content">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7532.384701246679!2d146.80352171666456!3d-19.273999680314027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6bd5f92267e9596d%3A0x58cd8e35887d45e0!2sTownsville+Civic+Theatre!5e0!3m2!1sen!2sau!4v1430780295606" style="width: 100%; border:0;" height="250" ></iframe>
        <ul class="horizontal-list">
          <li id="home_icon"> 41 Boundary Street, Townsville, Qld 4810</li>
          <li id="phone_icon"> (07) 4724 2086</li>
          <li id="mobile_icon"> 0402 255 182</li>
          <li class="about-contact-email" id="mail_icon"> <a href="mailto:admin@townsvillemusic.org.au?Subject=Enquiry" target="_top">admin@townsvillemusic.org.au</a></li>
        </ul>
        <br />
        <div class="form-row notice_bar">
          <?php 
                if(isset($success)){
                  if ($success) { //if message successfully send
                    echo '<p class="notice notice_ok">Thank you for contacting us. We will get back to you as soon as possible.</p>';
                  } else {
                    echo '<p class="notice notice_error">Due to an unknown error, your form was not submitted. Please resubmit it or try later.</p>';
                  }
                  ?>
          <script type="text/javascript">
                      $(document).ready(function(){  
                        $('html, body').animate({
                          scrollTop: $(".notice_bar").offset().top
                        }, 1200);
                      });
                    </script>
          <?php
                }
              ?>
        </div>
        <h4>Office Hours:</h4>
        <ul>
          <li>Monday - Wednesday: 9.30am - 2.30pm</li>
          <li>Thursday - Sunday: CLOSED</li>
        </ul>
        <br>
        <h4>CONTACT US</h4>
        <p>We would love to hear from you! Please let us know how we can be of service.</p>
        <form id="contact_form" name="contact_form" method="post" action="#">
          <div class="form-row field_text">
            <label for="contact_name">Your Name </label>
            <em>(required)</em><br>
            <input id="contact_name" class="input_text required" type="text" value="" name="contact_name" placeholder="e.g. John Doe" required>
          </div>
          <div class="form-row field_text">
            <label for="contact_phone">Your Phone Number </label>
            <em>(optional)</em><br>
            <input id="contact_phone" class="input_text" type="tel" value="" name="contact_phone" placeholder="e.g. 0412345678" required>
          </div>
          <div class="form-row field_text">
            <label for="contact_email">Your E-Mail Address </label>
            <em>(required)</em><br>
            <input id="contact_email" class="input_text required" type="email" value="" name="contact_email" placeholder="e.g. name@domain.com" required>
          </div>
          <div class="form-row field_text">
            <label for="contact_subject">Subject </label>
            <em>(required)</em><br>
            <input id="contact_subject" class="input_text required" type="text" value="" name="contact_subject" placeholder="e.g. Enquiry" required>
          </div>
          <div class="form-row field_textarea">
            <label for="contact_message">Message: </label>
            <br>
            <textarea id="contact_message" class="input_textarea" name="contact_message" required></textarea>
          </div>
          <div class="form-row field_submit">
            <input type="submit" value="Submit" id="contact_submit" class="ui small button coloured">
          </div>
        </form>
        <!-- END #contact_form --> 
        
      </div>
    </div>
    <!-- END #primary --> 
    
  </div>
</div>
<!-- END .site-content --> 
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow30.js"></script>
<?php
require("php/footer.php");
?>
</body>
</html>
