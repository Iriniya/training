<?php
if (isset($_POST['meal']))  {$meal=$_POST['meal']; if ($meal=='') {unset($meal);} }
if (isset($_POST['dish1']))  {$dish1=$_POST['dish1']; if ($dish1=='') {unset($dish1);} }
if (isset($_POST['dish2']))  {$dish2=$_POST['dish2']; if ($dish2=='') {unset($dish2);} }
if (isset($_POST['dish3']))  {$dish3=$_POST['dish3']; if ($dish3=='') {unset($dish3);} }
if (isset($_POST['dish4']))  {$dish4=$_POST['dish4']; if ($dish4=='') {unset($dish4);} }
if (isset($_POST['dish5']))  {$dish5=$_POST['dish5']; if ($dish5=='') {unset($dish5);} }
if (isset($_POST['prise1']))  {$prise1=$_POST['prise1']; if ($prise1=='') {unset($prise1);} }
if (isset($_POST['prise2']))  {$prise2=$_POST['prise2']; if ($prise2=='') {unset($prise2);} }
if (isset($_POST['prise3']))  {$prise3=$_POST['prise3']; if ($prise3=='') {unset($prise3);} }
if (isset($_POST['prise4']))  {$prise4=$_POST['prise4']; if ($prise4=='') {unset($prise4);} }
if (isset($_POST['prise5']))  {$prise5=$_POST['prise5']; if ($prise5=='') {unset($prise5);} }
if (isset($_POST['day']))  {$day=$_POST['day']; if ($day=='') {unset($day);} }?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" >
  <title>Группа 1</title>
</head>
<body>
<p>Время приема пищи: <?=$meal?></p>
<div class="bill details"> 	
		<p><?if ($dish1<>'') {echo 'Блюдо 1: ',$dish1,' цена ',$prise1,' руб.'; }  ?></p>
		<p><?if ($dish2<>'') {echo 'Блюдо 2: ',$dish2,' цена ',$prise2,' руб.'; }  ?></p>
		<p><?if ($dish3<>'') {echo 'Блюдо 3: ',$dish3,' цена ',$prise3,' руб.'; }  ?></p>
		<p><?if ($dish4<>'') {echo 'Блюдо 4: ',$dish4,' цена ',$prise4,' руб.'; }  ?></p>
		<p><?if ($dish5<>'') {echo 'Блюдо 5: ',$dish5,' цена ',$prise5,' руб.'; }  ?></p>
		<p><?if ($prise1+$prise2+$prise3+$prise4+$prise5==0) {echo 'Закакз не сделан'; }  ?></p>
</div>
<p> ИТОГО: <?echo $prise1+$prise2+$prise3+$prise4+$prise5?> руб.</p>

	
</body>
</html>