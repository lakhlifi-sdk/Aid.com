<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Reponce;
use Auth;
use App\User;
use DB;

class QuestionController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
   public function create(){

   	return view('question/create');

    }

    public function store(Request $req){

    	$question= new Question();
    	$questions=Question::all();
    	$rep=Reponce::all();

    	$question->titre=$req->input('titre');
    	$question->contenu=$req->input('contenu');

    	$question->user_id=Auth::user()->id;
        if($req->hasFile('photo')){
       $question->photo=$req->photo->store('image');
      }
    	$question->save();
    	
    	session()->flash('success','votre question a été publier');
    	
    	return redirect()->route('show');
        }

    public function index(){
        $questions=Auth::user()->questions;
      /*$questions=Question::all();*/
      return view('question/index',['questions'=>$questions]);
    }

    public function destroy($id){
    	$question=Question::find($id);
        $this->authorize('delete',$question);
    	$question->delete();
    	return redirect('index');

    }

    public function show(){
    	//$rep=Reponce::all();
        $usr=User::all();
    	$questions=Question::orderBy('created_at','desc')->get();
         $count = DB::table('questions','reponce_id')->count();
        
        
    	return view('question/show',['questions'=>$questions,'count'=>$count,'usr'=>$usr]);
    }

    public function singleArticle($id){
        $question=Question::find($id);
        $count=Reponce::where('question_id',$id)->count();
        $newDateFormat = $question->created_at->format('l jS \\of F Y h:i:s A');

        
       
        return view('question/singlearticle',['question'=>$question,'count'=>$count,'newDateFormat'=>$newDateFormat]);
    }

    public function showusers(){
        $usr=User::all();
        return view('question.show',['usr'=>$usr]);
    }


    
}
