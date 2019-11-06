<?php
session_start();
$root=getenv("DOCUMENT_ROOT");
$page_id=1;
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	<meta name="description" content="Technocrats India College Finder">
	<meta name="keywords" content="TICF, Technocrats India College Finder, India College Finder, College Finder, India College, Nedunchezhian, Admission Alert, Career Guidance, About Us, About TICF" /> 
	<meta name="author" content=""> 
<title>TICF PG - About Us</title>



	<link rel="stylesheet" href="<?php $root; ?>/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/fa/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/bootstrap-4.0.0-alpha.6-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/bootstrap-4.0.0-alpha.6-dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/css/master.css?v=<?php echo time(); ?>">
<style type="text/css" media="all">
.address{
	height:30vh !important;
}

.card-body{
padding-left:4%;
vertical-align:middle;	
}
</style>
</head>

<body>
<?php include("$root/master/header.php"); ?>
<section>
<div class="container">
    		<div class="row text-center d-flex align-items-center justify-content-center">
					<h2 class="title-one">Contact Us</h2>
			</div>
            
            <div class="row">
            
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                <div class="card address">
                <div class="card-header"><h5>Chennai - Head Office</h5></div>
                <div class="card-body d-flex align-items-center">
                <p>No 11, 2nd Floor<br>C.I.T Colony 1st Main Road<br>Mylapore,Chennai - 4<br>Phone - 044 42303300</p>
                </div>
                </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card address">
                <div class="card-header"><h5>Madurai</h5></div>
                <div class="card-body d-flex align-items-center">
                <p>329/2,Lakshmi Illam,<br> Malligai Cross Street, <br/>Malligai Veethi,Gomathipuram,<br/> Madurai - 625 020.<br>Phone - 0452-2582090</p>
                </div>
                </div>
                </div>
            </div>
            <div style="height:20px"></div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card address">
                <div class="card-header"><h5>Trichy</h5></div>
                <div class="card-body d-flex align-items-center">
                <p>Block No 1, TS No 5/2, <br>State Bank of India Officers <br/>Colony, Tiruchirapalli,<br/>Near Ayyappa Temple.<br>Phone - 0431 4214499</p>
                </div>
                </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                <div class="card address">
                <div class="card-header"><h5>Erode</h5></div>
                <div class="card-body d-flex align-items-center">
                <p>59, I Floor, <br> Sanjay Nagar – Raja Street,  <br/>(Sampath Nagar), Erode.<br>Phone - 94455 99825</p>
                </div>
                </div>
                </div>
            </div>
            
            
            </div>
            
            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
            <div id="g-map" class="no-padding" >


		

			<div class="map" id="map"></div>

            <div style="text-decoration:none; overflow:hidden; height:60vh !important; width:100%; max-width:100%;"><div id="my-map-canvas" style="height:170%; width:100%;max-width:100%;">

            <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7773.809171912856!2d80.261177!3d13.041745!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9db5dcf071001a7b!2sTechnocrats+India+College+Finder!5e0!3m2!1sen!2sin!4v1479292522721" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

            

            </div>

            <a class="embedded-map-html" rel="nofollow" href="https://www.interserver-coupons.com" id="auth-maps-data" title="Technocrats India College Finder">InterserverCoupons</a><style>#my-map-canvas img{max-width:none!important;background:none!important;}</style></div><script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=bb3e2e96-e47c-3c74-9d17-fa23b80fc44c&c=embedded-map-html&u=1476344385" defer="defer" async="async"></script>

   </div>
			</div>


            
            
            </div>
            
</div>
</section>
<?php include("$root/master/footer.php"); ?>
</body>
</html>