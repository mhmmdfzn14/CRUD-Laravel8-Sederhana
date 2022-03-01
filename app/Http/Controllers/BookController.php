<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $datas = Book::all();
        return view('book.index',compact('datas'));
    }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        Book::create($request->all());
        return redirect()->route('book.index');
    }

    public function edit($id)
    {
        $data = Book::find($id);
        return view('book.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        Book::find($id)->update($request->all());
        return redirect()->route('book.index');
    }

    public function destroy($id)
    {
        Book::destroy($id);
        return redirect()->route('book.index');
    }
}
