@extends('layout')

@section('title', 'Edit Book')

@section('content')
<h1>Edit Book</h1>
<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')
    @include('admin._form')
    <button type="submit" class="btn">Update</button>
</form>
@endsection