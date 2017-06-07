<?include("../db.php");
if (isset($_GET['id']));{$id=($_GET['id']);}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Удаление блюда</title>
</head>
<body>
<? if (isset($id)):?>
<? 
	$myrow=mysqli_query($db, "DELETE FROM meal WHERE id=$id");
	if ($myrow==true) {
		echo "<p> Блюдо удалено</p>";
	} else {
		echo "<p> Блюдо НЕ удалено</p>";
	}
?>
<?else:?>
<? 
	$myrow_all_meal=mysqli_query($db,"SELECT * FROM meal");
	$rezult_all_meal=mysqli_fetch_array($myrow_all_meal);
	do {
		printf ("<p> <a href='del_meal.php?id=%s'>%s %s %s %s </a></p>", $rezult_all_meal['id'], $rezult_all_meal['food'], $rezult_all_meal['weight'], $rezult_all_meal['price'], $rezult_all_meal['time_id'] );
	}
	while ($rezult_all_meal=mysqli_fetch_array($myrow_all_meal)) ;
	?>
	<?endif?>


<h3> <a href="../index.php"> На главную</a></h3>
</body>
</html>