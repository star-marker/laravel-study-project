<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script async src="js/CheckForm.js"></script>
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
                <li><a>Контакты</a></li>
                <li><a href="test">Тест</a></li>
                <li><a href="history">История просмотра</a></li>
            </ul>
        </nav>
        <div class="content">
            <h2>Отправка сообщения по электронной почте</h2><hr><br>
            <br>
            <form id="form">
                <input id="fio" type="text" placeholder="ФИО отправителя"><br>
                <input id="num" type="text" placeholder="Телефон"><br>
                <input id="mail" type="text" placeholder="Почтовый ящик"><br>
                Дата рождения: <input id="date" type="date" placeholder="Дата рождения">
                <br><br>
                Пол мужской <input id="gender" type="radio" value="male">
                Пол женский <input id="gender" type="radio" value="female"><br>
                Возраст <select id="age">
                    <option selected> до 20</option>
                    <option> от 20 до 40</option>
                    <option> от 40 до 60</option>
                    <option> от 60</option>
                </select><br><br><br>
                Введите сообщение:<br>
                <textarea id="message" rows=6 cols=50></textarea>
                <br><br>
                <input type="reset" value="Очистить форму" style="cursor: pointer;">
                <input id="submit" type="submit">
            </form>
        </div>
    </body>
</html>