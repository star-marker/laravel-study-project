<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>History</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script async src="js/DropDownMenu.js"></script>
        <script async src="js/TimeDate.js"></script>
        <script async src="js/History.js"></script>
    </head>
    <body>
        <nav class="sidenav">
            <ul class="menuList">
                <li><a href="home">Главная</a></li>
                <li><a href="about">Обо мне</a></li>
                <li id="interests" class="interests"><a href="interests">Интересы</a></li>
                <li><a href="study">Учёба</a></li>
                <li><a href="gallery">Галерея</a></li>
                <li><a href="contact">Контакты</a></li>
                <li><a href="test">Тест</a></li>
                <li><a>История просмотра</a></li>
            </ul>
        </nav>
        <div class="content">
            <h2>История посещений веб-сайта</h2><hr>
            <div class="table">
                <h3>Текущий сеанс</h3>
                <table border="1" style="background: whitesmoke">
                    <tr>
                        <td style="background: rgba(107, 126, 125, 0.258); width: 200px;">Страница</td>
                        <td style="background: rgba(107, 126, 125, 0.258); width: 100px;">Посещения</td>
                    </tr>
                    <tr>
                        <td>Главная</td>
                        <td id="current-index.html"></td>
                    </tr>
                    <tr>
                        <td>Обо мне</td>
                        <td id="current-about.html"></td>
                    </tr>
                    <tr>
                        <td>Интересы</td>
                        <td id="current-interests.html"></td>
                    </tr>
                    <tr>
                        <td>Учёба</td>
                        <td id="current-study.html"></td>
                    </tr>
                    <tr>
                        <td>Галерея</td>
                        <td id="current-gallery.html"></td>
                    </tr>
                    <tr>
                        <td>Контакты</td>
                        <td id="current-contact.html"></td>
                    </tr>
                    <tr>
                        <td>Тест</td>
                        <td id="current-test.html"></td>
                    </tr>
                </table>
            </div>
            <div class="table">
                <h3>За всё время</h3>
                <table border="1" style="background: whitesmoke">
                    <tr>
                        <td style="background: rgba(107, 126, 125, 0.258); width: 200px;">Страница</td>
                        <td style="background: rgba(107, 126, 125, 0.258); width: 100px;">Посещения</td>
                    </tr>
                    <tr>
                        <td>Главная</td>
                        <td id="alltime-index.html"></td>
                    </tr>
                    <tr>
                        <td>Обо мне</td>
                        <td id="alltime-about.html"></td>
                    </tr>
                    <tr>
                        <td>Интересы</td>
                        <td id="alltime-interests.html"></td>
                    </tr>
                    <tr>
                        <td>Учёба</td>
                        <td id="alltime-study.html"></td>
                    </tr>
                    <tr>
                        <td>Галерея</td>
                        <td id="alltime-gallery.html"></td>
                    </tr>
                    <tr>
                        <td>Контакты</td>
                        <td id="alltime-contact.html"></td>
                    </tr>
                    <tr>
                        <td>Тест</td>
                        <td id="alltime-test.html"></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>