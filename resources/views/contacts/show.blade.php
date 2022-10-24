@extends('layout.app')

@section('content')
    <h1>{{$contact->contactName}}</h1>
    <hr>
    <div class = "card p-5">
        <p><b>Contact Number:</b>{{$contact->contactNum}}</p>
        <p><b>Address:</b>{{$contact->address}}</p>
        <p><b>Account Created:</b>{{$contact->created_at}}</p>
        <a class="btn btn-primary" href="/contacts/{{$contact->id}}/edit">Edit</a>
        <br>
        
        <form action="/contacts/{{$contact->id}}" method="post">
            {{method_field('DELETE')}}
            {!! csrf_field()!!}
            <input class="btn btn-danger w-100" type="submit" value="Delete">
        </form>
    </div>
@endsection