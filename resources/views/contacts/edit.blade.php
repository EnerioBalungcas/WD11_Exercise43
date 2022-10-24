@extends('layout.app')

@section('content')
    <div>
        <h1>Edit Form</h1>
        <form action="/contacts/{{$contact->id}}" method="post">
            {!! csrf_field()!!} {{-- //cross site request portgeres --}}
            @method("PATCH"); {{-- //PATCH OR PUT; PUT will change all the data --}}
            <input type="hidden" class="form-control" name="id" value="{{$contact->id}}">
            <br>
            <label for="contactName">Contact Name:</label>
            <input type="text" class="form-control" name="contactName" value="{{$contact->contactName}}">
            <br>
            <label for="contactNum">Contact Number:</label>
            <input type="text" class="form-control" name="contactNum" value="{{$contact->contactNum}}">
            <br>
            <label for="address">Addre:</label>
            <input type="text" class="form-control" name="address" value="{{$contact->address}}">
            <br>
            <input type="submit" class="btn btn-primary w-100" value="Edit Information">

        </form>

    </div>
@endsection