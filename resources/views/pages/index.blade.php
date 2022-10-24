@extends('layout.app')

@section('content')

<h2>This is the Index Page {{config('app.env', 'Default Value')}}</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam in voluptatibus ducimus laborum aspernatur voluptatum vero odit similique porro consequatur rerum ullam, veritatis aliquam. Minima cumque reiciendis qui quasi architecto!</p>

@endsection

{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name', 'Default Value')}}</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('build/assets/app.css')}}" rel="stylesheet">

</head>
<body>
    <h2>This is the Index Page {{config('app.env', 'Default Value')}}</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam in voluptatibus ducimus laborum aspernatur voluptatum vero odit similique porro consequatur rerum ullam, veritatis aliquam. Minima cumque reiciendis qui quasi architecto!</p>

    <button type="button" class="btn btn-primary" style="border: solid black; border-radius:10px"> Primary Button</button>
    <button type="button" class="btn btn-secondary" style="border: solid black; border-radius:10px"> Secondary Button</button>
    <button type="button" class="btn btn-success" style="border: solid black; border-radius:10px"> Success Button</button>
    <button type="button" class="btn btn-danger" style="border: solid black; border-radius:10px"> Danger Button</button>
    <button type="button" class="btn btn-warning" style="border: solid black; border-radius:10px"> Warning Button</button>
    <button type="button" class="btn btn-info" style="border: solid black; border-radius:10px"> Info Button</button>
    <button type="button" class="btn btn-light" style="border: solid black; border-radius:10px"> Light Button</button>
    <button type="button" class="btn btn-dark" style="border: solid black; border-radius:10px"> Dark Button</button>

    <button type="button" class="btn btn-link"> Link</button>
</body>
</html> --}}