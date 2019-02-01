@extends('layouts.app')

@section('title', 'Все мероприятия')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Все мероприятия</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1>Мероприятия</h1>
                        <div>
                            @foreach($actions as $action)
                                <div>
                                    <form action="/actions/{{$action->id}}" method="POST">
                                        @method('PATCH')
                                        @csrf
                                        <label for="completed">{{$action->Name}}
                                        <input type="checkbox" name="completed" onchange="this.form.submit()" {{$action->Completed ? 'checked' : ''}}>
                                        </label>
                                    </form>

                                </div>
                                <div>Логотип мероприятия: <img src="{{$action->Logo}}"></div>
                                <div>Дата и время проведения: {{$action->DateTime}}</div>
                                <div>Место проведения: {{$action->Place}}</div>
                                <div>Статус проведения: <span class={{$action->Completed ? 'isCompleted' : 'isnotCompleted'}}> {{$action->Completed ? 'Завершено' : 'Не завершено'}}</span></div><br><br>
                            @endforeach
                        <a href="/actions/create">Добавить мероприятие</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection