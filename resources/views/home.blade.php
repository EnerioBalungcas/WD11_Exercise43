@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        {{Auth::user()->id}}
                    {{-- {{ __('You are logged in!') }} --}}
                      
                    
                    @foreach ($message as $item)
                    <h1>Message #{{$item->id}} </h1>
                        <p>{{$item->msg}}</p>
                        <hr>
                    @endforeach
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Contacts</div>
                <div class="card-body">
                    @foreach ($contacts as $item)
                    <div class="card p-5">
                        <h2>{{$item->contactName}}</h2>
                        <hr>
                        <p>Contact Number: {{$item->contactNum}}</p>
                        <p>Address: {{$item->address}}</p>
                        <a class="btn btn-primary" href="/contacts/{{$item->id}}">Click here for more information</a>
                    </div>

                        
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
