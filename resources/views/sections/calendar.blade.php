@extends('AoPiCS')
@section('content')
    <style>
        table{
            width: 100%;
            border-radius: 10px;
            border: 1px solid black;
            padding: 10px;
        }
    </style>
    <div class="mainContainer__content__clientsBlock">
        <div class="clientsBlock__header">
            <h2>Календарь записей</h2>
            <form role="search" method="get" action="/AoPiCS/calendar/search" class="search">
                <input type="search" name="search-text" />
                <button>Найти</button>
            </form>
        </div>
    <table>
        <tr>
            <td>№</td>
            <td>ФИО клиента</td>
            <td>Дата записи</td>
            <td>Время записи</td>
            <td>Автомобиль</td>
            <td>Гос. номер авто</td>
            <td>Номер телефона</td>
            <td>Тип работы</td>
            <td></td>
            <td></td>
        </tr>
        @foreach($calendar as $calendar_item)
            <tr>
                <td>{{$calendar_item->id}}</td>
                <td>{{$calendar_item->client_fio}}</td>
                <td>{{$calendar_item->recording_date}}</td>
                <td>{{$calendar_item->recording_time}}</td>
                <td>{{$calendar_item->auto}}</td>
                <td>{{$calendar_item->auto_number}}</td>
                <td>{{$calendar_item->phone_number}}</td>
                <td>{{$calendar_item->work_type}}</td>
                <td>
                    <a href="/AoPiCS/calendar/{{$calendar_item->id}}/edit" class="delete_and_edit_buttons">
                        <button>
                            <img src="https://cdn.icon-icons.com/icons2/620/PNG/512/pencil-striped-symbol-for-interface-edit-buttons_icon-icons.com_56782.png" width="20px" height="20px">
                        </button>
                    </a>
                </td>
                <td>
                    <a href="/AoPiCS/calendar/{{$calendar_item->id}}/deleteEntry" class="delete_and_edit_buttons">
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
