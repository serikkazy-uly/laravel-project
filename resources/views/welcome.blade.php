@extends('layout')

@section('content')
<h1 align="center">My gallery</h1>
<div class="container">
    <div class="row">

        <div class="col-md-3 gallery-item">
        <div>
            <img src="/img/gallery/1.jpg" alt="" width="250" class="img-thumbnail">
        </div>
            <a href="/show" class="btn btn-info my-button">Show</a>
            <a href="/edit" class="btn btn-warning my-button">Edit</a>
            <a href="#" class="btn btn-danger my-button">Delete</a>
        </div>
       

    </div>
</div>
@endsection