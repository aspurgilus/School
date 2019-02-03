@extends('layouts.app')

@section('title','Школы')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(!$schoolLimit)
            <a class="link" href="/schools/create">Добавить школу</a>
            @endif
            <h1>The best schools</h1>
            <ul>
            @foreach($schools as $school)
                <li><a href="/schools/{{$school->id}}">{{$school->Name}}</a> </li>
                <li>{{$school->City}}</li>
                <li>{{$school->Address}}</li><br><br>
            @endforeach
            </ul>
        </div>
    </div>
@endsection


