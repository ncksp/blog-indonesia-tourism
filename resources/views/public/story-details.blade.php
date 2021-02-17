@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <h4>{{$article->title}}</h4>
            <div class="card">
                <img src="{{ asset('images/'.$article->image) }}"  class="card-img-top" style="
                width: 100%;
                height: 30vw;
                object-fit: cover;">
                <div class="card-body">
                    <p class="card-text">
                        {{ $article->description }}
                    </p>
                </div>
                <a href="{{ URL::previous() }}" class="btn btn-outline-secondary">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
