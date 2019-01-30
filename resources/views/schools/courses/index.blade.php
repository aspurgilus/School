@extends('layouts.app')

@section('title', 'Курсы')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-header">Добавьте доступные курсы вашей школы</div>
                    <div class="link"><a href="/courses/create">Общая информация</a></div>
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

                        <div class="link"><a href="/schools">Показать все данные</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection