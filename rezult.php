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
if (isset($_POST['dish_count1']))  {$dish_count1=$_POST['dish_count1']; if ($dish_count1=='') {unset($dish_count1);} }
if (isset($_POST['dish_count2']))  {$dish_count2=$_POST['dish_count2']; if ($dish_count2=='') {unset($dish_count2);} }
if (isset($_POST['dish_count3']))  {$dish_count3=$_POST['dish_count3']; if ($dish_count3=='') {unset($dish_count3);} }
if (isset($_POST['dish_count4']))  {$dish_count4=$_POST['dish_count4']; if ($dish_count4=='') {unset($dish_count4);} }
if (isset($_POST['dish_count5']))  {$dish_count5=$_POST['dish_count5']; if ($dish_count5=='') {unset($dish_count5);} }
if (isset($_POST['day']))  {$day=$_POST['day']; if ($day=='') {unset($day);} }?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" >
  <title>Группа 1</title>
</head>
<body>
<? $sum_prise=$prise1+$prise2+$prise3+$prise4+$prise5;
$max_discount=0.1;
$min_discount=0.05;
$midi_discount=0.07;
$max_discount_prise=200;
$min_discount_prise=100;
$midi_discount_prise=150;
$total_prise=$max_discount;
if ($sum_prise>$max_discount_prise) {
	$discount=$sum_prise*$max_discount; $total_prise=$sum_prise-$discount; $discount_position='10';  $discont_commite='';
	if ($total_prise<=$max_discount_prise) {
			$total_prise=$max_discount_prise; $discont_commite=' (цена со скидкой не может быть меньше минимально допустимой!)';
} }
elseif ($sum_prise>$midi_discount_prise) {
	$discount=$sum_prise*$midi_discount; $total_prise=$sum_prise-$discount; $discount_position='7';  $discont_commite='';
	if ($total_prise<=$midi_discount_prise) {
			$total_prise=$midi_discount_prise; $discont_commite=' (цена со скидкой не может быть меньше минимально допустимой!)';
}}
elseif ($sum_prise>$min_discount_prise) {
	$discount=$sum_prise*$min_discount; $total_prise=$sum_prise-$discount; $discount_position='5';  $discont_commite='';
	if ($total_prise<=$min_discount_prise) {
			$total_prise=$min_discount_prise; $discont_commite=' (цена со скидкой не может быть меньше минимально допустимой!)';
}}
else {
	$discount=0; $total_prise=$sum_prise;
}

	
?>
<p>Время приема пищи: <?=$meal?></p>
<div class="bill details"> 	
		<p><?if ($dish1<>'') {echo 'Блюдо 1: ',$dish1,' количество ',$dish_count1,' цена ',$prise1,' руб.'; }  ?></p>
		<p><?if ($dish2<>'') {echo 'Блюдо 2: ',$dish2,' количество ',$dish_count2,' цена ',$prise2,' руб.'; }  ?></p>
		<p><?if ($dish3<>'') {echo 'Блюдо 3: ',$dish3,' количество ',$dish_count3,' цена ',$prise3,' руб.'; }  ?></p>
		<p><?if ($dish4<>'') {echo 'Блюдо 4: ',$dish4,' количество ',$dish_count4,' цена ',$prise4,' руб.'; }  ?></p>
		<p><?if ($dish5<>'') {echo 'Блюдо 5: ',$dish5,' количество ',$dish_count5,' цена ',$prise5,' руб.'; }  ?></p>
		<p><?if ($sum_prise==0) {
			echo 'Закакз не сделан';
			} else { 
				echo '<p> стоимость заказа: ' . $sum_prise.' руб.</p> '.
					'<p> скидка ', $discount_position,' % составляет: '. $discount,' руб.'.$discont_commite,'</p>'.
					'<p> ИТОГО: <span class="total_prise">' . $total_prise.'</span> руб.</p>';
		} ?></p>
</div>


	
</body>
</html>