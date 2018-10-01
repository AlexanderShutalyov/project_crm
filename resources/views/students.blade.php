@extends('layouts.nav')
@section('title', 'Студенты A-Level')


<div class="container-fluid">
    {{--  Это бутофория
      В этом месте будет меню-аккордион по направлениям и группам--}}
    <div class="col-md-2 col-sm-4 ">
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Поиск</button>
        </form>
        <p></p>
        <ul class="list-group">
            <li class="list-group-item">PHP Продвинутый</li>
            <li class="list-group-item">FRONT_END Продвинутый</li>
            <li class="list-group-item">HR/RECRUITMENT РАСШИРЕННЫЙ</li>
            <li class="list-group-item">QA AUTOMATION РАСШИРЕННЫЙ</li>
            <li class="list-group-item">FULLSTACK JS РАСШИРЕННЫЙ</li>
            <li class="list-group-item">FULLSTACK JS РАСШИРЕННЫЙ</li>
            <li class="list-group-item">FULLSTACK JS РАСШИРЕННЫЙ</li>
            <li class="list-group-item">FULLSTACK JS РАСШИРЕННЫЙ</li>
            <li class="list-group-item">FULLSTACK JS РАСШИРЕННЫЙ</li>
            <li class="list-group-item">FULLSTACK JS РАСШИРЕННЫЙ</li>
            <li class="list-group-item">FULLSTACK JS РАСШИРЕННЫЙ</li>
        </ul>
    </div>

    <div class="col-md-6 col-sm-6 ">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Группа</th>
                <th>Статус обучения</th>
                <th>Статус трудоустройства</th>
                <th>Коментарий</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Изменить</td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Изменить</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>Изменить</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Изменить</td>
            </tr>

            </tbody>
        </table>
        <div>

            <ul>
                @if ($all_students)
                    @foreach ($all_students as $index)
                        <li>
                            <a href="{{route('student.view', ['id' => $index->id] )}}">{{$index->name}}</a>
                            <a href="{{route('student.view', ['id' => $index->id] )}}">{{$index->address}}</a>
                            <a href="{{route('student.view', ['id' => $index->id] )}}">{{$index->group_name}}</a>
                            <a href="{{route('student.view', ['id' => $index->id] )}}">{{$index->learning_status}}</a>
                            <a href="{{route('student.view', ['id' => $index->id] )}}">{{$index->employment_status}}</a>
                            <a href="{{route('student.view', ['id' => $index->id] )}}">{{$index->comment}}</a>
                        </li>
                    @endforeach
                    {{ $all_students->links() }}
                @endif
            </ul>


        </div>
    </div>


    <div class="col-md-2 col-sm-6 ">
        <!-- form adding students to DB.
        Use data in php by
        $request->session()->keep(['name', 'email', 'site', 'text_area']);
        -->
        <div class="container">
            <div>
                <img style="max-width:100px; margin-top: -7px;"
                     src="/images/group.png">
            </div>
            <!-- Trigger the modal with a button -->
            <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#myModal">Добавить нового
                студента
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Добавление нового студента</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{Route('add.student')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <p>Введите данные</p>
                                <p>Имя студента</p>
                                <p><input name="student_name"></p>
                                <p>Фамалия студента</p>
                                <p><input name="student_surname"></p>
                                <p>Дата рождения студента</p>
                                <p><input name="student_birth"></p>
                                <p>Адрес студента</p>
                                <p><input name="student_adress"></p>
                                <p>E-mail студента</p>
                                <p><input name="student_mail"></p>
                                <p>Телефон студента</p>
                                <p><input name="student_phone"></p>
                                </br>
                                <input type="submit" value="Add new student">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{Route('addstud')}}">
                <input type="submit" value="Add new student">
            </form>
        </div>
    </div>
</div>

@extends('layouts.footer')

