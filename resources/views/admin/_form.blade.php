<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $book->title ?? '') }}">
</div>
<div class="form-group">
    <label for="price">Price</label>
    <input type="text" name="price" class="form-control" id="price" value="{{ old('price', $book->price ?? '') }}">
</div>
<div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="text" name="quantity" class="form-control" id="quantity" value="{{ old('quantity', $book->quantity ?? '') }}">
</div>
<div class="form-group">
    <label for="thumbnail">Thumbnail URL</label>
    <input type="text" name="thumbnail" class="form-control" id="thumbnail" value="{{ old('thumbnail', $book->thumbnail ?? '') }}">
</div>
<div class="form-group">
    <label for="author">Author</label>
    <input type="text" name="author" class="form-control" id="author" value="{{ old('author', $book->author ?? '') }}">
</div>
<div class="form-group">
    <label for="publisher">Publisher</label>
    <input type="text" name="publisher" class="form-control" id="publisher" value="{{ old('publisher', $book->publisher ?? '') }}">
</div>
<div class="form-group">
    <label for="publication">Publication Date</label>
    <input type="date" name="publication" class="form-control" id="publication" value="{{ old('publication', $book->publication ?? '') }}">
</div>