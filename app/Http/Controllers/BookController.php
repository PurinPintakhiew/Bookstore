<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\LibraryCard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    //
    public function addBook(){
        return view('addBook');
    }

    function saveBook(Request $request){
        $title = $request->title;
        $category = $request->category;
        $author = $request->Author;
        $publisher = $request->Publisher;
        $date = $request->date;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $book = new Book();
        $book->title = $title;
        $book->images = $imageName;
        $book->category = $category;
        $book->author = $author;
        $book->publisher = $publisher;
        $book->date = $date;
        $book->save();
        
        return back()->with('Book_add','Book record has been save');
    }

    
    public function editBook($id){
        $data = Book::find($id);
        return view('editBook',compact('data',$data));
    }

     function updateBook(Request $request){
        $title = $request->title;
        $category = $request->category;
        $author = $request->Author;
        $publisher = $request->Publisher;
        $date = $request->date;
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('images'),$imageName);

        $book = Book::find($request->id);
        $book->title = $title;
        $book->images = $imageName;
        $book->category = $category;
        $book->author = $author;
        $book->publisher = $publisher;
        $book->date = $date;
        $book->save();
        
        return back()->with('up','Book record has been update');
    }

    function deleteBook($id){
        $data = Book::find($id);
        unlink(public_path('images').'/'.$data->images);
        $data->delete();
        return back()->with('delete','Staff deleted successful');
    }

    public function Manga(){
        $sql = DB::select('select * from books where category = "มังงะ" ');
        return view('Manga',['sql'=>$sql]);
    } 
    
    public function Novel(){
        $sql = DB::select('select * from books where category = "นิยาย" ');
        return view('Novel',['sql'=>$sql]);
    } 
}
