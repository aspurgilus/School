@extends('layouts.app')

@section('title', 'Moscow Home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$city}}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <h1>The best schools</h1>
                            <ul>
                                @foreach($schools as $school)
                                    <li>{{$school->Name}}</li>
                                    <li>{{$school->City}}</li>
                                    <li>{{$school->Address}}</li><br><br>
                                @endforeach
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection