@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @for ($i = 0; $i < 10; $i++)
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 mb-3">
            <div class="card" style="width: 25rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="http://">Category</a>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection
