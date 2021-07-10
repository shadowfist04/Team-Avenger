<?php include 'sendmail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
  </head>
  <body>
<?php include('includes/header.php');?>
    <?php echo $alert; ?>
    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info cn" style="color: #0582E3;">
        <div><i class="fas fa-map-marker-alt"></i>SMVITM,Udupi</div>
        <div><i class="fas fa-envelope"></i>vaisanray@gmail.com</div>
        <div><i class="fas fa-phone"></i>99235687458</div>
      </div>
      <div class="contact-form">
        <h2 style="color: #0582E3;">Contact Us</h2>
        <form class="contact" action="" method="post">
           <input type="text" name="name" class="text-box" placeholder="Your Name" required>
           <input type="email" name="email" class="text-box" placeholder="Your Email" required/>
           <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
           <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->
    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

  </body>
</html>