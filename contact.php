<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $contact; ?> - <?php echo $title; ?></title>
	<link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
	<script type="text/javascript" src="js/primearea.js" charset="utf-8"></script>
  </head>
  <body>
	  
<?php include("header.php"); ?>

<div class="hiddenblok hidden-lg hidden-md hidden-sm"></div>
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="infoFormPagea">
				<div class="alert alert-warning">
					<center>Контакты магазина</center>
				</div>
					<div class="bs-callout bs-callout-info">
						<center>Если у вас возникли вопросы, то Вы можете оперативно связаться с нами, используя контактные данные.</center>
					</div>  
						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object" src="image/skype.png" width="64" height="64" alt="skype"></a>
									<div class="media-body">
										<h4 class="media-heading">SKYPE</h4>
											<h5><?php echo $skype; ?></h5>
  									</div>
						</div>
						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object" src="image/email.png" width="64" height="64" alt="e-mail"></a>
									<div class="media-body">
										<h4 class="media-heading">E-MAIL</h4>
											<h5><?php echo $email; ?></h5>
									</div>
						</div>
						<div class="media">
							<a class="pull-left" href="#">
								<img class="media-object" src="image/phone.png" width="64" height="64" alt="phone"></a>
									<div class="media-body">
										<h4 class="media-heading">PHONE</h4>
											<h5><?php echo $phone; ?></h5>
  									</div>
						</div>
  			</div>
		</div>
	</div>

<?php include("footer.php"); ?>