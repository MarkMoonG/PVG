<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?
$m=file("vopr.txt");
for ($i=0;$i<count($m);$i++)
{$p=$m[$i];
$v=explode("|",$p);
echo "Вопрос: ".$v[1]."<br>";
$c=count($v);
if($c>=3){for ($j=2;$j<$c;$j++) echo($j-1).") ".$v[$j]."<br>";}
}
?>
</body>
</html>