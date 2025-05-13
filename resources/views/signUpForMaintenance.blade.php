<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Запись на техосмотр</title>
</head>
    <script>
        function myfunction(){
            location.href='/profile';
            alert('Вы успешно записались на техосмотр!');
        }
    </script>
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
    </style>
    <body>
    <div class="mainContainer1">
        <form action="add" method="POST">
            @csrf
            <h3>Введите свои данные, чтобы записаться на техосмотр</h3>
            <h4>ФИО</h4>
            <input type="text" name="FIO"/>
            <h4>Автомобиль</h4>
            <input type="text" name="Auto" />
            <h4>Гос. номер автомобиля</h4>
            <input type="text" name="Auto_number" maxlength="6" size="6"/>
            <h4>Номер телефона</h4>
            <input type="tel" name="phone_number"/>
            <h4>Время записи</h4>
            <input type="datetime-local" name="recording_date" max="2026-06-24T00:00"/>
            <p></p>
            <button type="submit" onclick="myfunction()">
                Записаться на техосмотр
            </button>
        </form>
    </div>
    </body>
</html>
