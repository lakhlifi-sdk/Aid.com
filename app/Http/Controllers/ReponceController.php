<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reponce;
use App\Question;
use Auth;
use DB;

class ReponceController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
 
   	 public function store(Request $req){

    	$reponce= new Reponce();

    	$reponce->contenu=$req->input('reponce');
    	$reponce->question_id=$req->input('question_id');
    	

    	$reponce->user_id=Auth::user()->id;
    	$reponce->save();

    	session()->flash('session','bien enregistrer');
    	$questions=Question::all();
    	$rep=Reponce::all();

        
    	//return view('question/show',['questions'=>$questions,'rep'=>$rep]);
    	
    	return redirect()->route('singlearticle', array('id' => $req->input('question_id')));


    }

     public function destroy($id){
    	$questions=Reponce::find($id);
    	$questions->delete();
    	return redirect('show');

    }
    
   
}
