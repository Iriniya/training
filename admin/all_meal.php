<?include("../db.php");
	if (isset($_GET['id']));{$id=($_GET['id']);}
	if (isset($_POST['id']))  {$id=$_POST['id']; }
	if (isset($_POST['food']))  {$food=$_POST['food']; }
	if (isset($_POST['weight']))  {$weight=$_POST['weight']; }
	if (isset($_POST['price']))  {$price=$_POST['price'];  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Меню</title>
	<link rel="stylesheet" type="text/css" href="../	style.css">
</head>
<body>
	<? if ($_GET['id']):?>
	<h1>Внесите изменения в блюдо</h1>
	<? $myrow=mysqli_query($db, "SELECT * FROM meal WHERE id='$id'");
	$rezult=mysqli_fetch_array($myrow);
	$time_id=$rezult['time_id'];
	?>
	<form name="edit_meal" method="post" action="all_meal.php">
		<label for="food"><p>Название блюда: </p></label>
		<input id="food" type="text" name="food" value=<?=$rezult["food"]?>><br>
		<label for="weight"><p>Масса блюда: </p></label>
		<input id="weight" type="text" name="weight" value=<?=$rezult['weight']?>><br>
		<label for="price"><p>Цена блюда:</p></label>
		<input id="price" type="text" name="price"  value=<?=$rezult['price']?>><br>
		<input id="id" type="hidden" name="id" value=<?=$id?>><br>
		<input type="submit" name="save_food" value="Сохранить">
	</form>
<?elseif ($_POST['id']):?>
	<?$myrow_food=mysqli_query($db, "UPDATE meal SET food='$food',  weight='$weight', price='$price' WHERE id=$id");
	if ($myrow_food==true) {
		echo "<p> Блюдо $food обновлено</p>";
	} else {
		echo "<p> Блюдо НЕ обновлено</p>";
	}
	?>
<?else:?>
	<? 
	$myrow_all_meal=mysqli_query($db,"SELECT * FROM meal");
	$rezult_all_meal=mysqli_fetch_array($myrow_all_meal);
	do {
		printf ("<p> <a href='all_meal.php?id=%s'>%s %s %s %s </a></p>", $rezult_all_meal['id'], $rezult_all_meal['food'], $rezult_all_meal['weight'], $rezult_all_meal['price'], $rezult_all_meal['time_id'] );
	}
	while ($rezult_all_meal=mysqli_fetch_array($myrow_all_meal)) ;
	?>
<?endif?>

<h3> <a href="../index.php"> На главную</a></h3>
</body>
</html>