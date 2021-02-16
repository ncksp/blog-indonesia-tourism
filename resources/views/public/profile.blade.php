@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Profile</h5>
                        <form action="{{ Route('home') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <div class="col">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name" value="{{ '' }}"
                                        required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" name="email" value="{{ '' }}"
                                        required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <label for="phone">Phone</label>
                                    <input class="form-control" type="text" name="phone" value="{{ '' }}"
                                        required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-outline-secondary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
