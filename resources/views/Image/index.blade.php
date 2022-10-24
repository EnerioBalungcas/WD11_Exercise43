@extends('layout.app')

@section('content')
    <h1>Add Image</h1>
    <div class="card p-5">
        <form action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" class="form-control" name="Images" id="Images">
            <br>
            <input type="submit" class="btn btn-primary w-100" value="Add">
        </form>
    </div>
@endsection