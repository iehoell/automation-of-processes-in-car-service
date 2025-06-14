<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Запись на техосмотр</title>
</head>
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
        <form action="/signupformaintenance/add" method="POST">
            @csrf
            <h3>Введите свои данные, чтобы записаться на техосмотр</h3>
            <h4>ФИО</h4>
            <input type="text" name="FIO" value="{{$_SESSION['FIO']}}" readonly/>
            <h4>Автомобиль</h4>
            <input type="text" name="Auto" value="{{$_SESSION['auto']}}" readonly/>
            <h4>Гос. номер автомобиля</h4>
            <input type="text" name="Auto_number" value="{{$_SESSION['auto_number']}}" readonly/>
            <h4>Номер телефона</h4>
            <input type="tel" name="phone_number" value="{{$_SESSION['telephone_number']}}" readonly/>
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
