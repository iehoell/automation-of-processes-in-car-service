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
        width: 95%;
        padding: 13px;
        border-radius: 10px;
    }
    button{
        border: 1px solid lightgrey;
        border-radius: 10px;
        padding: 13px;
        width: 101%;
    }
    button:hover{
        cursor: pointer;
        color: white;
        background: #E7772E;
    }
    h4{
        margin-bottom: 5px;
        margin-top: 5px;
    }
    select{
        border-radius: 10px;
        width: 101%;
        padding: 10px;
    }
</style>
<body>
<div class="mainContainer1">
    <form action="editEntry" method="POST">
        @csrf
        <h3>Введите свои данные, чтобы записаться на техосмотр</h3>
        <h4>ФИО</h4>
        <input type="text" name="FIO" value="{{$calendar->client_fio}}" readonly/>
        <h4>Автомобиль</h4>
        <input type="text" name="Auto" value="{{$calendar->auto}}" readonly/>
        <h4>Гос. номер автомобиля</h4>
        <input type="text" name="Auto_number" maxlength="6" size="6" value="{{$calendar->auto_number}}" readonly/>
        <h4>Номер телефона</h4>
        <input type="tel" name="phone_number" value="{{$calendar->phone_number}}" readonly/>
        <h4>Время записи</h4>
        <input type="datetime-local" name="recording_date" max="2026-06-24T00:00"/>
        <h4>Тип работ</h4>
        <select type="text" name="task_name">
            @foreach($tasks as $task)
                <option>{{$task->work_name}}</option>
            @endforeach
        </select>
        <p></p>
        <button type="submit">
            Записаться на техосмотр
        </button>
    </form>
</div>
</body>
</html>
@endsection
