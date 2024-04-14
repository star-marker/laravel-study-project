<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script defer src="js/CheckTestForm.js"></script>
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
                <li><a>Тест</a></li>
                <li><a href="history">История просмотра</a></li>
            </ul>
        </nav>
        <div class="content">
            <h2>Тест по дисциплине "Веб-технологии"</h2>
            <hr>
            <br>
            <br>
            <form onsubmit="return check(this)">
                <strong>Вопрос 1.</strong> Верно ли утверждение, 
                что сила тока в участке цепи прямо пропорциональна 
                напряжению на его концах и обратно пропорциональна 
                его сопротивлению?<br>
                <input type="text"><br><br>
                <strong>Вопрос 2.</strong>
                Да<input type="checkbox">
                или да<input type="checkbox"><br><br>
                <strong>Вопрос 3.</strong> Если F — действующая на заряд сила, 
                равная 1H, а q=1,4*10^8 Кл — величина заряда, 
                расположенного в данной точке, 
                тогда чему равна напряжённость элэктрического поля
                в этой точке?
                <select name="groups">
                    <optgroup label="меньше 10">
                        <option>0
                        <option>1/1,4*10^8
                    <optgroup label="больше 10">
                        <option>11
                        <option>100
                    </optgroup>
                </select><br><br>
                <h3>Данные о пользователе:</h3>
                <input type="text" placeholder="ФИО отправителя"><br>
                <select name="froups">
                    <optgroup label="ИС">
                        <option>ИС-21-1
                        <option>ИС-21-2
                        <option>ИС-21-3
                    </optgroup>
                    <optgroup label="ПИ">
                        <option>ПИ-21-1
                        <option>ПИ-19-1
                    <optgroup label="ИВТ">
                        <option>ИВТ-21-1
                        <option selected>ИВТ-21-2
                    </optgroup>
                </select>
                <br><br>
                <input type="reset" value="Очистить форму">
                <input id="button" type="submit">
            </form>
        </div>
    </body>
</html>