<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $about; ?> - <?php echo $title; ?></title>
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
					<center>О магазине</center>
				</div>
					<div class="bs-callout bs-callout-info">
						Наш магазин создан на основе интернет-сервиса <a href="https://primearea.biz" target="_blank">PRIMEAREA.BIZ</a>. Это означает что вы, как покупатель, сможете воспользоваться выбранным товаром сразу после оплаты. Вам не придётся ждать ни секунды! Если это PIN-код игры/карточки, то вы получите набор цифр или отсканированное изображение этого кода,  если это программа или электронная книга, то вы получите ссылку для скачивания. При оплате нет необходимости регистрироваться! Единственное, что от вас потребуется - выбрать наиболее удобный для вас способ оплаты и осуществить покупку. 
					</div>
						<div class="alert alert-success">
							Все приобретенные вами товары хранятся в разделе «<a href="https://primearea.biz/customer" target="_blank">Мои покупки</a>» и вы в любой момент сможете их забрать.
						</div>
							<div class="alert alert-warning">
								Если у вас возникли вопросы, то Вы можете оперативно связаться с нами, используя <a href="contact.php">контактные данные</a>.
							</div>
  			</div>
		</div>
	</div>

<?php include("footer.php"); ?>