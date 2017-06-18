<?if (isset($_POST['yx1']))  {$yx1=$_POST['yx1']; if ($yx1=='') {unset($yx1);} }
		if (isset($_POST['yx2']))  {$yx2=$_POST['yx2']; if ($yx2='') {unset($yx2);} }
		if (isset($_POST['yx3']))  {$yx3=$_POST['yx3']; if ($yx3=='') {unset($yx3);} }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Интернет кафе</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="center">
<h1> Интернет кафе</h1>
<h2><a href="../admin/add_meal.php">Занести блюдо в меню</a></h2>
<h2><a href="../admin/all_meal.php">Меню</a></h2>
<h2><a href="../admin/del_meal.php">Удаление</a></h2>
<? /*$i=1;
$max_myrow=$myrow[1];
do {
	$myrow[$i]=random_int(1, 7);
	echo '<p> ',$myrow[$i], ' ромашка, </p>';
	if ($myrow[$i]>$max_myrow) {
		$max_myrow=$myrow[$i];}
	
	$i=$i+1;
}
while ($i<=10);
echo "Количество элементов: ",count($myrow), '<br>максимум: ', $max_myrow;*/
?>

</body>
</html>