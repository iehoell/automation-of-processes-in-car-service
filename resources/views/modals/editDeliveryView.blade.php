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
            <input type="text" name="supplier" placeholder="Поставщик" value='{{$delivery->supplier}}'/>
            <input type="date" name="date_of_receipt" placeholder="Дата поступления" value='{{$delivery->date_of_receipt}}'/>
            <input type="text" name="name" placeholder="Подразделение" value='{{$delivery->name}}'/>
            <input type="number" name="number_of_positions" placeholder="Количество позиций" value='{{$delivery->number_of_positions}}'/>
            <input type="number" name="receipt_amount" placeholder="Сумма поступления" value='{{$delivery->receipt_amount}}'/>
            <p></p>
            <button type="submit">
                Изменить
            </button>
        </form>
    </div>
@endsection
