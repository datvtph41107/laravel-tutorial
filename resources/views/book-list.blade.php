@extends('layout')

@section('title', 'Book List')

@section('content')
<h1 class="text-center mb-4">Book List</h1>

<!-- Category Links -->
<div class="category-section">
    <h2>Categories</h2>
    <ul>
        @foreach ($categories as $category)
        <li class="category-item">
            <a href="{{ url('/books/' . $category->id) }}">{{ $category->name }}</a>
        </li>
        @endforeach
    </ul>
</div>

<!-- Books List -->
<div>
    <h2 class="mb-3">Books</h2>
    @if ($books->isEmpty())
    <p class="alert alert-warning">No books found for this category.</p>
    @else
    <div class="book-grid">
        @foreach ($books as $book)
        <div class="book-item">
            <a href="{{ url('/bookDetail/' . $book->id) }}">
                <div>Name: {{ $book->title }}</div>
                <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}">
            </a>
            <div>Price: {{ $book->price }}</div>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection