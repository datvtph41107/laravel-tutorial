@extends('layout')

@section('title', 'Book Detail')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Book Detail #{{ $book->id }}</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ $book->thumbnail }}" class="card-img-top" style="height: 300px; object-fit: cover;" alt="{{ $book->title }}">
                <div class="card-body text-center">
                    <h3 class="card-title">{{ $book->title }}</h3>
                    <p class="card-text"><strong>Price:</strong> {{ $book->price }}</p>
                    <p class="card-text"><strong>Quantity:</strong> {{ $book->quantity }}</p>
                    <p class="card-text"><strong>Author:</strong> {{ $book->author }}</p>
                    <p class="card-text"><strong>Publisher:</strong> {{ $book->publisher }}</p>
                    <p class="card-text"><strong>Publication:</strong> {{ $book->publication }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <!-- Additional details or related content can go here -->
        </div>
    </div>
    <hr>
    <a href="{{ url('/books') }}" class="btn btn-primary">Back to Book List</a>
</div>
@endsection