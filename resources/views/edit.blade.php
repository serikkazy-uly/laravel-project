@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h1>Edit image</h1>
            <img src="/img/gallery/{{$imageInView->image}}" alt="" class="img-thumbnail">
            <form action="/update/{{$imageInView->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-control">
                    <input type="file" name="image">
                </div>
                    <button type="submit" class="btn btn-warning">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection