<?
error_reporting (E_STRICT);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<form action="index.php" method="GET">
<?
$s="1";
if (isset($_GET['s'])) $s=$_GET['s'];
//echo $s;
if ($s=="1") 
{
echo "Вопрос: 1+2=?<br>";
echo "<input type=\"radio\" name=\"v1\" value=\"1\">1<br>";
echo "<input type=\"radio\" name=\"v1\" value=\"2\">2<br>";
echo "<input type=\"radio\" name=\"v1\" value=\"3\">3<br>";

echo "<input type=\"hidden\" name=\"s\" value=\"2\">";
}

if ($s=="2") 
{
echo "Вопрос: 2*2=?<br>";
echo "<input type=\"radio\" name=\"v2\" value=\"1\">2<br>";
echo "<input type=\"radio\" name=\"v2\" value=\"2\">4<br>";
echo "<input type=\"radio\" name=\"v2\" value=\"3\">6<br>";
echo "<input type=\"hidden\" name=\"v1\" value=\"".$_GET['v1']."\">";
echo "<input type=\"hidden\" name=\"s\" value=\"3\">";
}

if ($s=="3") 
{

echo "Вопрос: 3*3=?<br>";
echo "<input type=\"radio\" name=\"v3\" value=\"1\">9</input><br>";
echo "<input type=\"radio\" name=\"v3\" value=\"2\">12</input><br>";
echo "<input type=\"radio\" name=\"v3\" value=\"3\">15</input><br>";

echo "<input type=\"hidden\" name=\"v1\" value=\"".$_GET['v1']."\">";
echo "<input type=\"hidden\" name=\"v2\" value=\"".$_GET['v2']."\">";

echo "<input type=\"hidden\" name=\"s\" value=\"4\">";

}

if ($s>"3") 
{
echo "Правильных ответов: ".((int)($_GET['v1']=="3")+(int)($_GET['v2']=="2")+(int)($_GET['v3']=="1"))."<br>";
}

echo "<input type=\"submit\" value=\"Далее\">";

?>
</form>
</body>
</html>