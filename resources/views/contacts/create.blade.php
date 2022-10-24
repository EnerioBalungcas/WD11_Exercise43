
@extends('layout.app')

@section('content')
    <div>
        <h1>Create Form</h1>
        <hr>
        <div class="card p-5">
            <form action="/contacts/" method="post">
                {!! csrf_field() !!}
                <label style="font-weight: bold">Contact Name</label>
                <input type="text" class="form-control" name="contactName">
                <br>
                <label style="font-weight: bold">Contact Number</label>
                <input type="text" class="form-control" name="contactNum">
                <br>
                <label style="font-weight: bold">Address</label>
                <input type="text" class="form-control" name="address">
                <br>
                <input type="submit" class="btn btn-primary w-100" value="Create Contact">
                <br>
            </form>
        </div>
    </div>
@endsection