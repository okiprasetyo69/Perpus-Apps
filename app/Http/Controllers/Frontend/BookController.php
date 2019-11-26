<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\BorrowHistory;

class BookController extends Controller
{
    public function index(){
        $title = 'Beranda Perpus';
        $books = Book::paginate(10);
        return view('frontend.book.index',[
            'title' => $title,
            'books' => $books,
        ]);
    }

    public function show(Book $book){
        $title = $book->title;
        return view('frontend.book.show', [
            'title' => $title,
            'book' => $book,
        ]);
    }

    public function borrow(Book $book){

        // BorrowHistory::create([
        //     'user_id' => auth()->id(),
        //     'book_id' => $book->id,
        // ]);
        $user = auth()->user();

        if($user->borrow()->where('books.id', $book->id)->count() > 0 ){
            return redirect()->back()->with('toast', 'Anda sudah meminjam buku dengan judul : ' . $book->title);
        }
        $user->borrow()->attach($book);

        //decrement's syntax minus qty-1
        $book->decrement('qty');

        return redirect()->back()->with('toast', 'Berhasil pinjam buku');
    }
}
