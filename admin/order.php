<?include("../db.php");
	if (isset($_GET['id']));{$id=($_GET['id']);}
	if (isset($_POST['id']))  {$id=$_POST['id']; }
	if (isset($_POST['food']))  {$food=$_POST['food']; }
	if (isset($_POST['weight']))  {$weight=$_POST['weight']; }
	if (isset($_POST['price']))  {$price=$_POST['price'];  }
	if (isset($_POST['count_foods']))  {$count_foods=$_POST['count_foods'];  }
	if (isset($_POST['order']))  {$order=$_POST['order'];  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Меню</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<? 
$count_all_orders=count($order);
//echo "проверка1: ",$count_foods[$j];
	foreach ($order as $value) 
	{
		$sorter=mysqli_query($db,"SELECT * FROM meal WHERE id=$value");
		$sorter_array=mysqli_fetch_array($sorter);
		printf('<p>%s Цена: %s  </p>', $sorter_array['food'], $sorter_array['price']);
		$sum_price[]=$sorter_array['price'];
	}


?>
<p> Стоимость заказа: <? echo array_sum($sum_price)?></p>
<h3> <a href="../index.php"> На главную</a></h3>
</body>
</html>