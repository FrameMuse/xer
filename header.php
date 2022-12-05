<?php require_once("config.php"); ?>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Меню навигации</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><?php echo $title_logo; ?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Главная</a></li>
            <li><a href="/about.php">О нас</a></li>
            <li><a href="/contact.php">Контакты</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Информация <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/garant.php">Гарантии</a></li>
                <li><a href="/review.php">Отзывы</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="https://primearea.biz/customer/" target="_blank">Мои покупки</a></li>
          </ul>
        </div>
      </div>
    </div>
    
<!-- Начало слайдера -->
    <div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="image/gta.jpg" alt="Grand Theft Auto: V">
          <div class="container">
            <div class="carousel-caption">
              <h1>Grand Theft Auto: V</h1>
              <p><a class="btn btn-lg btn-danger" href="#" target="_blank" role="button">Купить товар</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="image/doom.jpg" alt="Doom (2016)">
          <div class="container">
            <div class="carousel-caption">
              <h1>Doom (2016)</h1>
              <p><a class="btn btn-lg btn-danger" href="#" target="_blank" role="button">Купить товар</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="image/csgo.jpg" alt="Counter-Strike: Global Offensive">
          <div class="container">
            <div class="carousel-caption">
              <h1>Counter-Strike: Global Offensive</h1>
              <p><a class="btn btn-lg btn-danger" href="#" target="_blank" role="button">Купить товар</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- Конец слайдера -->