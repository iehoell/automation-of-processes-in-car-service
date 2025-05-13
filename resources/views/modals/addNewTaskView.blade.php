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
        <form action="add" method="POST">
            @csrf
            <h3>Форма создания новой записи</h3>
            <input type="text" name="FIO" placeholder="Фио"/>
            <input type="text" name="Auto" placeholder="Автомобиль"/>
            <input type="text" name="Auto_number" placeholder="Номер автомобиля"/>
            <input type="number" name="total" placeholder="Общая сумма"/>
            <input type="number" name="deal_number" placeholder="Номер сделки"/>
            <input type="number" name="column_number" placeholder="Номер колонки"/>
            <p></p>
            <button type="submit">
                Добавить
            </button>
        </form>
    </div>
@endsection
