@extends('AoPiCS')
@section('content')
    <style>
        .mainContainer1{
            display: flex;
            justify-content: center;
        }
        form{
            padding: 20px;
            border: 1px solid lightgrey;
            display: flex;
            flex-direction: column;
            margin-top: 5%;
        }
        input{
            border: 1px solid lightgrey;
            margin-top: 2%;
            width: 300px;
            padding: 13px;
            border-radius: 10px;
        }
        button{
            border: 1px solid lightgrey;
            border-radius: 10px;
            padding: 13px;
            width: 100%;
        }
        button:hover{
            cursor: pointer;
            color: white;
            background: #E7772E;
        }
    </style>
    <div class="mainContainer1">
        <form action="editEntry" method="POST">
            @csrf
            <h3>Форма изменения записи</h3>
            <input type="text" name="FIO" placeholder="ФИО" value='{{$task->FIO}}'/>
            <input type="text" name="Auto" placeholder="Автомобиль" value='{{$task->Auto}}'/>
            <input type="text" name="Auto_number" placeholder="Номер автомобиля" value='{{$task->Auto_number}}'/>
            <input type="number" name="total" placeholder="Общая сумма" value='{{$task->total}}'/>
            <input type="number" name="deal_number" placeholder="Номер сделки" value='{{$task->deal_number}}'/>
            <input type="number" name="column_number" placeholder="Номер колонки" value='{{$task->column_number}}'/>
            <p></p>
            <button type="submit">
                Изменить
            </button>
        </form>
    </div>
@endsection
