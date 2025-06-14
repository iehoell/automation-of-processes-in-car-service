<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AoPiCS</title>
</head>
<style>
    body{
        margin: 0;
    }
    .mainContainer{
        display: flex;
        .mainContainer__menu{
            text-align: center;
            background: #E7772E;
            color: #FFFFFF;
            width: 8%;
            height: 100vh;
            .mainContainer__menu__menuItem{
                text-align: center;
                padding-top: 12%;
                padding-bottom: 12%;
            }
            .mainContainer__menu__menuItem:hover{
                background: #ff3700;cursor: pointer;}
        }
        .mainContainer__content{
            background: #FFFFFF;
            color: black;
            width: 90%;
        }
    }
    .mainContainer__content{
        .mainContainer__content__tasksBlock{
            margin-left: 5%;
            .tasksBlock__flex{
                display: flex;
                justify-content: space-between;
                .tasksBlock__addNewTask{
                    width: 40px;
                    height: 40px;
                    margin-top: 20px;
                }
            }
            .tasksBlock__titles{
                display: flex;
                h4{
                    text-align: left;
                    align-items: start;
                    width: 200px;
                }
            }
            .tasksBlock__tasks{
                width: 100%;
                table{
                    border-spacing: 10px;
                    border: 1px solid black;
                    width: 100%;
                }
                td{
                    text-align: center;
                }
            }
        }
    }
    .mainContainer__content__clientsBlock{
        margin-left: 5%;
        margin-right: 3%;
        table{
            border-spacing: 10px;
            border: 1px solid black;
            width: 100%;
        }
        td{
            text-align: center;
        }
        .clientsBlock__header{
            display: flex;
            justify-content: space-between;
            a{
                text-decoration: none;
                color: #FFFFFF;
                margin-top: 1%;
            }:hover{cursor: pointer}
            .clientsBlock__addNewClient{
                margin-top: 1%;
                width: 40px;
                height: 40px;
                padding: 5px;
                font-size: 20px;
            }
        }
    }
    .mainContainer__content__storageBlock{
        margin-left: 5%;
        margin-right: 3%;
        .storageBlock__header {
            display: flex;
            justify-content: space-between;
            a{
                text-decoration: none;
                color: #FFFFFF;
                margin-top: 1%;
            }:hover{cursor: pointer}
            .storageBlock__addNewDelivery{
                margin-top: 1%;
                width: 40px;
                height: 40px;
                padding: 5px;
                font-size: 20px;
            }
        }
        table{
            border-spacing: 10px;
            border: 1px solid black;
            width: 100%;
        }
        td{
            text-align: center;
        }
    }
    .mainContainer__content__dealsBlock{
        margin-left: 5%;
        margin-right: 5%;
        .dealsBlock__clientBlock{
            border: 1px solid #161616;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            border-radius: 5px;
            margin-bottom: 5%;
            .dealsBlock__clientBlock__fio{
                display: flex;
                img{
                    width: 40px;
                    height: 40px;
                    border-radius: 20px;
                    margin-top: 10px;
                    margin-right: 10px;
                }
                h4{

                }
            }
            .dealsBlock__clientBlock__number{
                display: flex;
                img{
                    width: 40px;
                    height: 40px;
                    border-radius: 20px;
                    margin-top: 10px;
                    margin-right: 10px;
                }
            }
            .dealsBlock__clientBlock__sale{
                p{
                    margin: 0;
                }
            }
            .dealsBlock__clientBlock__auto{
                p{
                    margin:0;
                }
                h4{
                    margin: 5px;
                }
            }
        }
        .dealsBlock__workBlock{
            margin-bottom: 5%;
            table{
                border: 2px solid black;
                border-radius: 15px;
                padding: 10px;
                width: 100%;
                border-spacing: 10px;
            }
            .titleRow{
                font-weight: 600;
                font-size: 20px;
            }
        }
        .dealsBlock__productBlock{
            margin-bottom: 5%;
            table{
                border: 2px solid black;
                border-radius: 15px;
                padding: 10px;
                width: 100%;
                border-spacing: 10px;
            }
            .titleRow{
                font-weight: 600;
                font-size: 20px;
            }
        }
    }
    .mainContainer__content__dealsList{
        margin-left: 5%;
        margin-right: 5%;
        .dealsListBlock__header{
            display: flex;
            justify-content: space-between;
        }
        .dealsListBlock__addNewDeal{
            margin-top: 25%;
            width: 40px;
            height: 40px;
            padding: 5px;
            font-size: 20px;
        }
        table{
            width: 100%;
            border-radius: 10px;
            border: 1px solid black;
            padding: 10px;
        }
        .titleRow{
            font-weight: 600;
            font-size: 20px;
        }
        a{
            text-decoration: none;
            color: black;
        }
    }
    .links{
        text-decoration: none;
        color: #FFFFFF;
    }
    .delete_and_edit_buttons{
    }:hover{cursor: pointer;}
    .search{
        margin-top: 2%;
        input{
            border-radius: 5px;
        }
        button:hover{
            border-radius: 5px;
            color: #FFFFFF;
            background: #E7772E;
        }
    }
    @media (max-width: 768px) {
        /* Адаптация меню */
        .mainContainer {
            flex-direction: column;
        }

        .mainContainer__menu {
            width: 100% !important;
            height: auto !important;
            min-height: 60px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .mainContainer__menu h2.ioio {
            font-size: 1.2rem;
            margin: 0;
            width: 100%;
            text-align: left;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }

        .mainContainer__menu__menuItem {
            padding: 10px 5px !important;
            width: auto;
            flex-grow: 1;
            text-align: center;
        }

        .mainContainer__menu__menuItem h4 {
            font-size: 0.8rem;
            margin: 0;
        }

        /* Основной контент */
        .mainContainer__content {
            width: 100% !important;
        }

        /* Адаптация блока клиента в сделке */
        .dealsBlock__clientBlock {
            flex-direction: column;
            padding: 10px !important;
        }

        .dealsBlock__clientBlock > div {
            margin-bottom: 10px;
            width: 100% !important;
        }

        .dealsBlock__clientBlock__fio,
        .dealsBlock__clientBlock__number {
            align-items: center;
        }

        .dealsBlock__clientBlock__fio img,
        .dealsBlock__clientBlock__number img {
            width: 30px !important;
            height: 30px !important;
            margin-top: 0 !important;
        }

        .dealsBlock__clientBlock__sale,
        .dealsBlock__clientBlock__auto {
            text-align: center;
        }

        /* Общие адаптации для таблиц */
        table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }

        .dealsBlock__workBlock table {
            width: 100%;
            border: none;
        }

        .dealsBlock__workBlock .titleRow {
            display: none;
        }

        .dealsBlock__workBlock tr {
            display: block;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 15px;
            padding: 10px;
        }

        .dealsBlock__workBlock td {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border: none;
        }

        .dealsBlock__workBlock td:not(:last-child):before {
            content: attr(data-label);
            font-weight: bold;
            margin-right: 15px;
        }

        /* Группировка кнопок в правый угол */
        .dealsBlock__workBlock td:nth-last-child(-n+3) {
            display: inline-block;
            width: auto;
            margin-left: 10px;
        }

        .dealsBlock__workBlock td:nth-last-child(-n+3):before {
            display: none;
        }

        /* Стиль для кнопок */
        .dealsBlock__workBlock button {
            background: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            margin: 0 2px;
        }

        .dealsBlock__workBlock button img {
            width: 16px;
            height: 16px;
        }
        .dealsBlock__productBlock {
            margin-bottom: 20px;
        }

        .dealsBlock__productBlock table {
            width: 100%;
            border-collapse: collapse;
        }

        .dealsBlock__productBlock .titleRow {
            display: none;
        }

        .dealsBlock__productBlock tr {
            width: 110%;
            display: block;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            background: #f9f9f9;
        }

        .dealsBlock__productBlock td {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border: none;
        }

        .dealsBlock__productBlock td::before {
            content: attr(data-label);
            font-weight: bold;
            color: #666;
            min-width: 120px;
        }

        /* Особые стили для цен */
        .dealsBlock__productBlock td:nth-child(4),
        .dealsBlock__productBlock td:nth-child(5) {
            font-weight: bold;
        }


        /* Строка с кнопками */
        .dealsBlock__productBlock td:nth-last-child(2),
        .dealsBlock__productBlock td:last-child {
            display: flex;
            justify-content: flex-end;
            padding-top: 15px;
            margin-top: 10px;
            border-top: 1px dashed #ddd;
        }

        .dealsBlock__productBlock td:nth-last-child(2)::before,
        .dealsBlock__productBlock td:last-child::before {
            display: none;
        }

        /* Стили для кнопок */
        .dealsBlock__productBlock button {
            background: #E7772E;
            border: none;
            border-radius: 5px;
            padding: 8px 12px;
            margin-left: 10px;
            color: white;
            display: inline-flex;
            align-items: center;
        }

        .dealsBlock__productBlock button img {
            width: 16px;
            height: 16px;
            margin-right: 5px;
            filter: brightness(0) invert(1);
        }

        /* Номер товара */
        .dealsBlock__productBlock td:first-child {
            font-size: 1.1em;
            font-weight: bold;
            color: #E7772E;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
            margin-bottom: 5px;
        }

        .dealsBlock__productBlock h2 {
            font-size: 1.4rem;
            margin-bottom: 20px;
            color: #333;
        }
        .mainContainer__content__storageBlock {
            padding: 10px;
        }

        .storageBlock__header {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
            padding-left: 12px;
        }

        .storageBlock__header h2 {
            font-size: 1.4rem;
            margin-bottom: 0;
        }

        .storageBlock__header .search {
            width: 100%;
            display: flex;
            gap: 10px;
        }

        .storageBlock__header .search input {
            flex-grow: 1;
            padding: 8px;
        }

        .storageBlock__header .search button {
            padding: 8px 15px;
        }

        .storageBlock__addNewDelivery {
            align-self: flex-end;
            margin-top: -50px; /* Поднимаем кнопку вверх */
        }

        /* Стили для таблицы */
        .mainContainer__content__storageBlock table {
            display: block;
            width: 100%;
            border: none;
        }

        .mainContainer__content__storageBlock tr {
            display: block;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            background: #f9f9f9;
            position: relative;
        }

        .mainContainer__content__storageBlock tr:first-child {
            display: none; /* Скрываем заголовки */
        }

        .mainContainer__content__storageBlock td {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border: none;
        }

        .mainContainer__content__storageBlock td::before {
            content: attr(data-label);
            font-weight: bold;
            color: #666;
            min-width: 120px;
        }

        /* Добавляем data-label через CSS */
        .mainContainer__content__storageBlock td:nth-child(1):before { content: "№"; }
        .mainContainer__content__storageBlock td:nth-child(2):before { content: "Название"; }
        .mainContainer__content__storageBlock td:nth-child(3):before { content: "Поставщик"; }
        .mainContainer__content__storageBlock td:nth-child(4):before { content: "Дата поступления"; }
        .mainContainer__content__storageBlock td:nth-child(5):before { content: "Количество"; }
        .mainContainer__content__storageBlock td:nth-child(6):before { content: "Сумма"; }

        /* Кнопки действий */
        .mainContainer__content__storageBlock td:nth-last-child(-n+2) {
            position: absolute;
            right: 15px;
            bottom: 10px;
            display: inline-flex;
            gap: 10px;
        }

        .mainContainer__content__storageBlock td:nth-last-child(-n+2)::before {
            display: none;
        }

        .mainContainer__content__storageBlock .delete_and_edit_buttons button {
            background: #E7772E;
            border: none;
            border-radius: 5px;
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 25px;
        }

        .mainContainer__content__storageBlock .delete_and_edit_buttons img {
            width: 16px;
            height: 16px;
            filter: brightness(0) invert(1);
        }

        /* Особые стили для важных данных */
        .mainContainer__content__storageBlock td:nth-child(6) {
            font-weight: bold;
            color: #E7772E;
        }
    }

</style>
<body>
    <div class="mainContainer">
        <div class="mainContainer__menu">
            <h2 class="ioio">AoPiCS</h2>
            <div class="mainContainer__menu__menuItem">
                <h4>
                    <a href="/AoPiCS/dealsList" class="links">Сделки</a>
                </h4>
            </div>
            <div class="mainContainer__menu__menuItem">
                <h4>
                    <a href="/AoPiCS/tasks" class="links">Работы</a>
                </h4>
            </div>
            <div class="mainContainer__menu__menuItem">
                <h4>
                    <a href="/AoPiCS/storage" class="links">Склад</a>
                </h4>
            </div>
            <div class="mainContainer__menu__menuItem">
                <h4>
                    <a href="/AoPiCS/clients" class="links">Клиенты</a>
                </h4>
            </div>
            <div class="mainContainer__menu__menuItem">
                <h4>
                    <a href="/AoPiCS/calendar" class="links">Календарь</a>
                </h4>
            </div>
        </div>
        <div class="mainContainer__content">
            @yield('content')
        </div>
    </div>
</body>
</html>
