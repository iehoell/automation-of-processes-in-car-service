@extends('AoPiCS')

@section('content')
    <div class="mainContainer__content__tasksBlock">
        <h2>Задачи</h2>
        <div class="tasksBlock__titles">
            <div><h4>Неразобранное</h4></div>
            <div><h4>Запись</h4></div>
            <div><h4>Проценка</h4></div>
            <div><h4>Перезвонить</h4></div>
            <div><h4>В работе</h4></div>
            <div><h4>Выполнено</h4></div>
        </div>
            <div class="tasksBlock__tasks">
                @foreach($tasks as $task)
                    @if($task->column_number == 1)
                        <div class="tasksBlock__tasks__tasksItem">
                            <h5>{{$task->FIO}}</h5>
                            <h5>{{$task->Auto}}</h5>
                            <h5>{{$task->Auto_number}}</h5>
                            <h5>{{$task->total}}</h5>
                        </div>
                    @endif
                @endforeach
                @foreach($tasks as $task)
                    @if($task->column_number == 2)
                        <div class="tasksBlock__tasks__tasksItem">
                            <h5>{{$task->FIO}}</h5>
                            <h5>{{$task->Auto}}</h5>
                            <h5>{{$task->Auto_number}}</h5>
                            <h5>{{$task->total}}</h5>
                        </div>
                    @endif
                @endforeach
                @foreach($tasks as $task)
                    @if($task->column_number == 3)
                        <div class="tasksBlock__tasks__tasksItem">
                            <h5>{{$task->FIO}}</h5>
                            <h5>{{$task->Auto}}</h5>
                            <h5>{{$task->Auto_number}}</h5>
                            <h5>{{$task->total}}</h5>
                        </div>
                    @endif
                @endforeach
                @foreach($tasks as $task)
                    @if($task->column_number == 4)
                        <div class="tasksBlock__tasks__tasksItem">
                            <h5>{{$task->FIO}}</h5>
                            <h5>{{$task->Auto}}</h5>
                            <h5>{{$task->Auto_number}}</h5>
                            <h5>{{$task->total}}</h5>
                        </div>
                    @endif
                @endforeach
                @foreach($tasks as $task)
                    @if($task->column_number == 5)
                        <div class="tasksBlock__tasks__tasksItem">
                            <h5>{{$task->FIO}}</h5>
                            <h5>{{$task->Auto}}</h5>
                            <h5>{{$task->Auto_number}}</h5>
                            <h5>{{$task->total}}</h5>
                        </div>
                    @endif
                @endforeach
                @foreach($tasks as $task)
                    @if($task->column_number == 6)
                        <div class="tasksBlock__tasks__tasksItem">
                            <h5>{{$task->FIO}}</h5>
                            <h5>{{$task->Auto}}</h5>
                            <h5>{{$task->Auto_number}}</h5>
                            <h5>{{$task->total}}</h5>
                        </div>
                    @endif
                @endforeach
            </div>
    </div>
@endsection
