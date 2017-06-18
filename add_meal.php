<?php
$db=mysqli_connect('localhost','root','','menu');
	if (isset($_POST['food']))  {$food=$_POST['food']; if ($food=='') {unset($food);} }
	if (isset($_POST['weight']))  {$weight=$_POST['weight']; if ($weight=='') {unset($weight);} }
	if (isset($_POST['price']))  {$price=$_POST['price']; if ($price=='') {unset($price);} }
	if (isset($_POST['time_id']))  {$time_id=$_POST['time_id']; if ($time_id=='') {unset($time_id);} }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Добавьте блюдо</title>
</head>
<body>
<div class="center">
<h1> Новое блюдо</h1>
<div class="cont">
<?if (isset($food) || isset($weight) || isset($price) || isset($meal)):?>
<? $myrow_food=mysqli_query($db, "INSERT INTO meal(food, weight, price, time_id) VALUES ('$food', '$weight','$price','$time_id')
		");
	if (isset ($myrow_food)) {
		echo "<p> Блюдо $food добавлено в базу данных, <a href='add_meal.php'> Добавить еще</a></p>";
	} else {
		echo "<p> Блюдо НЕ добавлено в базу данных</p>";
	}

?>
<?else:?>
<form name="add_meal" method="post" action="add_meal.php">
	<label for="food"><p>Название блюда: </p></label>
	<input id="food" type="text" name="food" placeholder="Введите название блюда"><br>
	<label for="weight"><p>Масса блюда: </p></label>
	<input id="weight" type="text" name="weight" placeholder="Введите массу блюда"><br>
	<label for="price"><p>Цена блюда:</p></label>
	<input id="price" type="text" name="price" placeholder="Введите цену блюда"><br>
	<select name="time_id">
		<?
		$myrow1=mysqli_query($db, "SELECT * FROM time_eat");
		$rezult1=mysqli_fetch_array($myrow1);
		do {
			printf ("<option value=\"%s\">%s</option>", $rezult1['id'], $rezult1['title']);
		}
		while ($rezult1=mysqli_fetch_array($myrow1));
		?>
	</select>
	<input type="submit" name="submit" value="Сохранить">
<?endif?>
</form>
<h3> <a href="../index.php"> На главную</a></h3>
</div>
</body>
</html>
