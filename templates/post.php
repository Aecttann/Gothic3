<? 
// ----------------------------������������-------------------------- // 
 
$adminemail="aectann101@gmail.com";  // e-mail ������ 
 
 
$date=date("d.m.y"); // �����.�����.��� 
 
$time=date("H:i"); // ����:������:������� 
 
$backurl="index.php";  // �� ����� ��������� ��������� ����� �������� ������ 
 
//---------------------------------------------------------------------- // 
 
  
 
// ��������� ������ � ����� 
 
$name=$_POST['a002']; 
$surname=$_POST['a001']; 
$parts=$_POST['c001'];
 
$email=$_POST['email']; 
 
//$msg=$_POST['message']; 
 
  
 
// ��������� ���������� e-mail 
 /*
if (!preg_match("|^([a-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})|is", 
strtolower($email))) 
 
 { 
 
  echo 
"<center>��������� <a 
href='javascript:history.back(1)'><B>�����</B></a>. �� 
������� �������� ������!"; 
 
  } 
 */
// else 
 
// { 
 
 
$msg=" 
 
 
<p>���: $name</p> 

<p>�������: $surname</p> 
 
 <p>�����: $parts</p> 
 
<p>E-mail: $email</p> 
 
 
<p>���������: $msg</p> 
 
 
"; 
 
  
 
 // ���������� ������ ������  
 
mail("$adminemail", "$date $time ��������� 
�� $name", "$msg"); 
 
  
 
// ��������� � ���� ������ 
 
$f = fopen("message.txt", "a+"); 
 
fwrite($f," \n $date $time ��������� �� $name"); 
 
fwrite($f,"\n $msg "); 
 
fwrite($f,"\n ---------------"); 
 
fclose($f); 
 
  
 
// ������� ��������� ������������ 
 
print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
//--></script> 
 
$msg 
 
<p>��������� ����������! ���������, ������ �� ������ �������������� �� ������� ��������...</p>";  
exit; 
 
// } 
 
?>