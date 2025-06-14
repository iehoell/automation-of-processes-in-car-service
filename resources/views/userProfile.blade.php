<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Личный Кабинет</title>
</head>
    <style>
        .mainContainer{
            margin-left: 5%;
            margin-right: 5%;
        }
        .mainButton{
            text-decoration: none;
            button{
                border: 1px solid lightgrey;
                border-radius: 10px;
                padding: 13px;
                width: 100%;
            }
            button:hover{
                cursor: pointer;
                color: white;
                background: #E7772E;
            }
        }
        .titleRow{
            font-weight: 600;
            font-size: 20px;
        }
        table{
            border-spacing: 10px;
            border: 1px solid black;
            width: 100%;
            border-radius: 15px;
        }
        td{
            text-align: center;
        }
        .mainContainer__profile{
            display: flex;
            flex-wrap: nowrap;
            @media (max-width: 768px) {
                display: block;
            }
            .input-box {
                /* родительский блок относительно которого будем формировать положение
                тега label */
                position: relative;
                margin-right: 10%;
                margin-bottom: 3%;
            }

            input {
                background: #fff;
                padding: 10px;
                /* закруглим края у поля ввода */
                border-radius: 11px;
                width: 200px;
            }

            label {
                position: absolute;
                /* смещение относительно родительского элемента 10px вверх от верхнего края и   10px влево */
                top: -10px;
                left: 10px;
                background: #fff;
                padding: 0 5px;
            }
        }
        .mainContainer__profile__flexBlock{
            display: flex;
            margin-right: 5%;
        }
        .chat__header {
            text-align: center;
        }

        .chat__item {
            display: flex;
            align-items: flex-start;
        }


        .chat__messages {
            margin-left: 10px;
        }

        .chat__message {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        .chat__message-content {
            border-radius: 5px;
            padding: 7px;
            background-color: #ccc;
            display: inline-block;

            margin-left: 5px;
        }

        .chat__item--responder {
            flex-direction: row-reverse;
        }

        .chat__item--responder .chat__message {
            flex-direction: row-reverse;
        }

        .chat__item--responder .chat__message-content {
            margin-left: 0;
            margin-right: 5px;
        }
        .mainContainer__messages__{
            border: 1px solid black;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 3%;
        }
        .mainContainer__currentRecordText{
            border: 1px solid black;
            border-radius: 15px;
            padding: 15px;
            width: max-content;
        }
        @media (max-width: 768px) {
            .mainContainer__history table {
                width: 100%;
                border-collapse: collapse;
            }

            .mainContainer__history .titleRow {
                display: none; /* Скрываем заголовки */
            }

            .mainContainer__history tr {
                display: block;
                margin-bottom: 15px;
                border: 1px solid #ddd;
                border-radius: 5px;
                padding: 10px;
            }

            .mainContainer__history td {
                display: flex;
                justify-content: space-between;
                padding: 5px 0;
                text-align: right;
            }

            .mainContainer__history td:before {
                content: attr(data-label);
                font-weight: bold;
                text-align: left;
                margin-right: 10px;
            }

            .mainContainer__history h2 {
                font-size: 1.3rem;
                margin-bottom: 15px;
            }
        }
    </style>
    <body>
        <div class="mainContainer">
            <h1>Личный кабинет</h1>
            <div class="mainContainer__profile">
                <div class="input-box">
                    <label>Автомобиль</label>
                    <input type="text"  value="{{$_SESSION['auto']}}" readonly>
                </div>
                <div class="input-box">
                    <label>Гос. номер</label>
                    <input type="text"  value="{{$_SESSION['auto_number']}}" readonly>
                </div>
                <div class="input-box">
                    <label>Номер телефона</label>
                    <input type="text"  value="{{$_SESSION['telephone_number']}}" readonly>
                </div>
                <div class="input-box">
                    <label>Электронная почта</label>
                    <input type="text" value="{{$_SESSION['email']}}" readonly>
                </div>
            </div>
            <div class="mainContainer__currentRecord">
                <h2>Ваша запись</h2>
                @foreach($calendar as $calendar_item)
                    <div class="mainContainer__currentRecordText">{{$calendar_item->recording_date}} в {{$calendar_item->recording_time}}</div>
                @endforeach
            </div>
            <div class="mainContainer__history">
                <h2>История сделок</h2>
                <table>
                    <tr class="titleRow">
                        <td>Наименование</td>
                        <td>Исполнитель</td>
                        <td>Норма времени</td>
                        <td>Без скидки</td>
                        <td>Скидка</td>
                        <td>Стоимость</td>
                    </tr>
                    <tr>
                        <td data-label="Наименование">Замена сальника привода</td>
                        <td data-label="Исполнитель">Кислов Анатолий</td>
                        <td data-label="Норма времени">1 час(-ов)</td>
                        <td data-label="Без скидки">1000₽</td>
                        <td data-label="Скидка">50₽</td>
                        <td data-label="Стоимость">950₽</td>
                    </tr>
                </table>
            </div>
            <div class="mainContainer__messages">
                <h2>История сообщений с поддержкой</h2>
                <div class="mainContainer__messages__">
                    <div class="chat">
                        <div class="chat__content">
                            <div class="chat__item">
                                <div class="chat__messages">
                                    <div class="chat__message">
                                        <div class="chat__message-time">9:03</div>
                                        <div class="chat__message-content">Здравствуйте</div>
                                    </div>
                                    <div class="chat__message">
                                        <div class="chat__message-time">9:03</div>
                                        <div class="chat__message-content">Ваша машина готова. Можете подъехать забрать в любое время</div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat__item chat__item--responder">
                                <div class="chat__messages">
                                    <div class="chat__message">
                                        <div class="chat__message-time">9:05</div>
                                        <div class="chat__message-content">Здравствуйте</div>
                                    </div>
                                    <div class="chat__message">
                                        <div class="chat__message-time">9:07</div>
                                        <div class="chat__message-content">Хорошо, тогда подъеду сегодня в 12 часов дня</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
                <a href="/signupformaintenance" class="mainButton">
                    <button>
                        Записаться на техосмотр
                    </button>
                </a>
            </div>
        </div>
    </body>
</html>
