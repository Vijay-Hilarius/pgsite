<?php
	session_start();
	$root=getenv("DOCUMENT_ROOT");
	$page_id=1;
require_once("$root/lib/connection-variables.php");
require_once("$root/lib/db-connections.php");
require_once("$root/lib/master.php");
require_once("$root/lib/seminar.php");
$seminar=new seminarPG();
$shedule=$seminar->seminarShedule();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	<meta name="description" content="Technocrats India College Finder">
	<meta name="keywords" content="TICF PG,Technocrats India College Finder, India College Finder PG,College Finder PG,Nedunchezhian,Admission Alert, PG Seminar,PG Counselling,PG Alert,Post Graduate Options in India,Post Graduate Options,Guidance for College Students,Guidance for UG Students" /> 
	<meta name="author" content=""> 
	<title>TICF - Technocrats India College Finder</title> 
	<link rel="stylesheet" href="<?php $root; ?>/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/fa/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/bootstrap-4.0.0-alpha.6-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/bootstrap-4.0.0-alpha.6-dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/css/master.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/css/customize.css?v=<?php echo time(); ?>">
</head>

<body>
<?php include("$root/master/header.php"); ?>

<div class="index-section">
<div class="jumbotron jumbotron-fluid">
<div class="index-bar-section">
<div class="row">
<div class="col-10"><h1 class="index-bar-h1">"Never Ever Miss an Unknown Opportunity"</h1></div>
<div class="col-2" style="padding:1% 0% 0% 5%"><img alt="Nedunchezhian" src="images/chez-round.PNG?a=<?php echo time(); ?>" height="70" width="70" class="rounded-circle"></div>
</div>
</div>
</div>
</div>

<div class="index-content-section">
<div class="container-slide">
<div class="row">



<div class="col-12 col-sm-2 col-md-2 col-lg-2">
<h5 title="TICF-Services">Our Services</h5>
<a href='<?php $root; ?>/services/pg-counselling.php?pg_id=<?php echo $page_id; ?>'><button type="button" class="btn btn-secondary btn-block">PG  Counselling</button></a>
<a href='#'><button type="button" class="btn btn-secondary btn-block">PG Alert</button></a>
<a href='<?php $root; ?>/services/pg-options.php?pg_id=<?php echo $page_id; ?>'><button type="button" class="btn btn-secondary btn-block">PG Options</button></a>
</div>



<div class="col-12 col-sm-8 col-md-8 col-lg-8">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid index-slide-img" src="images/chez-index.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid index-slide-img" src="images/slide.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <a href='http://pg.indiacollegefinder.org/services/profile/pg-seminar.php?pg_id=1' ><img class="d-block img-fluid index-slide-img" src="images/pg-seminar-default.png" alt="Third slide"></a>
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
  
</div>



</div>


<div class="col-12 col-sm-2 col-md-2 col-lg-2">
<h5 title="PG Counselling" style="text-align:center">Seminar Schedule</h5>
<div class="row" style="height:33vh !important">
<a href='http://pg.indiacollegefinder.org/services/profile/pg-seminar.php?pg_id=1' class="col-12">
    
    
    
    <ul class='event-list'>
                    <?php
                    if($shedule[0] != null){
                    foreach($shedule as $values){
                        $old_date = $values[1];         

                        $middle = strtotime($old_date); 

                        $new_date = date('j<\s\up>S</\s\up> M Y', $middle);
                    echo "<li>
						<time datetime='$seminar_res[5]'>
							<span class='day'>".$new_date."&nbsp;<br> @&nbsp;" .$values[2]."</span>
							<span class='month'>".$values[3]."</span>
						</time>
						
					
					</li>";
					
                    }
                    }
                    else{
                       echo "<li>
						<time datetime='$seminar_res[5]'>
							<span class='day'>Updated Soon</span>
						</time>
						
					
					</li>"; 
                    }
					
                ?>
				</ul>
</a>
</div>

<a href='<?php $root; ?>/services/profile/pg-seminar.php?pg_id=<?php echo $page_id; ?>'><button type="button" class="btn btn-secondary btn-block">Register Now</button></a>

</div>


</div>
</div>
</div>


<div class="index-section" style="margin-top:2% !important;height:20vh;">
<div class="jumbotron jumbotron-fluid">
<h1 class="index-bar-h1" style="text-align:center;color:#9A9696">"A Student's Intellect cannot be<br> determined by One Examination"</h1>
</div>
</div>

<?php include("$root/master/footer.php"); ?>


</script>
</body>
</html>