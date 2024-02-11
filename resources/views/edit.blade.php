@extends('layout')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                <h1>Edit image</h1>
                <img src="/img/gallery/1.jpg" alt="" class="img-thumbnail">
                <form action="" method="post">
                    <div class="form-control">
                        <input type="file">
                            
                        </input>
                        <button type="submit" class="btn btn-warning">Edit</button>
                    </div>
                </form>  

                </div>
            </div>
        </div>
@endsection