@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Blog List</h5>
                        <button class="btn btn-outline-primary my-2" data-toggle="modal" data-target="#create-modal">+
                            Create Blog</button>
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < 10; $i++)
                                    <tr>
                                        <td>{{ 'Ahmad Laravel' }}</td>
                                        <td>
                                            <button class="btn btn-outline-danger">Delete</button>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col">
                                <label for="title"><b>Title</b></label>
                                <input type="text" class="form-control" name="title" placeholder="Enter Title" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="category"><b>Category</b></label>
                                <select class="form-control" name="category" id="category">
                                    <option value="1">Beach</option>
                                    <option value="2">Mountain</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="photo"><b>Photo</b></label>
                                <input type="file" class="form-control" name="photo" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <label for="story"><b>Story</b></label>
                                <textarea class="form-control" name="story" id="story" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
