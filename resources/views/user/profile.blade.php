@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            @include('layouts.alert')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Profile</h5>
                    <form action="{{ Route('update.profile') }}" method="post">
                        @csrf
                        @method('PUT')
                        <input class="form-control" type="hidden" name="id" value="{{ Auth::user()->id }}" required>
                        <div class="form-group row">
                            <div class="col">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" value="{{ Auth::user()->name }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" value="{{ Auth::user()->email }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="phone">Phone</label>
                                <input class="form-control" type="text" name="phone" value="{{ Auth::user()->phone }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="float-right btn btn-outline-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
