<?php
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

    <title>BloodBank & Donor Management System | Search A Donar</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
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
        <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>


</head>

<body>

<?php include('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Search Donor</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Search  Donor</li>
        </ol>
            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <!-- Content Row -->
        <form name="donar" method="post">
               <div class="row">



<div class="col-lg-4 mb-4">
<div class="fw-normal">Blood Group<span style="color:red">*</span> </div>
<div><select name="bloodgroup" class="form-control" required>
<?php $sql = "SELECT * from  tblbloodgroup ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
<option value="<?php echo htmlentities($result->BloodGroup);?>"><?php echo htmlentities($result->BloodGroup);?></option>
<?php }} ?>
</select>
</div>
</div>


<div class="col-lg-4 mb-4">
<div class="fw-normal">District <span style="color:red">*</span></div>
<div>
<select class="form-control" name="district" required>
		<option selected="selected" value="0">Select District</option>
		<option value="BAGALKOTE">BAGALKOTE</option>
		<option value="BANGALORE RURAL">BANGALORE RURAL</option>
		<option value="BANGALORE URBAN">BANGALORE URBAN</option>
		<option value="BELGAUM">BELGAUM</option>
		<option value="BELLARY">BELLARY</option>
		<option value="BIDAR">BIDAR</option>
		<option value="BIJAPUR">BIJAPUR</option>
		<option value="CHAMARAJANAGARA">CHAMARAJANAGARA</option>
		<option value="CHIKKABALLAPUR">CHIKKABALLAPUR</option>
		<option value="CHIKMAGALUR">CHIKMAGALUR</option>
		<option value="CHITRADURGA">CHITRADURGA</option>
		<option value="DAKSHINA KANNADA">DAKSHINA KANNADA</option>
		<option value="DAVANAGERE">DAVANAGERE</option>
		<option value="DHARWAD">DHARWAD</option>
		<option value="GADAG">GADAG</option>
		<option value="GULBARGA">GULBARGA</option>
		<option value="HASSAN">HASSAN</option>
		<option value="HAVERI">HAVERI</option>
		<option value="KODAGU">KODAGU</option>
		<option value="KOLAR">KOLAR</option>
		<option value="KOPPAL">KOPPAL</option>
		<option value="MANDYA">MANDYA</option>
		<option value="MYSORE">MYSORE</option>
		<option value="RAICHUR">RAICHUR</option>
		<option value="RAMANAGARA">RAMANAGARA</option>
		<option value="SHIMOGA">SHIMOGA</option>
		<option value="TUMKUR">TUMKUR</option>
		<option value="UDUPI">UDUPI</option>
		<option value="UTTAR KANNADA">UTTAR KANNADA</option>
		<option value="YADAGIR">YADAGIR</option>

	</select>
</div>
</div>

</div>

<div class="row">
<div class="col-lg-4 mb-4">
<div><input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer"></div>
</div>
</div>
       <!-- /.row -->
</form>   

        <div class="row">
                   <?php 
if(isset($_POST['submit']))
{
$status=1;
$bloodgroup=$_POST['bloodgroup'];
$district=$_POST['district'];
$sql = "SELECT * from tblblooddonars where (status=:status and BloodGroup=:bloodgroup) and (district=:district)";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
$query->bindParam(':district',$district,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item">
                <div class="card h-100" style="background-color:red;">
                    <a href="#"><img class="card-img-top img-fluid" src="images/blood-donor.jpg" alt="" ></a>
                    <div class="card-block ">
                        <h4 class="card-title"><a href="#"><?php echo htmlentities($result->FullName);?></a></h4>
                        <p class="card-text"><b>Mobile No. / Email Id :</b> <?php echo htmlentities($result->MobileNumber);?> /
                        <?php if($result->EmailId=="")
                        {
                        echo htmlentities(NA);
                        } else {
echo htmlentities($result->EmailId);
}
?>
                             </p>
<p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
<p class="card-text"><b> Age:</b> <?php echo htmlentities($result->Age);?></p>
<p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>
<p class="card-text"><b>District :</b>                  
<?php if($result->district=="")
{
echo htmlentities('NA');
} else {
echo htmlentities($result->district);
}
?></p>
                    </div>
                </div>
            </div>

            <?php }}
else
{
echo htmlentities("No Record Found");

}
 } ?>
</div>

</div>
  <?php include('includes/footer.php');?>
    <!-- Bootstrap JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
