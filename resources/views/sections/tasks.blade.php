@extends('AoPiCS')

@section('content')
    <div class="mainContainer__content__tasksBlock">
        <div class="tasksBlock__flex">
            <h2>Список выполняемых работ</h2>
            <form role="search" method="get" action="/AoPiCS/tasks/search" class="search">
                <input type="search" name="search-text" />
                <button>Найти</button>
            </form>
            <a href="/AoPiCS/tasks/addNewTask">
                <button class="tasksBlock__addNewTask">
                    +
                </button>
            </a>
        </div>
            <div class="tasksBlock__tasks">
                <table>
                    <tr>
                        <td>№</td>
                        <td>Наименование работы</td>
                        <td>Исполнитель</td>
                        <td>Время выполнения</td>
                        <td>Запчасти</td>
                        <td>Кол-во запчастей</td>
                        <td>Итого</td>
                        <td></td>
                        <td></td>
                    </tr>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->work_name}}</td>
                            <td>{{$task->executor}}</td>
                            <td>{{$task->lead_time}} час(-ов)</td>
                            <td>{{$task->spare_parts}}</td>
                            <td>{{$task->number_of_spare_parts}}</td>
                            <td>{{$task->total}}₽</td>
                            <td>
                                <a href="/AoPiCS/tasks/{{$task->id}}/edit" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://cdn.icon-icons.com/icons2/620/PNG/512/pencil-striped-symbol-for-interface-edit-buttons_icon-icons.com_56782.png" width="20px" height="20px">
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="/AoPiCS/tasks/{{$task->id}}/deleteEntry" class="delete_and_edit_buttons">
                                    <button>
                                        <img src="https://cdn.icon-icons.com/icons2/1893/PNG/512/dustbin_120823.png" width="20px" height="20px">
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
    </div>
@endsection
