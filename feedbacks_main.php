<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Title</title>
</head>
<body>
<div id="header">
    <div id="head_main">
        <div id="head_up">
            <div class="logo">
                <img src="img/logo.png">
            </div>
            <ul class="menu_block">
                <li><a href="index.html">Главная </a></li>
                <li><a href="">Услуги </a></li>
                <li><a href="">О компании </a></li>
                <li><a href="">Отзывы </a></li>
                <li><a href="">Контакты </a></li>
            </ul>
            <div class="quotations">

            </div>
        </div>
        <div id="head_down">
            <div class="wrap">
                <input type="radio" name="point" id="slide1" checked>
                <input type="radio" name="point" id="slide2">
                <input type="radio" name="point" id="slide3">
                <input type="radio" name="point" id="slide4">
                <input type="radio" name="point" id="slide5">
                <div class="slider">
                    <div class="slides slide1"></div>
                    <div class="slides slide2"></div>
                    <div class="slides slide3"></div>
                    <div class="slides slide4"></div>
                    <div class="slides slide5"></div>
                </div>
                <div class="controls">
                    <label for="slide1"></label>
                    <label for="slide2"></label>
                    <label for="slide3"></label>
                    <label for="slide4"></label>
                    <label for="slide5"></label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main">
    <div class="main_block">
<ul>
        <h3>Оставьте свой отзыв здесь:</h3> </br>
        <form action="feedbacks.php" method="get">
            </br>
            Ваше имя:<input type="text" name = "name"></br>
            Коммент :<textarea name = "comment" cols="25" rows="3"></textarea></br>
            <input type="submit">
        </form>
        </br>
        </br>
<ul>
<?php  $link = mysqli_connect("localhost", "root", "lsded24489" , "collector") ;
$qr_result = $link->query("SELECT * FROM `feedback`");
while($data = mysqli_fetch_array($qr_result))
{
    echo '<tr>' . $data['name'] . '</tr>';
    echo '</br>';
    echo '- ';
    echo '<tr>' . $data['comment'] . '</tr>';
    echo '</br>';
    echo '</br>';
    echo '</br>';
}
echo '</table>';
mysqli_close($link); ?>
</ul>
</ul>
            </div>
</div>

<div class="footer">
    <hr>
    <ul class="menu_foot">
        <li><a href="index.html">Главная </a></li>
        <li><a href="">Услуги </a></li>
        <li><a href="">О компании </a></li>
        <li><a href="">Отзывы </a></li>
        <li><a href="">Контакты </a></li>
    </ul>
    <div class="contact">
        <i>Телефон для справки:</i>
        <br> <b>+8-800-555-35-35</b>
        <br>
        <p>
            <i>Лучше позвонить, чем ждать...
                <br>
                Серьезно,<b> ЛУЧШЕ ПОЗВОНИТЬ!</b></i>
        </p>
    </div>
    <div class="storage">
        BeatCoin © 2016
    </div>
</div>

</body>
</html>