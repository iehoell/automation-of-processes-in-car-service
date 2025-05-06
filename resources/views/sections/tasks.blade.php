@extends('AoPiCS')

@section('content')
    <div class="mainContainer__content__tasksBlock">
        <div class="tasksBlock__flex">
            <h2>Задачи</h2>
            <a href="/AoPiCS/tasks/addNewTask">
                <button class="tasksBlock__addNewTask">
                    +
                </button>
            </a>
        </div>
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
                            <h5>{{$task->total}}₽</h5>
                            <div class="tasksItem__buttons">
                                <a href="/AoPiCS/tasks/{{$task->id}}/edit" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://cdn.icon-icons.com/icons2/620/PNG/512/pencil-striped-symbol-for-interface-edit-buttons_icon-icons.com_56782.png" width="20px" height="20px">
                                    </button>
                                </a>
                                <a href="/AoPiCS/tasks/{{$task->id}}/deleteEntry" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://cdn.icon-icons.com/icons2/1893/PNG/512/dustbin_120823.png" width="20px" height="20px">
                                    </button>
                                </a>
                                <a href="/AoPiCS/tasks/{{$task->id}}/deleteEntry" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://s1.iconbird.com/ico/2014/1/598/w512h5121390846454rightcircular512.png" width="20px" height="20px">
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
                @foreach($tasks as $task)
                    @if($task->column_number == 2)
                        <div class="tasksBlock__tasks__tasksItem">
                            <h5>{{$task->FIO}}</h5>
                            <h5>{{$task->Auto}}</h5>
                            <h5>{{$task->Auto_number}}</h5>
                            <h5>{{$task->total}}₽</h5>
                            <div class="tasksItem__buttons">
                                <a href="/AoPiCS/tasks/{{$task->id}}/edit" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://cdn.icon-icons.com/icons2/620/PNG/512/pencil-striped-symbol-for-interface-edit-buttons_icon-icons.com_56782.png" width="20px" height="20px">
                                    </button>
                                </a>
                                <a href="/AoPiCS/tasks/{{$task->id}}/deleteEntry" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://cdn.icon-icons.com/icons2/1893/PNG/512/dustbin_120823.png" width="20px" height="20px">
                                    </button>
                                </a>
                                <a href="/AoPiCS/tasks/{{$task->id}}/deleteEntry" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://s1.iconbird.com/ico/2014/1/598/w512h5121390846454rightcircular512.png" width="20px" height="20px">
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
                @foreach($tasks as $task)
                    @if($task->column_number == 3)
                        <div class="tasksBlock__tasks__tasksItem">
                            <h5>{{$task->FIO}}</h5>
                            <h5>{{$task->Auto}}</h5>
                            <h5>{{$task->Auto_number}}</h5>
                            <h5>{{$task->total}}₽</h5>
                            <div class="tasksItem__buttons">
                                <a href="/AoPiCS/tasks/{{$task->id}}/edit" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://cdn.icon-icons.com/icons2/620/PNG/512/pencil-striped-symbol-for-interface-edit-buttons_icon-icons.com_56782.png" width="20px" height="20px">
                                    </button>
                                </a>
                                <a href="/AoPiCS/tasks/{{$task->id}}/deleteEntry" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://cdn.icon-icons.com/icons2/1893/PNG/512/dustbin_120823.png" width="20px" height="20px">
                                    </button>
                                </a>
                                <a href="/AoPiCS/tasks/{{$task->id}}/deleteEntry" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://s1.iconbird.com/ico/2014/1/598/w512h5121390846454rightcircular512.png" width="20px" height="20px">
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
                @foreach($tasks as $task)
                    @if($task->column_number == 4)
                        <div class="tasksBlock__tasks__tasksItem">
                            <h5>{{$task->FIO}}</h5>
                            <h5>{{$task->Auto}}</h5>
                            <h5>{{$task->Auto_number}}</h5>
                            <h5>{{$task->total}}₽</h5>
                            <div class="tasksItem__buttons">
                                <a href="/AoPiCS/tasks/{{$task->id}}/edit" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://cdn.icon-icons.com/icons2/620/PNG/512/pencil-striped-symbol-for-interface-edit-buttons_icon-icons.com_56782.png" width="20px" height="20px">
                                    </button>
                                </a>
                                <a href="/AoPiCS/tasks/{{$task->id}}/deleteEntry" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://cdn.icon-icons.com/icons2/1893/PNG/512/dustbin_120823.png" width="20px" height="20px">
                                    </button>
                                </a>
                                <a href="/AoPiCS/tasks/{{$task->id}}/deleteEntry" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://s1.iconbird.com/ico/2014/1/598/w512h5121390846454rightcircular512.png" width="20px" height="20px">
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
                @foreach($tasks as $task)
                    @if($task->column_number == 5)
                        <div class="tasksBlock__tasks__tasksItem">
                            <h5>{{$task->FIO}}</h5>
                            <h5>{{$task->Auto}}</h5>
                            <h5>{{$task->Auto_number}}</h5>
                            <h5>{{$task->total}}₽</h5>
                            <div class="tasksItem__buttons">
                                <a href="/AoPiCS/tasks/{{$task->id}}/edit" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://cdn.icon-icons.com/icons2/620/PNG/512/pencil-striped-symbol-for-interface-edit-buttons_icon-icons.com_56782.png" width="20px" height="20px">
                                    </button>
                                </a>
                                <a href="/AoPiCS/tasks/{{$task->id}}/deleteEntry" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://cdn.icon-icons.com/icons2/1893/PNG/512/dustbin_120823.png" width="20px" height="20px">
                                    </button>
                                </a>
                                <a href="/AoPiCS/tasks/{{$task->id}}/deleteEntry" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://s1.iconbird.com/ico/2014/1/598/w512h5121390846454rightcircular512.png" width="20px" height="20px">
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
                @foreach($tasks as $task)
                    @if($task->column_number == 6)
                        <div class="tasksBlock__tasks__tasksItem">
                            <h5>{{$task->FIO}}</h5>
                            <h5>{{$task->Auto}}</h5>
                            <h5>{{$task->Auto_number}}</h5>
                            <h5>{{$task->total}}₽</h5>
                            <div class="tasksItem__buttons">
                                <a href="/AoPiCS/tasks/{{$task->id}}/edit" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://cdn.icon-icons.com/icons2/620/PNG/512/pencil-striped-symbol-for-interface-edit-buttons_icon-icons.com_56782.png" width="20px" height="20px">
                                    </button>
                                </a>
                                <a href="/AoPiCS/tasks/{{$task->id}}/deleteEntry" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://cdn.icon-icons.com/icons2/1893/PNG/512/dustbin_120823.png" width="20px" height="20px">
                                    </button>
                                </a>
                                <a href="/AoPiCS/tasks/{{$task->id}}/deleteEntry" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://s1.iconbird.com/ico/2014/1/598/w512h5121390846454rightcircular512.png" width="20px" height="20px">
                                    </button>
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
    </div>
@endsection
