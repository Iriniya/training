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
    <div class="cont_forma">
      <label for="1" class="cont_label">Блюдо 1:</label><br>
      <input id="1" class="cont_input" type="text" name="dish1" placeholder="Блюдо 1"><br>
      <label for="1" class="cont_label">Блюдо 2:</label><br>
      <input id="1" class="cont_input" type="text" name="dish2" placeholder="Блюдо 2"><br>
      <label for="1" class="cont_label">Блюдо 3:</label><br>
      <input id="1" class="cont_input" type="text" name="dish3" placeholder="Блюдо 3"><br>
      <label for="1" class="cont_label">Блюдо 4:</label><br>
      <input id="1" class="cont_input" type="text" name="dish4" placeholder="Блюдо 4"><br>
      <label for="1" class="cont_label">Блюдо 5:</label><br>
      <input id="1" class="cont_input" type="text" name="dish5" placeholder="Блюдо 5"><br>
    </div>
    <div class="cont_forma">
      <label for="1" class="cont_label">Цена блюда 1:</label><br>
      <input id="1" class="cont_input" type="text" name="prise1" placeholder="Цена"><br>
      <label for="1" class="cont_label">Цена блюда 2:</label><br>
      <input id="1" class="cont_input" type="text" name="prise2" placeholder="Цена"><br>
      <label for="1" class="cont_label">Цена блюда 3:</label><br>
      <input id="1" class="cont_input" type="text" name="prise3" placeholder="Цена"><br>
      <label for="1" class="cont_label">Цена блюда 4:</label><br>
      <input id="1" class="cont_input" type="text" name="prise4" placeholder="Цена"><br>
      <label for="1" class="cont_label">Цена блюда 5:</label><br>
      <input id="1" class="cont_input" type="text" name="prise5" placeholder="Цена"><br>
    </div>
    <input class="advantages_batton batton_green" type="submit" name="submit" value="Сделать заказ"></label>
  </form>
</div>
</body>
</html>