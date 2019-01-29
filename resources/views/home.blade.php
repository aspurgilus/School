@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Для заполнения данных касательно вашей школы, пройдите по нижестоящим пунктам меню</div>
                <div class="link"><a href="/home/create">Общая информация</a></div>
                <div class="link"><a href="/home/form2">Курсы</a></div>
                <div class="link"><a href="/home/form3">Мероприятия</a></div>
                <div class="link"><a href="/home/form4">Преподаватели</a></div>
                <div class="link"><a href="/home/form5">Студенты</a></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
