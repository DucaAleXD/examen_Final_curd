@extends('adminlte::page')

@section('title', 'Collections')

@section('content_header')
    <h1>Create new collection</h1>
@stop

@section('content')
   <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="{{ $contact->name }}">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" value="{{ $contact->email }}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>


@stop

@section('css')

@stop

@section('js')

@stop
