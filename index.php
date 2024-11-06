<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>World Bank</title>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <div class="header">
            <div class="logo__bar">
                <a href="#"><img src="/img/bank_logo.jpg" alt="logo"></a>
                <div class="numbers">
                    <p>8-800-100-5005</p>
                    <p>+7 (3452) 522-000</p>
                </div>
            </div>
            <div class="nav__bar">
                <ul class="nav">
                    <li><a href="#">Кредитные карты</a></li>
                    <li id="active"><a href="#">Вклады</a></li>
                    <li><a href="#">Дебетовая карта</a></li>
                    <li><a href="#">Страхование</a></li>
                    <li><a href="#">Друзья</a></li>
                    <li><a href="#">Интернет банк</a></li>
                </ul>
            </div>
            <div class="breadcrumbs">
                <a href="#">Главная</a><span>-</span><a href="#">Вклады</a><span>-</span><p>Калькулятор</p>
            </div>
        </div>

        <div class="content">
            <div class="calculator">
                <h1 class="title">Калькулятор</h1>
                <div class="menu">
                    <form id="formAjax">
                        <div class="left__part">
                            <div class="item">
                                <label for="writeDate">Дата оформления вклада</label>
                                <input type="text" name="daysn" id="datepicker" placeholder="дд.мм.гггг">
                            </div>
                            <div class="item">
                                <label for="writeSumm">Сумма вклада</label>
                                <input type="number" name="summn-1" id="summ__one" min="1000" max="3000000">
                            </div>
                            <div class="item">
                                <label for="writeYear">Срок вклада</label>
                                <p><select style="width: 87px;" name="year">
                                    <option selected value="0">1 год</option>
                                    <option value="1">2 года</option>
                                    <option value="2">3 года</option>
                                    <option value="3">4 года</option>
                                    <option value="4">5 лет</option>
                                </select></p>
                            </div>
                            <div class="item">
                                <label for="writeIsDeposit">Пополнение вклада</label>
                                <div class="menu_radio">
                                    <div class="form_radio">
                                        <label for="radio-1">Нет</label>
                                        <input id="radio-1" type="radio" name="radio" value="false" checked>
                                    </div>
                                    <div class="form_radio">
                                        <label for="radio-2">Да</label>
                                        <input id="radio-2" type="radio" name="radio" value="true">
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <label for="writeDepositSumm">Сумма пополнения вклада</label>
                                <input type="number" name="summadd" id="summ__two" min="1000" max="3000000">
                            </div>
                            <div class="btn__section">
                                <input id="btnForm" type="submit" value="Рассчитать">
                                <p><span>Результат:</span><span id="summnResult" class="summ__result"> 123 руб</span></p>
                            </div>
                        </div>

                        <div class="right__part">
                            <div class="range__form">
                                <input type="range" id="name" name="summ__one" min="1000" max="3000000" onchange="updateInput(this.value, this.name);" oninput="updateInput(this.value, this.name)">
                                <div class="range__info">
                                    <label for="name">1 тыс. руб.</label>
                                    <label for="name">3 000 000</label>
                                </div>
                            </div>

                            <div class="range__form">
                                <input type="range" id="name" name="summ__two" min="1000" max="3000000" onchange="updateInput(this.value, this.name);" oninput="updateInput(this.value, this.name)">
                                <div class="range__info">
                                    <label for="name">1 тыс. руб.</label>
                                    <label for="name">3 000 000</label>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="footer">
            <ul>
                <li><a href="#">Кредитные карты</a></li>
                <li><a href="#">Вклады</a></li>
                <li><a href="#">Дебетовая карта</a></li>
                <li><a href="#">Страхование</a></li>
                <li><a href="#">Друзья</a></li>
                <li><a href="#">Интернет банк</a></li>
            </ul>
        </div>
    </body>
</html>