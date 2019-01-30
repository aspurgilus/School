@extends('layouts.app')

@section('title', 'Показ')

@section('content')
    <? function redir() {
    	redirect('/schools/{{$school->id}}/edit');
    }

    ?>
    <div class="container col-md-6">
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
        <a href="/schools/{{$school->id}}/edit">Редактировать</a>

        <form method="POST" action="/schools/{{$school->id}}">
            @method('DELETE')
            @csrf
            <div class="form-group row mt-2">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Удалить
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection