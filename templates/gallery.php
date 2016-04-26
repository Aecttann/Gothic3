<!DOCTYPE html>
	<head>
			<link href="../static/css/bootstrap.min.css" rel="stylesheet">
			<link href="../static/css/new_style.css" rel="stylesheet">
			<meta charset="utf-8">
			<title> Готика 3 </title>
			<Meta charset= "utf-8" >
			<Meta name="Author" content="Васильчук Александр">
			<link rel="shortcut icon" href="../static/images/icon.png" type="image/png">
			<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery-galleryview-1.0.1/jquery.galleryview-1.0.1-pack.js"></script>
<script type="text/javascript" src="js/jquery-galleryview-1.0.1/jquery.timers-1.1.2.js"></script>

<style type="text/css">
body {
        background: #000000 url(img/header.jpg) no-repeat center top;
	color: white;
}
#gallery_wrap {
	width: 820px;
	height: 368px;
	padding: 25px;
	background: url(img/border.png) top left no-repeat;
}
a:link,a:visited {
	color: #000000 !important;
	text-decoration: underline;}
a:hover {text-decoration: none;}
h3 {border-bottom-color: white;}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$('#photos').galleryView({
			panel_width: 800,
			panel_height: 300,
			frame_width: 100,
			frame_height: 38,
			transition_speed: 1200,
			background_color: '#a0a0a0a',
			border: 'none',
			easing: 'easeInOutBack',
			pause_on_hover: true,
			nav_theme: 'custom'
		});
	});
</script>
	</head>
	<body >

	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Gothic 3</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Главная</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Прохождение<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="vote.php">За кого проходить?</a></li>
        <li><a href="contacts.php">Контакты</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
	
	
	
	<ul id="nav">
	<li>
		<a href="index.php" title="Вернуться на главную страницу">Главная</a>
	</li>
	<li>
		<a href="videos.php" title="Видео">Видео</a>
		<ul>
			<li><a href="video.php">Ардея. Часть 1.</a></li>
			
		</ul>
	</li>
	<li>
		<a href="#" title="Галерея">Галерея</a>
		<ul>

		</ul>
	</li>
	<li>
		<a href="#" title="Файлы">Файлы</a>
		<ul>
			<li><a href="#">Classic Edition</a></li>
			<li><a href="#">Enhanced Edition</a></li>
			<li><a href="#">Platinum Edition</a></li>

		</ul>
	</li>
	<li>
		<a href="#" title="Как с нами связаться">Контакт</a>
		<ul>
			
			<li><a href="#">Местоположение</a></li>
		</ul>
	</li>
		</li>
	<li>
		<a href="about_game.php" title="Об игре">Об игре</a>

	</li>
</ul>




<center>
	<footer>
			<font align="center" color="white"><a href="/">Aectann</a>&copy; 2016</a></font>
		</footer>
			</center>
	</body>
</html>
