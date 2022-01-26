<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\LibraryCard;
use App\Models\User;
use App\Models\Book;

class libraryController extends Controller
{
    public function selectBook($id){
        $data = Book::find($id);
        // $user = User::find($id);
        return view('selectBook',compact('data',$data));
    }

    public function seveLic2(Request $request){

        $iu = $request->iduser;
        $idB = $request->idBook;
        $date = $request->date;
        $redate = $request->redate;

        $lc = new LibraryCard();
        $lc->cus_name = $iu;
        $lc->ID_Book = $idB;
        $lc->Borrowed_date = $date;
        $lc->Return_date = $redate;
        $lc->save();

        return back()->with('select','คุณได้ทำการยืมหนังสือแล้ว');
    }

    public function library(){
        $library = LibraryCard::all();
        return view('library',compact('library',$library));
    }

    function deleteLB($id){
        $publisher = LibraryCard::find($id);
        $publisher->delete();
        return back()->with('delete','deleted successful');
    }

    public function generate($id){
        $library = LibraryCard::find($id);
        $pdf = App::make('dompdf.wrapper');
        $html = view('pdf',compact('library',$library))->render();
        $pdf->loadHTML($html);
        return $pdf->stream();
        }

}
