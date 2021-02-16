@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @for ($i = 0; $i < 10; $i++)
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-3">
            <div class="card w-75">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">
                        {{ Str::limit('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam blanditiis, animi hic ex autem maiores delectus eos officia. Dolores architecto, nam officia qui eligendi eveniet delectus blanditiis accusantium fuga error.', 70, '...') }}
                        @if (strlen('Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam blanditiis, animi hic ex autem maiores delectus eos officia. Dolores architecto, nam officia qui eligendi eveniet delectus blanditiis accusantium fuga error.') > 70)
                            <a href="{{ Route('story.details') }}">full story</a>
                        @endif
                    </p>
                    <i>Category <a href="{{ Route('story.category') }}">{{ 'Beach' }}</a></i>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection
