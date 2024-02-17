@extends('layout')

@section('content')
<h1 align="center">My gallery</h1>
<div class="container">
    <div class="row">
        @foreach ($imagesInView as $image)
        <div class="col-md-3 gallery-item">
            <div>
                <img src="/{{$image->image}}" alt="Image" width="250" class="img-thumbnail">
            </div>
            <a href="/show/{{$image->id}}" class="btn btn-info my-button">Show</a>
           
            <a href="/edit/{{$image->id}}" class="btn btn-warning my-button">Edit</a>
            <a href="/delete/{{$image->id}}" onclick="return confirm('are you sure?')" class="btn btn-danger my-button">Delete</a>
        </div>

        @endforeach

    </div>
</div>
@endsection