@extends('layout')

@section('title', 'Trang danh sach bai viet')

@section('content')
<h1>HOME PAGE</h1>
<div class="book-section">
    <h2>Most expensive books</h2>
    <hr>
    @foreach ($booksMax as $book)
    <div class="book-item">
        <a href="{{ url('/bookDetail/' . $book->id) }}">
            <div>Name: {{ $book->title }}</div>
        </a>
        <span>Price: {{ $book->price }}</span>
    </div>
    @endforeach
</div>
<div class="book-section">
    <h2>Cheapest books</h2>
    <hr>
    @foreach ($booksMin as $book)
    <div class="book-item">
        <a href="{{ url('/bookDetail/' . $book->id) }}">
            <div>Name: {{ $book->title }}</div>
        </a>
        <span>Price: {{ $book->price }}</span>
    </div>
    @endforeach
</div>
@endsection