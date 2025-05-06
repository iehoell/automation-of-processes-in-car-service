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
        .mainContainer__history{

        }
        .titleRow{
            font-weight: 600;
            font-size: 20px;
        }
        table{
            border-spacing: 10px;
            border: 1px solid black;
            width: 100%;
        }
        td{
            text-align: center;
        }
        .mainContainer__profile{
            .input{
                border: 1px solid lightgrey;
                margin-top: 2%;
                width: 300px;
                padding: 13px;
                border-radius: 10px;
            }
        }
        .mainContainer__profile__flexBlock{
            display: flex;
        }
    </style>
    <body>
        <div class="mainContainer">
            <h1>Личный кабинет</h1>
            <div class="mainContainer__profile">
                <h4>ФИО</h4>
                <div class="mainContainer__profile__flexBlock">
                    <input value="lorem"/>
                    <button>
                        <img src="https://cdn.icon-icons.com/icons2/620/PNG/512/pencil-striped-symbol-for-interface-edit-buttons_icon-icons.com_56782.png" width="20px" height="20px"/>
                    </button>
                </div>
                <h4>Автомобиль</h4>
                <h4>Гос. номер</h4>
                <h4>Номер телефона</h4>
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
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Замена сальника привода</td>
                        <td>Кислов Анатолий</td>
                        <td>1 час(-ов)</td>
                        <td>1000₽</td>
                        <td>50₽</td>
                        <td>950₽</td>
                        <td>
                            <button>
                                <img src="https://cdn-icons-png.flaticon.com/512/61/61099.png" width="20px" height="20px">
                            </button>
                        </td>
                        <td>
                            <button>
                                <img src="https://cdn.icon-icons.com/icons2/620/PNG/512/pencil-striped-symbol-for-interface-edit-buttons_icon-icons.com_56782.png" width="20px" height="20px"/>
                            </button>
                        </td>
                        <td>
                            <button>
                                <img src="https://cdn-icons-png.flaticon.com/512/59/59254.png" width="20px" height="20px"/>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="mainContainer__messages">
                <h2>История сообщений с поддержкой</h2>
                <div class="mainContainer__messages__">

                </div>
            </div>
            <a href="/signupformaintenance" class="mainButton">
                <button>
                    Записаться на техосмотр
                </button>
            </a>
        </div>
    </body>
</html>
