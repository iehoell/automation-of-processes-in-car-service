@extends('AoPiCS')
@section('content')
    <div class="mainContainer__content__clientsBlock">
        <div class="clientsBlock__header">
            <h2>Список клиентов</h2>
            <a href="/AoPiCS/clients/addNewClient">
                <button class="clientsBlock__addNewClient">
                    +
                </button>
            </a>
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
            @foreach($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->FIO}}</td>
                    <td>{{$client->Auto}}</td>
                    <td>{{$client->Auto_number}}</td>
                    <td>{{$client->Registration_date}}</td>
                    <td>{{$client->Telephone_number}}</td>
                    <td>{{$client->Discount_on_services}}</td>
                    <td>{{$client->Discount_on_spare_parts}}</td>
                    <td>
                        <a href="/AoPiCS/clients/{{$client->id}}/edit" class="delete_and_edit_buttons">
                            <button>
                                <img src="https://cdn.icon-icons.com/icons2/620/PNG/512/pencil-striped-symbol-for-interface-edit-buttons_icon-icons.com_56782.png" width="20px" height="20px">
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="/AoPiCS/clients/{{$client->id}}/deleteEntry" class="delete_and_edit_buttons">
                            <button>
                                <img src="https://cdn.icon-icons.com/icons2/1893/PNG/512/dustbin_120823.png" width="20px" height="20px">
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        @yield('modal')
    </div>
@endsection
