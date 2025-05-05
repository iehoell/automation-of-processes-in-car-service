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
            <input type="number" name="id" placeholder="ID"/>
            <input type="text" name="supplier" placeholder="Поставщик"/>
            <input type="date" name="date_of_receipt" placeholder="Дата поступления"/>
            <input type="number" name="subdivision" placeholder="Подразделение"/>
            <input type="number" name="number_of_positions" placeholder="Количество позиций"/>
            <input type="number" name="receipt_number" placeholder="Номер поступления"/>
            <input type="number" name="receipt_amount" placeholder="Сумма поступления"/>
            <p></p>
            <button type="submit">
                Добавить
            </button>
        </form>
    </div>
@endsection
