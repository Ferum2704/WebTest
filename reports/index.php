<?php
  $labNumber = null;
  $contentType = null;
  if(isset($_GET["lab"]) && is_numeric($_GET["lab"]) && $_GET["lab"] > 0 && $_GET["lab"] < 10) {
    $labNumber = $_GET["lab"];
  }
  if(isset($_GET["content"]) && is_string($_GET["content"])) {
    $contentType = $_GET["content"];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Reports</title>
  </head>
  <body>
    <div class="wrapper">

      <header>
        <h1>Звіти  з Лабораторних Робіт з дисципліни «ІНТЕРНЕТ-ТЕХНОЛОГІЇ ТА ПРОЕКТУВАННЯ WEB-ЗАСТОСУВАНЬ»</h1>
      </header>
      <div class="authors"><h2>БРИГАДА №8 Cтуденти групи  ІC-03 Штолер, Хоменко, Процишин</h2></div>
      <div class="labsWrapper">
        <div class="laba"><a href = "index.php?lab=1">Лабораторна робота #1</a></div>
        <div class="laba"><a href = "index.php?lab=2">Лабораторна робота #2</a></div>
        <div class="laba"><a href = "index.php?lab=3">Лабораторна робота #3</a></div>
        <div class="laba"><a href = "index.php?lab=4">Лабораторна робота #4</a></div>
        <div class="laba"><a href = "index.php?lab=5">Лабораторна робота #5</a></div>
        <div class="laba"><a href = "index.php?lab=6">Лабораторна робота #6</a></div>
        <div class="laba"><a href = "index.php?lab=7">Лабораторна робота #7</a></div>
        <div class="laba"><a href = "index.php?lab=8">Лабораторна робота #8</a></div>
        <div class="laba"><a href = "index.php?lab=9">Лабораторна робота #9</a></div>
      </div>

      <!-- Заголовок лабораторної роботи -->
      <?php
        if($labNumber > 0) {
          echo "<h1 class = \"labNumber\">Лабораторна робота №". $_GET["lab"] ."</h1>";
          $labNumber = $_GET["lab"];
        }
        else {
          echo "<h1 class = \"labNumber\">Оберіть лабораторну роботу</h1>";
        }
      ?>
      <!-- ============================== -->

      <div class="menu">
        <a href="index.php?lab=<?php echo $labNumber ?>&content=description">Опис предметного середовища</a>
        <a href="index.php?lab=<?php echo $labNumber ?>&content=topic">Тема Мета Місце розташування лаби №1</a>
        <a href="index.php?lab=<?php echo $labNumber ?>&content=struct">Структура документа</a>
        <a href="index.php?lab=<?php echo $labNumber ?>&content=table">HTML-код ТАБЛИЦЬ</a>
        <a href="index.php?lab=<?php echo $labNumber ?>&content=form">HTML-код ФОРМИ</a>
        <a href="index.php?lab=<?php echo $labNumber ?>&content=image">HTML-код ЗОБРАЖЕННЯ</a>
        <a href="index.php?lab=<?php echo $labNumber ?>&content=conclusion">Висновки</a>
      </div>

      <div id="content">
        <!-- Відображення певної інформації в блоці виведення інформації -->
        <?php
          if($labNumber == 1 && $contentType != null) {
            if($contentType == "description")
              echo "<img src=\"lab1/desc.jpg\" />";
            else if ($contentType == "topic")
              echo "<img src=\"lab1/topic.jpg\" /><h4>Місце розташування: <a href = \"../lab/index.html\">Лабораторна робота №1</a></h4>";
            else if ($contentType == "conclusion")
              echo "<img src=\"lab1/conclusion.jpg\" />";
            else if ($contentType == "table")
              echo "<img src=\"lab1/table.jpg\" />";
            else if ($contentType == "form")
              echo "<img src=\"lab1/form.jpg\" />";
            else if ($contentType == "image")
              echo "<img src=\"lab1/image.png\" />";
            else if ($contentType == "struct")
              echo "<h3><a href=\"../lab/index.html\" download>Завантажити</a></h3>";
          }
        ?>
        <!-- ============================== -->
      </div>

    </div>
  </body>
</html>
