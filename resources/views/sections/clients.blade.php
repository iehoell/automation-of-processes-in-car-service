@extends('AoPiCS')
@section('content')
    <div class="mainContainer__content__clientsBlock">
        <div class="clientsBlock__header">
            <h2>Список клиентов</h2>
            <button class="clientsBlock__addNewClient">
                +
            </button>
        </div>
        <table>
            <tr>
                <td>№</td>
                <td>ФИО клиента</td>
                    <td>Автомобиль</td>
                <td>Гос номер</td>
                <td>Дата регистрации</td>
                <td>Номер телефона</td>
                <td>Скидка на услуги</td>
                <td>Скидка на запчасти</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>1</td>
                <td>Иванов Иван Иванович</td>
                    <td>Mercedes CLS63</td>
                <td>У444УУ12</td>
                <td>03.05.2025</td>
                <td>88005553535</td>
                <td>5%</td>
                <td>5%</td>
                <td>
                    <button>
                        <img src="https://cdn.icon-icons.com/icons2/620/PNG/512/pencil-striped-symbol-for-interface-edit-buttons_icon-icons.com_56782.png" width="20px" height="20px">
                    </button>
                </td>
                <td>
                    <button>
                        <img src="https://cdn.icon-icons.com/icons2/1893/PNG/512/dustbin_120823.png" width="20px" height="20px">
                    </button>
                </td>
            </tr>
        </table>
    </div>
@endsection
