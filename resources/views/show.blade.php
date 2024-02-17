@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <img src="/img/gallery/{{$imageInView}}" class="img-thumbnail gallery-image">
            <!-- <img src="{{ asset('img/gallery/' . $imageInView) }}" class="img-thumbnail gallery-image"> -->

        </div>
    </div>
</div>
@endsection