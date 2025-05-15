@extends('AoPiCS')
@section('content')
    <div class="mainContainer__content__dealsBlock">
        <h2>Сделка №228</h2>
        <h4>Время записи: 11:00 03.05.2025</h4>
        <h2>Клиент</h2>
        <div class="dealsBlock__clientBlock">
            <div class="dealsBlock__clientBlock__fio">
                <img src="https://i.pinimg.com/474x/c6/00/f2/c600f276b3f7cafcd572402ac86e489b.jpg"/>
                <h4>Иванов Иван</h4>
            </div>
            <div class="dealsBlock__clientBlock__number">
                <img src="https://cdn-icons-png.flaticon.com/512/5585/5585856.png"/>
                <h4>8-800-555-35-35</h4>
            </div>
            <div class="dealsBlock__clientBlock__sale">
                <p>На запчасти: 0%</p>
                <p>На работы: 0%</p>
            </div>
            <div class="dealsBlock__clientBlock__auto">
                <h4>Mercedes CLS63 AMG 4-Matic</h4>
                <p>У444УУ12</p>
            </div>
        </div>
        <div class="dealsBlock__workBlock">
            <h2>Работы</h2>
            <table>
                <tr class="titleRow">
                    <td>Наименование</td>
                    <td>Исполнитель</td>
                    <td>Норма времени</td>
                    <td>Итого</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Замена сальника привода</td>
                    <td>Кислов Анатолий</td>
                    <td>1 час(-ов)</td>
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
        <div class="dealsBlock__productBlock">
            <h2>Товары</h2>
            <table>
                <tr class="titleRow">
                    <td>№</td>
                    <td>Наименование</td>
                    <td>Кол-во</td>
                    <td>Цена закупки</td>
                    <td>Цена продажи</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Резина НОРДМАН</td>
                    <td>4</td>
                    <td>6400</td>
                    <td>4400</td>
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
    </div>
@endsection
