<!DOCTYPE html>
	<head>
			<link href="../static/css/bootstrap.min.css" rel="stylesheet">
			<link href="../static/css/new_style.css" rel="stylesheet">
			<meta charset="utf-8">
			<title> Gothic 3 </title>
			<Meta charset= "utf-8">
			<Meta name="Author" content="Васильчук Александр">
			<link rel="shortcut icon" href="../static/images/icon.png" type="image/png">
			
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
		<!--
        <li class="dropdown">
		
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Прохождение<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
		-->
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
		<a href="gallery.php" title="Галерея">Галерея</a>
		<ul>

		</ul>
	</li>
	<li>
		<a href="#" title="Файлы">Файлы</a>
		<ul>
			<li><a href="http://d.rutor.info/download/108900">Classic Edition</a></li>
			<li><a href="http://d.rutor.info/download/325319">Enhanced Edition</a></li>
			<li><a href="http://d.rutor.info/download/118841">Platinum Edition</a></li>

		</ul>
	</li>
	<li>
		<a href="contacts.php" title="Как с нами связаться">Контакт</a>

	</li>
		</li>
	<li>
		<a href="#" title="Об игре">Об игре</a>

	</li>
</ul>

	<center>
<p>Рекомендовано прохождение за орков (наёмников) - Сторона Белиара.</p>
</center>

	<div>
<form  action= "index.php" method="POST" onsubmit="return sendform()" name="form2">
<table border="4" cellspacing="2" cellpadding="10" align="bottom">
<caption> <strong><font color="white">Если Вы желаете получить дополнительные советы, заполните следующую форму и я свяжусь с Вами </font></strong></caption>
 
  <p class="int_h">
<tr><th align="center">  <font align="left" color="white"><p><b>Ваш e-mail</b></p></font>
  <td colspan="3" align="center"><input type="text"  name="email" placeholder="E-mail">

</p>

 <p class="int_h">
<tr><th align="center">  <font align="left" color="white"><p><b>Как к Вам обращаться?</b></p></font>
  <td colspan="3" align="center"><input type="text"  name="a001" placeholder="Фамилия">
  <input type="text" name="a002" placeholder="Имя">
  <input type="text" name="a003" placeholder="Отчество">
</p>



  <p class="int_h">
 <tr><th>   <font align="left" color="white"><p><b>Какого вид магии Вы предпочитаете?</b></p></font>
<td colspan="3" align="center"><font align="left" color="white">   <input type="radio" name="f1" onclick="uncheck_radio(this)"> Боевая </font>
<font align="left" color="white"><input type="radio" name ="f1" onclick="uncheck_radio(this)"> Целительная </font>
<font align="left" color="white"><input type="radio" name ="f2" onclick="uncheck_radio(this)"> Стелс/призыв </font>
</p>

  <p class="int_h">
 <tr><th align="center"> <font align="left" color="white"><p><b>В какие части Вы играли?</b></p></font>
<td colspan="3" align="center">    <input type="checkbox" name="b001"><font color="white"> Gothic 1 </font>
<input type="checkbox" name ="b001"><font color="white"> Gothic 2 </font>
<input type="checkbox" name ="b001"><font color="white"> Gothic 3 </font>
<input type="checkbox" name ="b001"><font color="white"> Gothic 4 </font>
</p>

  <p class="int_h">
 <tr><th>   <font align="left" color="white"><p><b>Предпочтительное оружие ближнего боя</b></p></font>
<td colspan="3" align="center"><font align="left" color="white">   <input type="checkbox" name="d001"> Одноручные мечи </font>
<font align="left" color="white"><input type="checkbox" name ="d002"> Двуручные мечи </font>
<font align="left" color="white"><input type="checkbox" name ="d003"> Тяжёлое оружие </font>
<font align="left" color="white"><input type="checkbox" name ="d004"> Тяжёлое оружие орков </font>
<font align="left" color="white"><input type="checkbox" name ="d005"> Топоры </font>
</p>

  <p class="int_h">
 <tr><th>   <font align="left" color="white"><p><b>Прошли ли Вы Gothic 2 до конца?</b></p></font>
<td colspan="3" align="center">   <font align="left" color="white"><input type="checkbox" name="c001"> Да </font>
<font align="left" color="white"><input type="checkbox" name ="c001"> Нет </font>
<font align="left" color="white"><input type="checkbox" name ="c001"> Нет, но убил пару драконов </font>
</p>

  <p class="int_h">
 <tr><th>   <font align="left" color="white"><p><b>Предпочтительное оружие дальнего боя</b></p></font>
<td colspan="3" align="center"><font align="left" color="white">   <input type="radio" name="e1" onclick="uncheck_radio(this)"> Луки </font>
<font align="left" color="white"><input type="radio" name ="e1" onclick="uncheck_radio(this)"> Арбалеты </font>
<font align="left" color="white"><input type="radio" name ="e2" onclick="uncheck_radio(this)"> Магия </font>
</p>

  </table><br>
<p class="subm"><input type="submit"></p>

</form>
</div>
	
	
	<center>
	<footer>
			<font align="center" color="white"><a href="/">Aectann</a>&copy; 2016</a></font>
		</footer>
			</center>
	</body>
</html>
