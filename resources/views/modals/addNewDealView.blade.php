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
        select{
            border-radius: 10px;
            padding: 10px;
        }
    </style>
    <div class="mainContainer1">
        <form action="add" method="POST">
            @csrf
            <h3>Форма создания новой записи</h3>
            <h4>ФИО клиента</h4>
            <select type="text" name="clients_fio">
                @foreach($clients as $client)
                    <option>{{$client->FIO}}</option>
                @endforeach
            </select>
            <h4>Наименование работы</h4>
            <select type="text" name="tasks_work_name">
                @foreach($tasks as $task)
                    <option>{{$task->work_name}}</option>
                @endforeach
            </select>
            <h4>Дата и время записи</h4>
            <input type="date" name="deals_recording_date"/>
            <input type="time" name="deals_recording_time"/>
            <p></p>
            <button type="submit">
                Добавить
            </button>
        </form>
    </div>
@endsection
