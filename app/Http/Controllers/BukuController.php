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
            'title' => 'Beranda Perpustakaan',
            'books' => $books
        ]);
    }



    public function show(Book $buku)
    {
        return view('frontend.buku.show', [

            'title' => $buku->title,
            'book' => $buku,

        ]);
    }

    public function borrow(Book $buku)
    {
        // dd($buku);

        // ini cara 1 sistem pinjam dengan membuat model BorrowHistory
        // BorrowHistory::create([
        //     'user_id' => auth()->id(),
        //     'book_id' => $buku->id,
        // ]);

        // cara 2 dengan Eloquent relationship
        // dengan terlebih dahulu membuat function borrow di model User dan fungsi borrowed di model Book

        $user = auth()->user();

        // pengecekan agar user tidak bisa pinjam buku yang sama lebih dari satu
        if ($user->borrow()->where('books.id', $buku->id)->count() > 0) {
            return redirect()->back()->with('toast', 'Kamu Sudah Meminjam Buku Dengan Judul ini :' . $buku->title);
        }

        $user->borrow()->attach($buku);
        // mengurangi jumlah buku akibat peminjaman
        // fungsi decrement untuk kurang dan decrement untuk tambah
        $buku->decrement('qty');

        return redirect()->back()->with('toast', 'Berhasil Meminjam Buku');
    }
}
