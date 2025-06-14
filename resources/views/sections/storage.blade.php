@extends('AoPiCS')

@section('content')
    <div class="mainContainer__content__storageBlock">
        <div class="storageBlock__header">
            <h2>Список запчастей</h2>
            <form role="search" method="get" action="/AoPiCS/storage/search" class="search">
                <input type="search" name="search-text" />
                <button>Найти</button>
            </form>
            <a href="/AoPiCS/storage/addNewDelivery">
                <button class="storageBlock__addNewDelivery">
                    +
                </button>
            </a>
        </div>
        <table>
            <tr>
                <td>№</td>
                <td>Название</td>
                <td>Поставщик</td>
                <td>Дата поступления</td>
                <td>Количество позиций</td>
                <td>Сумма поступления</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @foreach($storage as $delivery)
                <tr>
                    <td>{{$delivery->id}}</td>
                    <td>{{$delivery->name}}</td>
                    <td>{{$delivery->supplier}}</td>
                    <td>{{$delivery->date_of_receipt}}</td>
                    <td>{{$delivery->number_of_positions}}</td>
                    <td>{{$delivery->receipt_amount}}₽</td>
                    <td></td>
                    <td></td>
                    <td>
                        <a href="/AoPiCS/storage/{{$delivery->id}}/edit" class="delete_and_edit_buttons">
                            <button>
                                <img src="https://cdn.icon-icons.com/icons2/620/PNG/512/pencil-striped-symbol-for-interface-edit-buttons_icon-icons.com_56782.png" width="20px" height="20px">
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="/AoPiCS/storage/{{$delivery->id}}/deleteEntry" class="delete_and_edit_buttons">
                            <button>
                                <img src="https://cdn.icon-icons.com/icons2/1893/PNG/512/dustbin_120823.png" width="20px" height="20px">
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
