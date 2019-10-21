<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Author;
use App\Service;
use App\Book;
use App\BorrowHistory;

class DataController extends Controller
{
    public function authors()
    {
        $authors = Author::orderBy('name', 'ASC');

        return datatables()->of($authors)
            ->addColumn('action', 'admin.author.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }

    public function books()
    {
        // unutk mengatasi n+1 di tambahkan with('author)->
        $books = Book::with('author')->orderBy('title', 'ASC');

        return datatables()->of($books)
            ->addColumn('author', function (Book $model) {
                return $model->author->name;
            })
            ->editColumn('cover', function (Book $model) {
                return '<img src="' . $model->getCover() . '" height="150px">';
            })
            ->addColumn('action', 'admin.book.action')
            ->addIndexColumn()
            ->rawColumns(['cover', 'action'])
            ->toJson();
    }

    public function ijins()
    {
        $ijins = Service::orderBy('title', 'ASC');

        return datatables()->of($ijins)
            ->addColumn('action', 'admin.ijin.action')
            ->addIndexColumn()
            ->rawColumns(['cover'])
            ->toJson();
    }

    public function borrows()
    {
        // mengatsi n+1
        $borrows = BorrowHistory::isBorrowed()->latest()->get();

        $borrows->load('user', 'book');

        return datatables()->of($borrows)
            ->addColumn('user', function (BorrowHistory $model) {
                return $model->user->name;
            })
            ->editColumn('book_title', function (BorrowHistory $model) {
                return $model->book->title;
            })
            ->addColumn('action', 'admin.borrow.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }
}
