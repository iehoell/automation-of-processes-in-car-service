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
                <td>Дата создания</td>
                <td>Статус</td>
                <td>Кем проведена</td>
            </tr>
            <tr>
                <td><a href="/AoPiCS/dealsList/deals">228</a></td>
                <td>03.05.2025</td>
                <td>Выполнена</td>
                <td>Кислицын Владимир</td>
            </tr>
        </table>
    </div>
@endsection
