<?include("../db.php");
	if (isset($_POST['id']))  {$id=$_POST['id']; }
	if (isset($_POST['food']))  {$food=$_POST['food']; }
	if (isset($_POST['weight']))  {$weight=$_POST['weight']; }
	if (isset($_POST['price']))  {$price=$_POST['price'];  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Редактирование</title>
</head>
<body>
<?$myrow_food=mysqli_query($db, "UPDATE meal SET food='$food',  weight='$weight', price='$price' WHERE id=$id");
	if ($myrow_food==true) {
		echo "<p> Блюдо $food обновлено</p>";
	} else {
		echo "<p> Блюдо НЕ обновлено</p>";
	}
?>
<h3> <a href="../index.php"> На главную</a></h3>

</body>
</html>	
	