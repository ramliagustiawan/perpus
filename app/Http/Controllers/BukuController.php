<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\BorrowHistory;

class BukuController extends Controller
{

    public function index()
    {
        $books = Book::paginate(10);

        return view('frontend.buku.index', [
            'title' => 'Data Buku',
            'books' => $books
        ]);
    }



    public function show(Book $buku)
    {
        return view('frontend.buku.show', [

            'title' => 'Detail Buku',
            'book' => $buku,

        ]);
    }

    public function borrow(Book $buku)
    {
        // dd($buku);

        BorrowHistory::create([
            'user_id' => auth()->id(),
            'book_id' => $buku->id,
        ]);
        return 'ok';
    }
}
