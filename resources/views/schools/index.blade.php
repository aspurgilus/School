<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>The best schools</h1>
<ul>
@foreach($schools as $school)
    <li><a href="/schools/{{$school->id}}">{{$school->Name}}</a> </li>
    <li>{{$school->City}}</li>
    <li>{{$school->Address}}</li><br><br>
@endforeach
</ul>

<h1>The best courses</h1>


</body>
</html>

