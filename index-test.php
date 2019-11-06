<?php
	$root=getenv("DOCUMENT_ROOT");
	$page_id=1;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	<meta name="description" content="Technocrats India College Finder">
	<meta name="keywords" content="TICF, Technocrats India College Finder, India College Finder, College Finder, India College, Nedunchezhian, Admission Alert, Career Guidance" /> 
	<meta name="author" content=""> 
	<title>TICF - Technocrats India College Finder</title> 
	<link rel="stylesheet" href="<?php $root; ?>/pg/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/pg/fa/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/pg/bootstrap-4.0.0-alpha.6-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/pg/bootstrap-4.0.0-alpha.6-dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/pg/css/master.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/pg/css/customize.css?v=<?php echo time(); ?>">
</head>

<body>
<?php include("$root/pg/master/header.php"); ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
       
      <div class="modal-header" style="text-align: center !important;">
	 <h3  style="margin-left:120px">Welcome to TICF</h3>
      </div>
      <div class="modal-body">
      <a href="http://indiacollegefinder.org"><button type="button" class="btn btn-primary">I'm a School Student</button></a>
      <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">I'm a College Student</button> 
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="index-section">
<div class="jumbotron jumbotron-fluid">
<div class="index-bar-section">
<div class="row">
<div class="col-10"><h1 class="index-bar-h1">"Never Ever Miss an Unknown Opportunity"</h1></div>
<div class="col-2"><img alt="Nedunchezhian" src="images/chez-round.PNG?a=<?php echo time(); ?>" height="80" width="80" class="rounded-circle index-bar-img"></div>
</div>
</div>
</div>
</div>

<div class="index-content-section">
<div class="container-slide">
<div class="row">



<div class="col-12 col-sm-2 col-md-2 col-lg-2">
<h5 title="TICF-Services">Our Services</h5>
<button type="button" class="btn btn-secondary btn-block">PG Counselling</button>
<button type="button" class="btn btn-secondary btn-block">PG Alert</button>
<button type="button" class="btn btn-secondary btn-block">PG Options</button>
<button type="button" class="btn btn-secondary btn-block">Updated Soon</button>
<button type="button" class="btn btn-secondary btn-block">Updated Soon</button>
</div>



<div class="col-12 col-sm-8 col-md-8 col-lg-8">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid index-slide-img" src="images/chez-index.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid index-slide-img" src="../advertisement/12th_Nov.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid index-slide-img" src="../advertisement/26th_Nov.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid index-slide-img" src="images/slide.png" alt="Fourth slide">
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
<h5 title="TICF-Seminar-Shedule" style="text-align:center">Seminar Schedule</h5>
<a href='http://indiacollegefinder.org/services/seminar_form.php?pg_id=$pgid&cf=AD' ><ul class='event-list'>
					<li>
						<time datetime='$seminar_res[5]'>
							<span class='month'>29<sup>th</sup> Jan 2018</span>
						</time>
						<div class='info'>
							<h2 class='title'>@ Chennai</h2>
						</div>
					</li>

				</ul>
</a>

<a href='http://indiacollegefinder.org/services/seminar_form.php?pg_id=$pgid&cf=AD' ><ul class='event-list'>
					<li>
						<time datetime='$seminar_res[5]'>
							<span class='month'>1<sup>st</sup> Feb 2018</span>
						</time>
						<div class='info'>
							<h2 class='title'>@ Madurai</h2>
						</div>
					</li>

				</ul>
</a>

<a href='http://indiacollegefinder.org/services/seminar_form.php?pg_id=$pgid&cf=AD' ><ul class='event-list'>
					<li>
						<time datetime='$seminar_res[5]'>
							<span class='month'>4<sup>th</sup> Feb 2018</span>
						</time>
						<div class='info'>
							<h2 class='title'>@ Tirunelveli</h2>
						</div>
					</li>

				</ul>
</a>

<a href='http://indiacollegefinder.org/services/seminar_form.php?pg_id=$pgid&cf=AD' ><ul class='event-list'>
					<li>
						<time datetime='$seminar_res[5]'>
							<span class='month'>10<sup>th</sup> Feb 2018</span>
						</time>
						<div class='info'>
							<h2 class='title'>@ Nagercoil</h2>
						</div>
					</li>

				</ul>
</a>
</div>


</div>
</div>
</div>


<div class="index-section" style="margin-top:1% !important;height:20vh;">
<div class="jumbotron jumbotron-fluid">
<h1 class="index-bar-h1" style="text-align:center;color:#9A9696">"A Student's Intellect Can not be<br> determined by One Examination"</h1>
</div>
</div>

<?php include("$root/pg/master/footer.php"); ?>

<script type="text/javascript">
jQuery(window).load(function(){'use strict';
	$('#exampleModal').modal('show');
});
</script>
</body>
</html>