<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notebook;
use Illuminate\Support\Facades\Auth;

class NotebooksController extends Controller
{
    public function index(){
        $user=Auth::user();
        $ntbk=$user->notebooks;
        return view('notebooks.index',compact('ntbk'));
    }
    public function create(){
        return view('notebooks.create');
    }
    public function store(Request $request){


        $notebook_name=$request->all();
        $user=Auth::user();
        $user->notebooks()->create($notebook_name);
        return redirect('/notebooks');
    }

    public function show($id){
        $notebook=Notebook::findOrFail($id);
        $notun=$notebook->notes;

        return view('notes.index',compact('notun','notebook'));
    }

    public function edit($notebook_id){
        $user=Auth::user();
        $notebook=$user->notebooks()->find($notebook_id);
        return view('notebooks.edit')->with('notebook',$notebook);
    }

    public function update(Request $request, $notebook_id){
        $user=Auth::user();
        $notebook=$user->notebooks->find($notebook_id);
        $notebook->update($request->all());
        return redirect('/notebooks');
    }

    public function delete(Request $request, $notebook_id){
        $user=Auth::user();
        $notebook=$user->notebooks->find($notebook_id);
        $notebook->delete();
        return redirect('/notebooks');
    }
}
