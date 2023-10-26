<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
</head>
<body>
<h1>Hello Lavarel view! {{ $name }}</h1>   
@if ( $name !== 'Tuyen' )
<h1>You're admin!</h1>  
@else
<h1>{{$name}}, you're nobody!</h1>   
@endif 
</body>
</html>