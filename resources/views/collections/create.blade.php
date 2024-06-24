@extends('adminlte::page')

@section('title', 'Collections')

@section('content_header')
    <h1>Create new collection</h1>
@stop

@section('content')
    <form action="{{ route('collections.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="images" class="form-label">Images</label>
            <input type="file" name="images[]" id="images" class="form-control" multiple>
        </div>
        <button type="submit" class="btn btn-outline-dark">Save</button>
    </form>
@stop

@section('css')

@stop

@section('js')

@stop
