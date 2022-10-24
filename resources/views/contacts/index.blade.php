@extends('layout.app')

@section('content')
    {{-- {{$contacts}} --}}
    <h1>Contacts List</h1>
    <a class="btn btn-primary" href="/contacts/create">Create New Contact</a>
    <hr><hr>
    @foreach ($contacts as $item)
        <div class="card p-5">
            <h2>{{$item->contactName}}</h2>
            <hr>
            <p>Contact Number: {{$item->contactNum}} </p>
            <p>Address: {{$item->address}} </p>
            <a class="btn btn-primary" href="/contacts/{{$item->id}}">Click here for more information</a>
        </div>
        <br>
        {{-- <div>
            {{$contacts->links()}}
        </div> --}}
    @endforeach
    <div>
        {{$contacts->links()}}
    </div>
@endsection