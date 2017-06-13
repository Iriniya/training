<?include("../db.php");
	if (isset($_GET['id']));{$id=($_GET['id']);}
	if (isset($_POST['id']))  {$id=$_POST['id']; }
	if (isset($_POST['food']))  {$food=$_POST['food']; }
	if (isset($_POST['weight']))  {$weight=$_POST['weight']; }
	if (isset($_POST['price']))  {$price=$_POST['price'];  }
	if (isset($_POST['count_foods[]']))  {$count_foods[]=$_POST['count_foods[]'];  }
	if (isset($_POST['ordering[]']))  {$ordering[]=$_POST['ordering[]'];  }
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
 echo "количество блюд" ,array_sum($count_foods),"<br> ", array_sum($ordering);
?>

<h3> <a href="../index.php"> На главную</a></h3>
</body>
</html>