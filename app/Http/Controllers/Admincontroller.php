<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Groups;
use App\Statement;
use App\User;
use App\Village;
use Facade\IgnitionContracts\Solution;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class Admincontroller extends Controller
{
    //
    public function dashboard(Request $request){

        $user=Auth::user()->user_type;
        if ( $user=='Auther') {
                return redirect('/home');
        }elseif ($user=='Super'||'Province'||'District'||'Sector'||'Cell'||'Group') {
            return view('admin.index');
        }else{
            return redirect('/');
        }
    }

    public function Group(Request $request){
     return view('admin.groups');
    }
    public function registerGroups(Request $request){
        $Group =new Groups();
        $Group->Village=$request->get('Village');
        $Group->name=$request->get('Ikibina');
        $Group->Groups="1";
        $Group->Created_By=Auth::user()->id;
        $Group->save();
        Session::flash('message', "Group Created successfull/group ya konzweneza  murakoze");
            return Redirect::back();
    }

    public function Saving(Request $request){
        return view('admin.Cashbook');
    }
     public function members(Request $request){
         $member=User::all();

         $Solution=array();
         foreach ( $member as $key => $value) {
             $id=$value->Group_id;
             $Group=array();
            $Group= DB::table('groups')->where('id', $id)->get();
            foreach ( $Group as $key => $value) {
                $Solution[]= $value->name;
            }

         }
        return view('admin.members',compact('member','Solution'));
    }
    public function membersavings(Request $request,$id){
        $userinformation = User::findOrFail($id);
        $Groups=$userinformation->Group_id;
        $Group = DB::table('groups')->where('id', $Groups)->get();
        $statement = DB::table('statements')->where('User_id', $id)->latest()->first();
        foreach ( $Group as $key => $value) {
            $Itsindaname=$value;
        }

            return view('admin.membersavings',compact('userinformation','Itsindaname','statement'));

    }

    public function Savingprocess(Request $request){
        $newbalance=$request->get('bitsa');
        $current=$request->get('tatabal');
        $totalcurrent=$newbalance+$current;
        $statement = new Statement();
        $statement->User_id=$request->get('User_id');
        $statement->Action_by=Auth::user()->id;
        $statement->Deposited=$request->get('bitsa');
        $statement->Wesdrow='0';
        $statement->Loan=$request->get('loan');
        $statement->Total= $totalcurrent;
        $statement->Group_id=$request->get('Group_id');
        $statement->save();
        Session::flash('message', "mwabikije neza ");
        return Redirect::back();
    }

    public function profite(){
        $user =Auth::user()->Group_id;
        $Group=Groups::findOrFail($user);
        $Village=Village::findOrFail($Group->Village);

        $purchases = DB::table('statements')->where('Group_id', '=', $user)->sum('Total');


        return view('admin.sumofsavings',compact('Group','Village','purchases'));
    }
    public function profile(){
        return view('admin.profile');
    }
    public function Updateprofile(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        // delete image in the folder
        $image_path = $request->oldimage;
        $imgWillDelete = public_path() . '/images/'.$image_path;
        File::delete($imgWillDelete);
        $name=$request->name;
        $phone=$request->phone;
        $image=$imageName;
        // end of delete in folder
        // updating user data
        DB::table('users') ->where('id',Auth::user()->id) ->update(['name' =>$name,'phone' =>$phone,'image' =>$image ]);

        Session::flash('message', "updated success full");
        return Redirect::back();
    }
    public function Investiment()
    {
        $statement = Statement::where('User_id',Auth::user()->id)->get();
        

       return view('Home.Investiment',compact('statement'));
    }
}
