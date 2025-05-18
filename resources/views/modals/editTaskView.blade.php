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
            <input type="text" name="work_name" placeholder="Наименование работы" value='{{$task->work_name}}'/>
            <input type="text" name="executor" placeholder="Исполнитель" value='{{$task->executor}}'/>
            <input type="number" name="lead_time" placeholder="Время выполнения" value='{{$task->lead_time}}'/>
            <input type="text" name="spare_parts" placeholder="Нужные для работы запчасти" value='{{$task->spare_parts}}'/>
            <input type="number" name="number_of_spare_parts" placeholder="Кол-во запчастей" value='{{$task->number_of_spare_parts}}'/>
            <input type="number" name="total" placeholder="Общая сумма" value='{{$task->total}}'/>
            <p></p>
            <button type="submit">
                Изменить
            </button>
        </form>
    </div>
@endsection
