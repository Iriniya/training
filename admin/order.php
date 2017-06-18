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
<h2> Заказ от 
<?=date(d);
$today=date(m);
switch ($today)
{
	case '01':
	echo ' января ';
	break;
	case '02':
	echo ' февраля ';
	break;
	case '03':
	echo ' марта ';
	break;
	case '04':
	echo ' апреля ';
	break;
	case '05':
	echo ' мая ';
	break;
	case '06':
	echo ' июня ';
	break;
	case '07':
	echo ' июля ';
	break;
	case '08':
	echo ' августа ';
	break;
	case '09':
	echo ' сентября ';
	break;
	case '10':
	echo ' октября ';
	break;
	case '11':
	echo ' ноября ';
	break;
	case '12':
	echo ' декабря ';
	break;
	default:
	echo 'Такой даты не существует'; 
}
echo date(Y), ' года'; ?>
 </h2>
 <p>_____________________________________</p>
<? 
$count_all_orders=count($order);
	foreach ($order as $value) 
	{
		$sorter=mysqli_query($db,"SELECT * FROM meal WHERE id=$value");
		$sorter_array=mysqli_fetch_array($sorter);
		printf('<p><span class="title_form"> %s </span> цена: <span class="title_form">%s</span> руб. </p>', $sorter_array['food'], $sorter_array['price']);
		$sum_price[]=$sorter_array['price'];
	}
?>
 <p>_____________________________________</p>
<p> Стоимость заказа: <? echo '<span class="title_form">',array_sum($sum_price), '</span> руб.'?></p>
<h3> <a href="../index.php"> На главную</a></h3>
</body>
</html>