<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;


class PublisherController extends Controller
{
    //
    public function addPublisher(){
        return view('addPublisher');
    }

    function savePublisher(Request $request){
        $name = $request->publisher;
        $address = $request->address;
        $email = $request->email;
        $tel = $request->tel;

        $publisher = new Publisher();
        $publisher->publisher_name = $name;
        $publisher->addess = $address;
        $publisher->email = $email;
        $publisher->tel = $tel;
        $publisher->save();
        
        return back()->with('Publisher_add','Publisher record has been save');
    }

    public function publisher(){
        $publisher = Publisher::all();
        return view('publisher',compact('publisher',$publisher));
    }

    public function editPublisher($id){
        $publisher = Publisher::find($id);
        return view('editPublisher',compact('publisher',$publisher));
    }

    function upPublisher(Request $request){
        $name = $request->publisher;
        $address = $request->address;
        $email = $request->email;
        $tel = $request->tel;

        $publisher = Publisher::find($request->id);
        $publisher->publisher_name = $name;
        $publisher->addess = $address;
        $publisher->email = $email;
        $publisher->tel = $tel;
        $publisher->save();
        
        return back()->with('up','Publisher record has been up');
    }

    function deletePublisher($id){
        $publisher = Publisher::find($id);
        $publisher->delete();
        return back()->with('delete','Staff deleted successful');
    }
}
