@extends('AoPiCS')

@section('content')
    <div class="mainContainer__content__dealsList">
        <div class="dealsListBlock__header">
            <h2>Список сделок</h2>
            <form role="search" method="get" action="AoPiCS/dealsList/search" class="search">
                <input type="search" name="search-text" />
                <button>Найти</button>
            </form>
            <a href="/AoPiCS/dealsList/addNewDeal">
                <button class="dealsListBlock__addNewDeal">
                    +
                </button>
            </a>
        </div>
        <table>
            <tr class="titleRow">
                <td>Номер сделки</td>
                <td>Наименование работы</td>
                <td>Статус</td>
                <td>Исполнитель</td>
            </tr>
            @foreach($dealsList as $deal)
                <tr>
                    <td><a href="/AoPiCS/dealsList/{{$deal->deal_number}}">{{$deal->deal_number}}</a></td>
                    <td>{{$deal->tasks_work_name}}</td>
                    <td>{{$deal->deal_status}}</td>
                    <td>{{$deal->tasks_executor}}</td>
                    <td>
                        <a href="/AoPiCS/dealsList/{{$deal->deal_number}}/deleteEntry" class="delete_and_edit_buttons">
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
