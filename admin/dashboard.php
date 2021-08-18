<?php 
session_start();
error_reporting(0);
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{ ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>GMS | Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link type="text/css" href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <!--external css-->
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
        
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="bootstrap/css/style-responsive.css" rel="stylesheet">

    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <?php include('include/header.php');?> 

  <div class="wrapper">
    <div id="container" >

<?php include('include/sidebar.php');?>
      <div class="content">
         
                <div class="row">
                  <div class="col-lg-9 main-chart">
                  	<div class="col-md-2 col-sm-2 box0">
                <div>
                 
                    </div>
                  </div>
                  	<div class="col-md-2 col-sm-2 box0">
                  		<div class="box1">
					  			      <span class="li_news"></span>

                                        <?php                    
                                        $rt = mysqli_query($con,"SELECT * FROM tblcomplaints where userId='".$_SESSION['id']."' and status is null");
                                        $num1 = mysqli_num_rows($rt);
                                        {?>
					  			<h3><?php echo htmlentities($num1);?></h3>
 
                 		  </div>
					  			<p><?php echo htmlentities($num1);?> Complaints not Process yet</p>
                   </div>
<?php }?>


                   <div class="col-md-2 col-sm-2 box0">
                      <div class="box1">
                          <span class="li_news"></span>
<?php 
$status="in Process";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where userId='".$_SESSION['id']."' and  status='$status'");
$num1 = mysqli_num_rows($rt);
{?>
                  <h3><?php echo htmlentities($num1);?></h3>
                      </div>
                  <p><?php echo htmlentities($num1);?> Complaints Status in process</p>
                  </div>
  <?php }?>

                  <div class="col-md-2 col-sm-2 box0">
                      <div class="box1">
                          <span class="li_news"></span>
<?php 
$status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where userId='".$_SESSION['id']."' and  status='$status'");
$num1 = mysqli_num_rows($rt);
{?>
                  <h3><?php echo htmlentities($num1);?></h3>
                      </div>
                  <p><?php echo htmlentities($num1);?> Complaint has been closed</p>
                  </div>
<?php }?>
                  	
                  	
              </div><!-- /row mt -->	
                  

</div>
</div>
<?php include("include/footer.php");?>
</div>

    <!-- js placed at the end of the document so the pages load faster -->
    
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>

    	
  </body>
</html>
<?php } ?>
