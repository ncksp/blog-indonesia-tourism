@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pantai Kuta, Bali</h5>
                    <img src="{{ asset('images/sampel.jpg') }}" alt="" srcset="">
                    <p class="card-text">
                        {{ 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum sunt accusantium veniam suscipit magnam accusamus dolor harum provident hic nemo! Impedit ducimus velit itaque dignissimos molestias similique quis omnis quam.' }}
                    </p>
                    <a href="{{ URL::previous() }}" class="btn btn-outline-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
