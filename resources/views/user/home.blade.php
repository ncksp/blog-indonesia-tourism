@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h4>Welcome {{Auth::user()->name}}</h4>
</div>
@endsection
