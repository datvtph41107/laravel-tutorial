<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = DB::table('books')->orderBy('created_at', 'desc')->get();
        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        return view('admin.books.create');
    }

    public function store(Request $request)
    {
        DB::table('books')->insert([
            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'thumbnail' => $request->input('thumbnail'),
            'author' => $request->input('author'),
            'publisher' => $request->input('publisher'),
            'publication' => $request->input('publication'),
            'category_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    public function show($id)
    {
        $book = Book::find($id);
        return view('admin.books.show', compact('book'));
    }

    public function edit($id)
    {
        $book = Book::find($id);
        return view('admin.books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        DB::table('books')->where('id', $id)->update([
            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'thumbnail' => $request->input('thumbnail'),
            'author' => $request->input('author'),
            'publisher' => $request->input('publisher'),
            'publication' => $request->input('publication'),
            'updated_at' => now(),
        ]);

        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy($id)
    {
        $deleted = DB::table('books')->where('id', $id)->delete();

        if ($deleted) {
            return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
        } else {
            return redirect()->route('books.index')->with('error', 'Book not found or could not be deleted.');
        }
    }
}
