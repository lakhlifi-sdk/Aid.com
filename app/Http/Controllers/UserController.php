<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reponce;
use App\Question;
use Auth;
use DB;
use App\User;

class UserController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
 
   	 public function Update(Request $req,$id){

    	$user=User::find(id);

    	$user->name=$req->input('name');
    	$user->email=$req->input('email');
        $user->password=$req->input('password');
    	if($req->hasFile('photo')){
       $user->photo=$req->photo->store('image');
      }

     

    	$user->user_id=Auth::user()->id;
    	$user->save();

    	session()->flash('session','bien enregistrer');
    	$questions=Question::all();
    	$rep=Reponce::all();

        
    	//return view('question/show',['questions'=>$questions,'rep'=>$rep]);
    	
    	return redirect()->route('singlearticle', array('id' => $req->input('question_id')));


    }

     public function showuser($id){

        $user=User::find($id);
       // $this->authorize('update',$users);

        $countr=Reponce::where('user_id',$id)->count();
        $countq=Question::where('user_id',$id)->count();
        $date= $user->created_at->format('l jS \\of F Y h:i:s A');

      return view("users.showuser",['user'=>$user,'countr'=>$countr,'date'=>$date,'countq'=>$countq]);

   }
   public function edit($id){

        $user=User::find($id);
       // $this->authorize('update',$users);

      return view("users.edit",['user'=>$user]);

   }

     public function destroy($id){
    	$questions=Reponce::find($id);
    	$questions->delete();
    	return redirect('show');

    }
    
   
}
