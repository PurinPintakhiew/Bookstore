<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    //
    public function addAuthor(){
        return view('addAuthor');
    }

    Public function saveAuthor(Request $request){
        $name = $request->name;
        $email = $request->email;

        $author = new Author();
        $author->author_name = $name;
        $author->email = $email;
        $author->save();

        return back()->with('Author_add','Author record has been save');
    }

    public function author(){
        $author = Author::all(); 
        return view('author',compact('author',$author));
    }

    public function editAuthor($id){
        $author = Author::find($id);
        return view('editAuthor',compact('author',$author));
    }

    Public function updateAuthor(Request $request){
        $name = $request->name;
        $email = $request->email;

        $author = Author::find($request->id);
        $author->author_name = $name;
        $author->email = $email;
        $author->save();

        return back()->with('up','Author record has been update');
    }

    function deleteAuthor($id){
        $author = Author::find($id);
        $author->delete();
        return back()->with('delete','Staff deleted successful');
    }

}
