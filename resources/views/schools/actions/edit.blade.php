@extends('layouts.app')

@section('title', 'Редактирование мероприятий')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Отредактируйте ваши данные</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="/actions/{{$action->id}}" method="POST">
                            @method('PATCH')
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Введите название вашего мероприятия</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $action->Name }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="DateTime" class="col-md-4 col-form-label text-md-right">Введите название дату и время проведения</label>

                                <div class="col-md-6">
                                    <input id="DateTime" type="text" class="form-control{{ $errors->has('DateTime') ? ' is-invalid' : '' }}" name="DateTime" value="{{ $action->DateTime }}" required autofocus>

                                    @if ($errors->has('DateTime'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('DateTime') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="place" class="col-md-4 col-form-label text-md-right">Введите адресс места проведения</label>

                                <div class="col-md-6">
                                    <input id="place" type="text" class="form-control{{ $errors->has('place') ? ' is-invalid' : '' }}" name="place" value="{{ $action->Place }}" required autofocus>

                                    @if ($errors->has('place'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cost" class="col-md-4 col-form-label text-md-right">Введите стоимость посещения</label>

                                <div class="col-md-6">
                                    <input id="cost" type="text" class="form-control{{ $errors->has('cost') ? ' is-invalid' : '' }}" name="cost" value="{{ $action->Cost }}" required autofocus>

                                    @if ($errors->has('cost'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cost') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary mb-2">
                                        Обновить
                                    </button>
                                </div>
                            </div>
                        </form>
                        <form method="POST" action="/schools/{{$action->id}}">
                            @method('DELETE')
                            @csrf
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Удалить
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection