@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach ($articles as $article)
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-3">
            <div class="card">
                <img src="{{asset('images/'.$article->image)}}" class="card-img-top" style="
                width: 100%;
                height: 15vw;
                object-fit: cover;" alt="{{$article->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">
                        {{ Str::limit($article->description, 70, '...') }}
                        @if (strlen($article->description) > 70)
                            <a href="{{ Route('articles.show', $article->id) }}">full story</a>
                        @endif
                    </p>
                    <i>Category <a href="{{ Route('articles.category', $article->category_id) }}">{{ $article->category->name }}</a></i>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
