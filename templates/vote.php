<!DOCTYPE html>
	<head>
			<link href="../static/css/bootstrap.min.css" rel="stylesheet">
			<link href="../static/css/new_style.css" rel="stylesheet">
			<meta charset="utf-8">
			<title> Gothic 3 </title>
			<Meta charset= "utf-8">
			<Meta name="Author" content="��������� ���������">
			<link rel="shortcut icon" href="../static/images/icon.png" type="image/png">
			
<!--			<script src="/../static/js/validatingVoteForm.js"></script>
-->
<!--
<script type="text/javascript">

//������� sendform() ���������� �������� onsubmit � ����� ����� myform
function sendform() {

  if(!document.tipsForm.c001.checked)
{
	alert ('����������,������� ���!');
	return false;
}

	 if(!document.myform.c001.checked)
{
	alert ('����������, �������� ��� �����: ��� �� ���������� � �������� ������� ����������-�����?');
	return false;
}
return true;
}
</script>
-->
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
        <li class="active"><a href="index.php">�������</a></li>
		<!--
        <li class="dropdown">
		
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">�����������<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
		-->
        <li><a href="vote.php">�� ���� ���������?</a></li>
        <li><a href="contacts.php">��������</a></li>
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
		<a href="index.php" title="��������� �� ������� ��������">�������</a>
	</li>
	<li>
		<a href="videos.php" title="�����">�����</a>
		<ul>
			<li><a href="video.php">�����. ����� 1.</a></li>
			
		</ul>
	</li>
	<li>
		<a href="gallery.php" title="�������">�������</a>
		<ul>

		</ul>
	</li>
	<li>
		<a href="#" title="�����">�����</a>
		<ul>
			<li><a href="http://d.rutor.info/download/108900">Classic Edition</a></li>
			<li><a href="http://d.rutor.info/download/325319">Enhanced Edition</a></li>
			<li><a href="http://d.rutor.info/download/118841">Platinum Edition</a></li>

		</ul>
	</li>
	<li>
		<a href="contacts.php" title="��� � ���� ���������">�������</a>

	</li>
		</li>
	<li>
		<a href="#" title="�� ����">�� ����</a>

	</li>
</ul>

	
	 <form  method="POST" action="IorBorA.php" name="myform">
  <font align="center" color="white"><h3><p><b>��������� ����� ������� ��� ������� �� ���� �� ��������� Gothic 3<sup>*</sup>.</b></p></h1></font>
  <ol color="white">
  
<p class="int_h">
  <li color="white" value=1><font align="left" color="white"><p><b>����� ���� ��� ��������?</b></p></font>
  <input type="radio" name="a001" value="First"><font color="white">����</font><input type="number" value="<?=@$uphone;?>" max="6" min="0" maxlength="1" style="color:#f00; width:3em;" name="uphone" >
  <input type="radio" name="a001" value="Second"><font color="white">����</font>
</p>

<p class="int_h">
  <li><p><b>��� �� ���������� � �������� ������� ����������-�����?</b></p>
<input type="radio" name="b001" value="First"><font color="white">������������</font>
<input type="radio" name="b001" value="Second"><font color="white">������������</font>
</p>

<p class="int_h">
  <li><p><b>��� �� ���������� � �������� ������� ����������-�����?</b></p>
<input type="radio" name="c001" value="First"><font color="white">������������</font>
<input type="radio" name="c001" value="Second"><font color="white">������������</font>
</p>

<p class="int_h">
  <li><p><b>��� ����� �����?</b></p>
<p><input type="radio" name="d001" value="First"><font color="white">��� �����</font></p>
<p><input type="radio" name="d001" value="Second"><font color="white">��� ����</font></p>
<p><input type="radio" name="d001" value="Third"><font color="white">��� ����������</font></p>
<p><input type="radio" name="d001" value="Fourth"><font color="white">����������� ��������</font></p>
</p>

<p class="int_h">
  <li><p><b>��� ����� ������?</b></p>
<p><input type="radio" name="e001" value="First"><font color="white">��� �����</font></p>
<p><input type="radio" name="e001" value="Second"><font color="white">��� ����</font></p>
<p><input type="radio" name="e001" value="Third"><font color="white">��� ����������</font></p>
<p><input type="radio" name="e001" value="Fourth"><font color="white">����������� ��������</font></p>
</p>

<p class="int_h">
  <li><p><b>��� ����� ������?</b></p>
<p><input type="radio" name="f001" value="First"><font color="white">��� �����</font></p>
<p><input type="radio" name="f001" value="Second"><font color="white">��� ����</font></p>
<p><input type="radio" name="f001" value="Third"><font color="white">��� ����������</font></p>
<p><input type="radio" name="f001" value="Fourth"><font color="white">����������� ��������</font></p>
</p>

<p class="int_h">
  <li><p><b>��� ����� �������?</b></p>
<p><input type="radio" name="g001" value="First"><font color="white">���</font></p>
<p><input type="radio" name="g001" value="Second"><font color="white">������</font></p>
<p><input type="radio" name="g001" value="Third"><font color="white">Ҹ���� ���</font></p>
<p><input type="radio" name="g001" value="Fourth"><font color="white">����������� ��������</font></p>
</p>

<p class="int_h">
  <li><p><b>��� �� ���������� � ��������?</b></p>
<p><input type="radio" name="h001" value="First"><font color="white">������������</font></p>
<p><input type="radio" name="h001" value="Second"><font color="white">������������</font></p>
<p><input type="radio" name="h001" value="Third"><font color="white">����������� ��������</font></p>
</p>

</ol>
  <p class="subm"><input type="submit"></p>
  <font align="left" color="white"><p><b><sup>*</sup></b> - �� ������ ����� ������� � ���� �����, ����� ������� ������ �����, � ������� ��� ����� ���������� ������ �� ����������� �� �� ��� ���� �������.</p></font>
 </form>
	
	
	<center>
	<footer>
			<font align="center" color="white"><a href="/">Aectann</a>&copy; 2016</a></font>
		</footer>
			</center>
			

			
	</body>
</html>
