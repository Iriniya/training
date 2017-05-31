<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Группа 1</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="center">
  <form name="kafe" method="post" action="rezult.php">
    <h1><select size="2" name="meal">
      <option disabled>Выберите время приема пищи</option>
      <option selected value="завтрак">Завтрак</option>
      <option  value="обед">Обед</option>
      <option value="ужин">Ужин</option>
    </select></h1>
    <h2 class="menu"> меню </h2>
    
    <? 
$i=1;
do { echo '
      <div class="col">
      <div class="cont_forma">
        <label for="',$i,'" class="cont_label">Блюдо ',$i,':</label><br>
        <input id="',$i,'" class="cont_input" type="text" name="dish',$i,'" placeholder="Название"><br>
      </div>
      <div class="cont_forma">
        <select class="col" size="4" name="dish_count',$i,'">
          <option disabled>Выберите количество блюд</option>
          <option selected value="0">0</option>
          <option  value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select><br>
      </div>
      <div class="cont_forma">
        <label for="',$i,'" class="cont_label">Цена блюда ',$i,':</label><br>
      <input id="',$i,'" class="cont_input" type="text" name="prise',$i,'" placeholder="Цена"><br>
      </div>
      </div>';
  $i++;
  }
while ($i<=5);
?>
   
    <input class="advantages_batton batton_green" type="submit" name="submit" value="Сделать заказ"></label>
  </form>
</div>
</body>
</html>