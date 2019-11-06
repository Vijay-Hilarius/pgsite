<?php 
	$root=getenv("DOCUMENT_ROOT");
	session_start();
	date_default_timezone_set('Asia/Calcutta');
	$page_id=6;
	ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
	require_once("$root/lib/connection-variables.php");
	require_once("$root/lib/db-connections.php");
	require_once("$root/lib/relationship.php");
	require_once("$root/lib/admission-alert.php");
	require_once("$root/lib/master.php");
	$auth=new masterLibraries();
	$auth->sessionPermission($page_id);
	$admission_alert=new pgAlert();
	$getCourse=$admission_alert->getCourse($_SESSION["ticf_pg_id"]);
?>
<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> 
	<meta name="author" content=""> 
	<title>TICF - PG Admission Alert</title> 
	<link rel="stylesheet" href="<?php $root; ?>/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/fa/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/bootstrap-4.0.0-alpha.6-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/bootstrap-4.0.0-alpha.6-dist/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/css/master.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="<?php $root; ?>/css/customize.css?v=<?php echo time(); ?>">
    <link href="<?php $root; ?>/css/admission-alert.css?v=<?php echo time(); ?>" rel="stylesheet">
<style>


</style>
</head>

<body>
	<?php include("$root/master/header.php"); ?>
    <?php include("$root/master/menu-bar.php"); ?>
	
    <div id="admission-alert">
   	<div class="container">
	
    <?php 
	$cc=$admission_alert->courseDisplay($getCourse,1);
	$det=explode("~",$cc);
	$degree=$auth->degreeName($_SESSION["graduate"],$det[0]);
	$branch=$auth->courseName($_SESSION["graduate"],$det[1]);
	
	 ?>
    <div class="row text-center d-flex align-items-center justify-content-center">
    <h2 class="title-one description">PG Alert for <?php echo $degree."-".$branch; ?></h2>
    </div>
   	<?php 
	$currentAlert=new alertReq();
	$bb=$currentAlert->alertAuth($_SESSION["ticf_pg_id"],$getCourse);
	if($bb[0] != "" || $bb[0] != NULL){
		$i=0;
		foreach($bb as $aa){
			
			$i++;
			$dates_left=$currentAlert->dateDifference($aa[5],1);
			$colorCode=$currentAlert->colorCode($dates_left);
			
			if($aa[5] < $currentAlert->now) { $dateToLeft="<div id='clockdiv_$i' class='clockdivClass'>$dates_left</div>"; }
			else { $dateToLeft="<div id='clockdiv_$i' data-countdown='$aa[5]' class='clockdivClass'></div>"; }
			$dtr=strtotime($aa[5]);
			echo "<div class='card' id='$aa[1]'>
					
					 <form action='#' method='post' name='To_Apply'>
					 <div class='card-header d-flex align-items-center' style='background-color:$bch;'>
					 
						 <h6><a style='align:center' href='$aa[9]?pg_id=$page_id&cf=CN' data-toggle='tooltip' title='Click for More Details'>$i) $aa[2] ($aa[1]) $n_img</a></h6></div>
						 
					<div class='card-body'>
        			<div class='row'>
					
					<div class='col-12 col-sm-12 col-md-5 col-lg-5'>     
					<p><span class='alertSpan'>Deadline :</span>". $currentAlert->date_formates($aa[5],1)."</p>
					<p><span class='alertSpan'>Exam Date :</span>". $currentAlert->date_formates($aa[6],0)." $aa[7]</p>
                	<p><span class='alertSpan'>Note :</span> $aa[8]</p>
					</div>
					
					<div class='col-12 col-sm-12 col-md-3 col-lg-3 d-flex align-items-center justify-content-center $colorCode'>
                    

					
					$dateToLeft
					
					
					
					</div>
					
					<div class='col-12 col-sm-12 col-md-2 col-lg-2 d-flex align-items-center justify-content-center' >
					<a href='' class='$syllabus_btn' style='background-color:#ffffff;color:#9A9696;' data-toggle='tooltip' title='Click for Get Syllabus'>Syllabus&nbsp;&nbsp;<span class='glyphicon glyphicon-paperclip'></span></a>
					
					<a href='r' class='$syllabus_btn' style='background-color:#ffffff;color:#9A9696;' data-toggle='tooltip' title='Click for Get Previous Years Test Papers'>Test Papers&nbsp;&nbsp;<span class='glyphicon glyphicon-paperclip'></span></a>
					</div>
					
					<div class='col-12 col-sm-12 col-md-2 col-lg-2 d-flex align-items-center justify-content-center'>
					<button class='btn btn-warning'>View in Detail</btton>
					</div>
					
					</div>
					</div>
					
    			  </form>
				  
				  </div>";
				  
		}
		
		
	}
	
	else{
	echo $currentAlert->error_msg;	
		
	}
		
		
	?>
		 <!--  end navbar -->
</div>


	<?php include("$root/master/footer.php"); ?>
    <script type="text/javascript" src="<?php $root; ?>/js/jquery.countdown.js"></script>
    <script type="text/javascript">
	 $(function(){
     $('[data-countdown]').each(function() {
     var $this = $(this), finalDate = $(this).data('countdown');
     $this.countdown(finalDate, function(event) {
     $this.html(event.strftime("<div><span class='days'>%D</span><div class='smalltext'>Days</div></div><div><span class='hours'>%H</span><div class='smalltext'>Hours</div></div><div><span class='minutes'>%M</span><div class='smalltext'>Minutes</div></div><div><span class='seconds'>%S</span><div class='smalltext'>Seconds</div></div>"));
     });
	 if ($(this).text() == '00 days 00:00:00') $(this).html('Expired!');
	 });
	 });
	</script>
</body>
</html>