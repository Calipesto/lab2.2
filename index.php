<!DOCTYPE html>
<html lang="ru">
<body>
    <!-- Begin page content -->
    <main role="main" class="container" style="padding-top:3rem">
      <h1 class="mt-5">Вычислить площадь прямоугольника со сторонами A и B и определить, является ли данная фигура квадратом.</h1>
		<form method="GET">
		  <div class="form-group">
		    <label for="sideA">Введите значение А</label>
		    <input type="text" class="form-control" id="sideA" placeholder="Сторона А" name="sideA">
		  </div>
		  <div class="form-group">
		    <label for="sideB">Введите значение В</label>
		    <input type="text" class="form-control" id="sideB" placeholder="Сторона В" name="sideB">
		  </div>
		  <button type="submit" class="btn btn-primary">Вычислить</button>
		</form>
    <?php
    $sideA = NULL;
    $sideB = NULL;
	if (!empty($_GET["sideA"])&&!empty($_GET["sideB"]))
{
	echo "<h1>Данные GET-запроса: одна cторона - ".$_GET["sideA"].", вторая -  ".$_GET["sideB"]."</h1>";
}
else
{
	echo "Переменные не дошли. Проверьте всё ещё раз.";
}
    if(isset($_GET['sideA'])) $sideA = strip_tags(htmlentities($_GET['sideA']));
    if (isset($_GET['sideB'])) $sideB = strip_tags(htmlentities($_GET['sideB']));
    if($sideA && $sideB)
    {
      $ret = floatval($sideA) * floatval($sideB);
      if (floatval($sideA) == floatval($sideB) && $ret > 0) {
        echo "<h1>Это квадрат</h1>";
      }
      echo "<h1>Площадь: $ret</h1>";
    }
    ?>
    </main>

    <footer class="footer">
    </footer>
</body>

</html>
