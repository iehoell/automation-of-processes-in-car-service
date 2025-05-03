@extends('AoPiCS')

@section('content')
    <div class="mainContainer__content__dealsList">
        <h2>Сделки</h2>
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
