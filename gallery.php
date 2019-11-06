<?php
session_start();
$root=getenv("DOCUMENT_ROOT");
$page_id=002;
?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TICF Gallery</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    
    <link rel="stylesheet" href="<?php $root; ?>/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/fa/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/bootstrap-4.0.0-alpha.6-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/bootstrap-4.0.0-alpha.6-dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/css/master.css?v=<?php echo time(); ?>">
   <style>
   
.gallery-container h1 {
    text-align: center;
    margin-top: 70px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
    color: #58595a;
}

.gallery-container p.page-description {
    text-align: center;
    margin: 30px auto;
    font-size: 18px;
    color: #85878c;
}

.tz-gallery {
    padding: 40px;
}

.tz-gallery .thumbnail {
    padding: 0;
    margin-bottom: 30px;
    background-color: #fff;
    border-radius: 4px;
    border: none;
    transition: 0.15s ease-in-out;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
}

.tz-gallery .thumbnail:hover {
    transform: translateY(-10px) scale(1.02);
}

.tz-gallery .lightbox img {
    border-radius: 4px 4px 0 0;
}

.tz-gallery .caption{
    padding: 26px 30px;
    text-align: center;
}

.tz-gallery .caption h3 {
    font-size: 14px;
    font-weight: bold;
    margin-top: 0;
}

.tz-gallery .caption p {
    font-size: 12px;
    color: #7b7d7d;
    margin: 0;
}

.thumbnail img{
    
    height:24vh;
    width:23vw;
}

.baguetteBox-button {
    background-color: transparent !important;
}
</style>

</head>
<body>
<?php include("$root/master/header.php"); ?>

<div class="container gallery-container">

        		<div class="row text-center d-flex align-items-center justify-content-center">
					<h2 class="title-one">TICF Gallery</h2>
			</div>

    
    <div class="tz-gallery">

        <div class="row">

            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/chez-index.png">
                        <img src="images/chez-index.png" alt="PG Counselling">
                    </a>
                    <div class="caption">
                        <h3>Post Graduate Counselling</h3>
                        <p>TICF Post Graduate Counselling for UG Studying and Completed Students and Parents at Chennai.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/slide.png">
                        <img src="images/slide.png" alt="PG Workshop">
                    </a>
                    <div class="caption">
                        <h3>Workshop</h3>
                        <p>TICF Workshop for UG Studying and Completed Students at Chennai.</p>
                    </div>
                </div>
            </div>
            
        </div>

    </div>

</div>

<?php include("$root/master/footer.php"); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>