<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(strlen($_SESSION['aid'])==0){
header('location:logout.php');
} else {
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <title>IITU Admission | Dashboard</title>
  <?php
    include('includes/includes.php');
   ?>
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
   <?php include_once('includes/header.php');?>
 <?php include_once('includes/leftbar.php');?>

 <div class="app-content content">
     <br>
     <h3><font color="#F4F5FA"> """""     </font><font color="green"> Welcome Back, </font> <?php echo $name;?> </h3>
 </div>

<?php include('includes/footer.php');?>

</body>
</html>
<?php } ?>
