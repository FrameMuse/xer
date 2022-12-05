<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
	  <meta name="description" content="<?php echo $description; ?>">
	  <meta name="keywords" content="<?php echo $keywords; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $review; ?> - <?php echo $title; ?></title>
	<link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
	<script type="text/javascript" src="js/primearea.js" charset="utf-8"></script>
	<script src="https://vk.com/js/api/openapi.js?136" type="text/javascript"></script>
	<script type="text/javascript">
		VK.init({
		apiId: <?php echo $api_id; ?>,
		onlyWidgets: true
		});
	</script>
  </head>
  <body>
	  
<?php include("header.php"); ?>

<div class="hiddenblok hidden-lg hidden-md hidden-sm"></div>
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="infoFormPagea">
				<div class="alert alert-warning">
					<center>Отзывы магазина</center>
				</div>
					<div class="bs-callout bs-callout-info">
						Здесь Вы можете оставить отзыв о нашем магазине. Будем благодарны.
					</div>
							<div id="vk_comments"></div>
								<script type="text/javascript">
									VK.Widgets.Comments('vk_comments');
								</script>
  </div>
	</div>
</div>


<?php include("footer.php"); ?>