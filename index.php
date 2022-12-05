<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
	<link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
	<script type="text/javascript" src="js/primearea.js" charset="utf-8"></script>
  </head>
  <body>
	  
<?php include("header.php"); ?>

<div class="hiddenblok hidden-lg hidden-md hidden-sm"></div>
	<div class="container">
	 	<div class="row" style="border-radius: 3px;background: #222;border-color: #080808;padding: 15px;margin-right: 55px;margin-left: 55px;"> 
		    <div class="col-md-10 col-md-offset-1">
				<div id="primearea_category">
					<div style="text-align:center;"><img src="https://primearea.biz/shopsite/v1.2/img/preloader.gif" alt="Загрузка..."></div>
					<noscript>Ваш браузер не поддерживает JavaScript.</noscript>
				</div>
    		</div>
		</div>
    </div>
		<div class="container">
			<div class="row">
				<div id="primearea_main">
					<div style="text-align:center;"><img src="https://primearea.biz/shopsite/v1.2/img/preloader.gif" alt="Загрузка..."></div>
					<noscript>Ваш браузер не поддерживает JavaScript.</noscript>
				</div>
			</div>
 		</div>

<?php include("footer.php"); ?>