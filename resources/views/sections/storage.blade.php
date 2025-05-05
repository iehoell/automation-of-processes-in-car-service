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
            @foreach($storage as $storage_item)
                <tr>
                    <td>{{$storage_item->id}}</td>
                    <td>{{$storage_item->supplier}}</td>
                    <td>{{$storage_item->date_of_receipt}}</td>
                    <td>{{$storage_item->subdivision}}</td>
                    <td>{{$storage_item->number_of_positions}}</td>
                    <td>{{$storage_item->receipt_amount}}</td>
                    <td>{{$storage_item->receipt_number}}</td>
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
            @endforeach
        </table>
    </div>
@endsection
