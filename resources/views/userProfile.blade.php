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
            width: min-content;
        }
    </style>
    <body>
        <div class="mainContainer">
            <h1>Личный кабинет</h1>
            <div class="mainContainer__profile">
                @foreach($user_users as $current_user_users)
                    @foreach($user_clients as $current_user_clients)
                        <div class="input-box">
                            <label>Автомобиль</label>
                            <input type="text"  value="{{$current_user_clients->Auto}}">
                        </div>
                        <div class="input-box">
                            <label>Гос. номер</label>
                            <input type="text"  value="{{$current_user_clients->Auto_number}}">
                        </div>
                        <div class="input-box">
                            <label>Номер телефона</label>
                            <input type="text"  value="{{$current_user_clients->Telephone_number}}">
                        </div>
                        <div class="input-box">
                            <label>Электронная почта</label>
                            <input type="text" value="{{$current_user_users->email}}">
                        </div>
                    @endforeach
                @endforeach
            </div>
            <div class="mainContainer__currentRecord">
                <h2>Ваша запись</h2>
                <div class="mainContainer__currentRecordText">Сегодня в 10:50</div>
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
                        <td>Замена сальника привода</td>
                        <td>Кислов Анатолий</td>
                        <td>1 час(-ов)</td>
                        <td>1000₽</td>
                        <td>50₽</td>
                        <td>950₽</td>
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
