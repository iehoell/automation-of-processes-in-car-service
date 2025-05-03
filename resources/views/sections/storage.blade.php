@extends('AoPiCS')

@section('content')
    <div class="mainContainer__content__storageBlock">
        <div class="storageBlock__header">
            <h2>Список запчастей</h2>
            <button class="storageBlock__addNewClient">
                +
            </button>
        </div>
        <table>
            <tr>
                <td>№</td>
                <td>Номер поступления</td>
                <td>Поставщик</td>
                <td>Дата поступления</td>
                <td>Подразделение</td>
                <td>Количество позиций</td>
                <td>Сумма поступления</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>1</td>
                <td>11333</td>
                <td>DELIVERY</td>
                <td>03.05.2025</td>
                <td>022-111</td>
                <td>1488</td>
                <td>69420P</td>
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
