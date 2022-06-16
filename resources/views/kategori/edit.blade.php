@extends('layouts.architectui')

@section('title')
    Add New Supplier
@endsection

@section('content')
<form method="POST" action="{{ url('kategori/'.$data->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="inputName">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}" placeholder="Enter Name">
    </div>
    <div class="form-group">
        <label for="inputAddress">Description</label>
        <textarea type="text" class="form-control" id="decription" name="description" placeholder="Enter description">{{ $data->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-secondary">Cancel</button>
</form>
@endsection