@extends('layouts.app')

@section('title', 'Новое мероприятие')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Заполните следующие поля</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="/actions" method="post">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Введите название вашего мероприятия</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="DateTime" class="col-md-4 col-form-label text-md-right">Введите дату и время проведения</label>

                                <div class="col-md-6">
                                    <input id="DateTime" type="datetime-local" class="form-control{{ $errors->has('DateTime') ? ' is-invalid' : '' }}" name="DateTime" value="{{ old('DateTime') }}" required autofocus>

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
                                    <input id="place" type="text" class="form-control{{ $errors->has('place') ? ' is-invalid' : '' }}" name="place" value="{{ old('place') }}" required autofocus>

                                    @if ($errors->has('place'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cost" class="col-md-4 col-form-label text-md-right">Введите плату за вход</label>

                                <div class="col-md-6">
                                    <input id="cost" type="text" class="form-control{{ $errors->has('cost') ? ' is-invalid' : '' }}" name="cost" value="{{ old('cost') }}" required autofocus>

                                    @if ($errors->has('cost'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cost') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="school_id" class="col-md-4 col-form-label text-md-right">Введите id вашей школы</label>

                                <div class="col-md-6">
                                    <input id="school_id" type="text" class="form-control{{ $errors->has('school_id') ? ' is-invalid' : '' }}" name="school_id" value="{{ old('school_id') }}" required autofocus>

                                    @if ($errors->has('school_id'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('school_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Отправить
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