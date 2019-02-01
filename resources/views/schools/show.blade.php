@extends('layouts.app')

@section('title', 'Показ')

@section('content')

    <div class="container col-md-6">
        <a href="/schools/{{$school->id}}/edit">Редактировать</a>
        <table>
            <tr>
                <th>Наименование</th>
                <th>Город</th>
                <th>Адресс</th>
            </tr>
            <tr>
                <td>{{$school->Name}}</td>
                <td>{{$school->City}}</td>
                <td>{{$school->Address}}</td>
            </tr>
        </table>
        @if ($school->courses->count())
            <ul>
                <h2>Курсы этой школы:</h2>
                @foreach($school->courses as $course)
                    <li>Название курса: <a href="#">{{$course->Name}}</a></li>
                    <li>Лого курса: <img src="{{$course->Logo}}"></li>
                    <li>Количество часов: {{$course->Hours}}</li>
                    <li>Стоимость курса: {{$course->Cost}}</li>
                @endforeach
            </ul>
        @endif

        @if ($school->actions->count())
            <ul>
                <h2>Мероприятия этой школы:</h2>
                @foreach($school->actions as $action)
                    <li>Название мероприятия: <a href="/actions/{{$action->id}}/edit">{{$action->Name}}</a></li>
                    <li>Логотип мероприятия: <img src="{{$action->Logo}}"></li>
                    <li>Дата и время проведения: {{$action->DateTime}}</li>
                    <li>Место проведения: {{$action->Place}}</li>
                    <li>Статус проведения: <span class={{$action->Completed ? 'isCompleted' : 'isnotCompleted'}}> {{$action->Completed ? 'Завершено' : 'Не завершено'}}</span></li><br><br>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="/schools/{{$school->id}}">
            @method('DELETE')
            @csrf
            <div class="form-group row mt-2">
                <div class="col-md-6 offset-md-0">
                    <button type="submit" class="btn btn-primary">
                        Удалить
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection