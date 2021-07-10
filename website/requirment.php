<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BloodBank & Donor Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body>


<?php include('includes/header.php');?>
<h1 class="main"><u>Blood Donation Eligibility:</u></h1
<section class="head">
<div class="content">
    <h1 class="main">Blood donation is a wonderful way of giving back a life, but to ensure the safety of both donors and recipients there are few requirements you should keep in mind.</h1>

</div>

</section>
<!-- close head -->
<section class="req">
    <h3 style="text-align:left; margin:2% 0 2% 7%; font-weight:bold; font-size: 30px;"> Know Your Blood Group : –</h3>
    <p style="font-family: 'Montserrat', sans-serif;font-size: 20px; margin:2% 7% 2% 7%;">The first step is to know your blood group and to which blood group your blood matches for donation. See the blood donation chart below</p>
    <img src="images/blood-charts.jpg" style="margin:2% 15% 2% 15%; text-align:center;" height="600" width="800" alt=""/>

</section>
<section>
    <ul style="margin: 2% 7% 1% 7%;font-size:23px;">
<li>Blood O can donate red blood cell to anybody its the Universal Blood Donor.</li>
<li>Blood group AB can recieve red blood cell from anybody its the Universal Recipient.</li>
<li>Blood A and give blood to A’s and AB’s only</li>
<li>Blood B can give blood to B’s and Ab’s only</li>
                </ul>
<p style="margin: 2% 7% 1% 7%; font-family: 'Montserrat', sans-serif;font-size: 20px;" > In addition to the A and B antigens, There is a third antigen called the Rh factor, which can be either present (+) or absent ( – ). In general, Rh-negative blood is given to Rh-negative patients, and Rh positive blood or Rh negative blood may be given to Rh positive patients.</p>
</section>
<section>
    <<h2 style="margin: 2% 7% 1% 7%;font-family: 'Heebo', sans-serif; font-weight:bold; font-size:30px"> A healthy person:-</h2>
     <ul style="margin: 2% 7% 1% 7%;font-size:23px;">
<li>You should be healthy, fit and not be suffering from any transmittable diseases can donate blood..</li>
<li>You must be 18 -60 years old and have a minimum weight of 50Kg can donate blood.</li>
</ul>
</section>
<section>
    <<h2 style="margin: 2% 7% 1% 7%;font-family: 'Heebo', sans-serif; font-weight:bold; font-size:30px">Check when did you last time donated blood or suffered from any serious diseases:-</h2>
     <ul style="margin: 2% 7% 1% 7%;font-size:23px;">
<li>You should not already be donated blood or have been treated for malaria within the last three months..</li>
</ul>
</section>
<section>
    <<h2 style="margin: 2% 7% 1% 7%;font-family: 'Heebo', sans-serif; font-weight:bold; font-size:30px"> Maintain your blood donation eligibility:-</h2>
     <ul style="margin: 2% 7% 1% 7%;font-size:23px;">
<li>Don’t consume Alcohol or caffeine beverages before donating blood.</li>
<li>Have a healthy meal before your donation – avoid foods with high fat just before donation.</li>
<li>Maintain Hemoglobin level 12.5% minimum..</li>
</ul>
</section>
<section>
    <<h2 style="margin: 2% 7% 1% 7%;font-family: 'Heebo', sans-serif; font-weight:bold; font-size:30px">To be careful:-</h2>
     <ul style="margin: 2% 7% 1% 7%;font-size:23px;">
<li>You should not be suffering from Cardiac arrest, hypertension, kidney alignments, epilepsy or diabetics. if so you must consult the doctor before donating the blood.</li>
<li>Ladies with a bad miscarriage should avoid donating blood for the next 6 months, or if you have been involved in some serious accident.</li>
</ul>
<h3 style="text-align:center; font-size:30px; marigin: 3% auto;">Thinking to be an active blood donor?</h3>
 <div class="col-4" style="text-align:center; margin:1% auto 2% auto; ">
                <a class="btn btn-lg btn-secondary btn-block" href="become-donar.php" style="text-align:center;">Donate</a>
            </div>
        

    </div>
</section>
<?php include('includes/footer.php');?>
</body>
<html>
