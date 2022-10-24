@extends('layout.app')

@section('content')
    <h1>Images</h1>
    <hr>
    @foreach ($imageData as $item)
        <div class="card p-5">
            <p>{{$item->id}}</p>
            <img src="{{'Image/'. $item->Images}}" width="150px">
        </div>
        
    @endforeach
@endsection