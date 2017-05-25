<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>HomeWork</title>
	<meta name="viewport" content="width=devise-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="center">
<?php
$color_1="#ff9999";
$color_2="#99ff99";
$color_3="#9999ff";
$font_color0="#612c3e";
$font_color1="#ff0000";
$font_color2="#00ca74";
$font_color3="#0000ff";
echo <<<HI
<h1  style="color: $font_color0"> Введите данные </h1>
HI;
?>
</div>
<div  class="cont_forma" style="background-color: <?=$color_1?>">
<?php
echo <<<HI
<h2 class="title_form" style="color: $font_color1"> Представьтесь, пожалуйста</h2>
HI;
?>
	<form>
	<label for="1" class="cont_label">Ваше имя:</label><br>
	<input id="1" class="cont_input" type="text" name="1" placeholder="Имя"><br>
	<label for="2" class="cont_label">Ваша фамилия:</label><br>
	<input id="2" class="cont_input" type="text" name="2" placeholder="Фамилия"></form>
</div>
<div  class="cont_forma" style="background-color: <?=$color_2?>">
<?php
echo <<<HI
<h2 class="title_form" style="color: $font_color2"> Пол: </h2>
HI;
?>
	<form>
	<label for="m" class="cont_label">Мужской</label>
	<input id="m" class="cont" type="radio" name="sex" value="man">
	<label for="w" class="cont_label">Женский</label>
	<input id="w" class="cont" type="radio" name="sex" value="women"></form>
</div>
<div  class="cont_forma" style="background-color: <?=$color_3?>">
<?php
echo <<<HI
<h2 class="title_form" style="color: $font_color3"> Время года: </h2>
HI;
?>
	<form>
	<input id="season1" class="cont" type="checkbox" name="season">
	<label for="season1" class="cont_label">Зима</label><br>
	<input id="season2" class="cont" type="checkbox" name="season">
	<label for="season2" class="cont_label">Весна</label><br>
	<input id="season3" class="cont" type="checkbox" name="season">
	<label for="season3" class="cont_label">Лето</label><br>
	<input id="season4" class="cont" type="checkbox" name="season">
	<label for="season4" class="cont_label">Осень</label>
	</form>
</div>
<div class="center"><button class="advantages_batton batton_green">Отправить
</button></div>
</body>
</html>