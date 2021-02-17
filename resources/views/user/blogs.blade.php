@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <h4 class="mb-4">Blog List</h4>
            @include('layouts.alert')
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-outline-primary float-right" data-toggle="modal" data-target="#create-modal">
                        Create Blog</button>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $blog)
                            <tr>
                                <td>{{ $blog->title }}</td>
                                <td>
                                    <form method="POST" action="{{ route('articles.destroy', [$blog->id]) }}">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" onclick="return confirm('Remove Blog?')"
                                            class="btn btn-outline-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
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
<div class="modal fade" id="create-modal" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
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
                            <select class="form-control" name="category_id" id="category_id">
                                @foreach ($categories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="photo"><b>Photo</b></label>
                            <input type="file" class="form-control" name="photo" accept=".jpg, .png, .jpeg, .gif" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label for="description"><b>Story</b></label>
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
