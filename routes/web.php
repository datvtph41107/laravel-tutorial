<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\BookController as AdminBookController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $booksMax = DB::table('books')->orderBy('price', 'desc')->limit(8)->get();
    $booksMin = DB::table('books')->orderBy('price', 'asc')->limit(8)->get();
    return view('homepage', [
        'booksMax' => $booksMax,
        'booksMin' => $booksMin
    ]);
});
Route::prefix('/category')->group(function () {
    Route::get('/list', [AdminCategoryController::class, 'index']);
});

Route::get('/about', function () {
    return "TRANG GIỚI THIỆU";
})->name('page.about');

Route::view('/contact', 'contact');
Route::get('/product/{id}', function (int $id) {
    return "PRODUCT ID: $id";
});
Route::get(
    '/product/{id}/comment/{comment_id}',
    function ($id, $comment_id) {
        return "Product ID: $id - Comment id: $comment_id";
    }
)->where('id', '[0-9]+');

// Nhóm tiền tố đường dẫn
Route::prefix('admin')->group(function () {
    Route::get('product', function () {
        return "PRODUCT";
    });

    Route::get('/user', function () {
        return "USERS";
    });
});

// Áp dụng query builder
Route::get('/books/{id?}', function (?string $id = null) {
    $books = DB::table('books')
        ->where('category_id', "=", $id)
        ->get();
    $categories = DB::table('categories')
        ->get();
    return view('book-list', [
        'books' => $books,
        'categories' => $categories
    ]);
});

Route::get('/bookDetail/{id}', function (string $id) {
    $book = DB::table('books')->where('id', $id)->first();
    return view('bookdetail', [
        'book' => $book,
    ]);
});

Route::prefix('admin')->group(function () {
    Route::resource('/books', AdminBookController::class);
});
// Route::prefix('admin')->group(function () {
//     Route::get('/books', [AdminBookController::class, 'index'])->name('books.index');
//     Route::get('/books/create', [AdminBookController::class, 'create'])->name('books.create');
//     Route::post('/books', [AdminBookController::class, 'store'])->name('books.store');
//     Route::get('/books/{id}', [AdminBookController::class, 'show'])->name('books.show');
//     Route::get('/books/{id}/edit', [AdminBookController::class, 'edit'])->name('books.edit');
//     Route::put('/books/{id}', [AdminBookController::class, 'update'])->name('books.update');
//     Route::delete('/books/{id}', [AdminBookController::class, 'destroy'])->name('books.destroy');
// });