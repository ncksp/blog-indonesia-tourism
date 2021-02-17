@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="">
                <div class="card-body">
                    <p class="card-text">
                        Welcome to Indonesia Tourism, your number one source for all things. We're dedicated to giving you the very best of story, with a focus on accuracy, honesty, and courtesy.
                    </p>

                    <p class="card-text">
                        We hope you enjoy our products as much as we enjoy offering them to you. If you
                        have
                        any questions or comments, please don't hesitate to contact [me/us].
                    </p>
                    <p class="card-text">
                        Sincerely,

                        UAS WEBPROG BINUS
                    </p>
                </div>
                <a href="{{ route('welcome') }}" class="float-right btn btn-outline-secondary">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
