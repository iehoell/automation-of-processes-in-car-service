@extends('AoPiCS')
@section('content')
    <div class="mainContainer__content__dealsBlock">
        @foreach($deals as $deal_item)
            <h2>Сделка №{{$deal_item->deal_number}}</h2>
            <h4>Время записи: {{$deal_item->deals_recording_date}} в {{$deal_item->deals_recording_time}}</h4>
            <h2>Клиент</h2>
            <div class="dealsBlock__clientBlock">
                <div class="dealsBlock__clientBlock__fio">
                    <img src="https://i.pinimg.com/474x/c6/00/f2/c600f276b3f7cafcd572402ac86e489b.jpg"/>
                    <h4>{{$deal_item->clients_fio}}</h4>
                </div>
                <div class="dealsBlock__clientBlock__number">
                    <img src="https://cdn-icons-png.flaticon.com/512/5585/5585856.png"/>
                    <h4>{{$deal_item->clients_phone}}</h4>
                </div>
                <div class="dealsBlock__clientBlock__sale">
                    <p>На запчасти: {{$deal_item->clients_discount_spare_parts}}%</p>
                    <p>На работы: {{$deal_item->clients_discount_services}}%</p>
                </div>
                <div class="dealsBlock__clientBlock__auto">
                    <h4>{{$deal_item->clients_auto}}</h4>
                    <p>{{$deal_item->clients_auto_number}}</p>
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
                        <td></td>
                    </tr>
                    <tr>
                        <td data-label="Наименование">{{$deal_item->tasks_work_name}}</td>
                        <td data-label="Исполнитель">{{$deal_item->tasks_executor}}</td>
                        <td data-label="Норма времени">{{$deal_item->tasks_work_time}} час(-ов)</td>
                        <td data-label="Итого">{{$deal_item->tasks_total}}₽</td>
                        <td></td>
                        <td></td>
                        <td data-label="Изменить">
                            <button>
                                <img src="https://cdn.icon-icons.com/icons2/620/PNG/512/pencil-striped-symbol-for-interface-edit-buttons_icon-icons.com_56782.png" width="20px" height="20px"/>
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
                    </tr>
                    <tr>
                        <td data-label="№">1</td>
                        <td data-label="Наименование">{{$deal_item->storage_name}}</td>
                        <td data-label="Кол-во">4</td>
                        <td data-label="Цена закупки">{{$deal_item->storage_purshase_price}}</td>
                        <td data-label="Цена продажи">{{$deal_item->storage_sale_price}}</td>
                        <td></td>
{{--                        <td>--}}
{{--                            <button>--}}
{{--                                <img src="https://cdn-icons-png.flaticon.com/512/61/61099.png" width="20px" height="20px">--}}
{{--                            </button>--}}
{{--                        </td>--}}
                        <td>
                            <button>
                                <img src="https://cdn.icon-icons.com/icons2/620/PNG/512/pencil-striped-symbol-for-interface-edit-buttons_icon-icons.com_56782.png" width="20px" height="20px"/>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        @endforeach
    </div>
@endsection
