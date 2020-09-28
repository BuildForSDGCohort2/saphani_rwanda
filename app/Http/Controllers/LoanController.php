<?php

namespace App\Http\Controllers;

use App\Loan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $savings= DB::table('statements')->where('User_id', $id)->latest()->first();

        $loan= DB::table('loans')->where('own_id', $id)->latest()->first();


        $user = User::findOrFail($id);
        return view('admin.Loan',compact('user','savings','loan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $loan  = new Loan();
        $loan->own_id=$request->debt_of;
        $loan->approved_by=Auth::user()->id;
        $loan->Amount=$request->bitsa;
        $loan->Remaining=$request->bitsa +$request->remaining;
        $loan->methodes="-";
        $loan->save();
        Session::flash('message', " Umwenda wabitse neza  ");
        return Redirect::back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function payingloan($id)
    {
        $user = User::findOrFail($id);
        $loan= DB::table('loans')->where('own_id', $id)->latest()->first();
        return view('admin.payloan',compact('user','loan'));

    }
    public function crearloan(Request $request)
    {

        // $image = $request->image;

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);


        $loan  = new Loan();
         $loan->own_id=$request->owner_id;
         $loan->approved_by=Auth::user()->id;
         $loan->payloan=$request->inshyura;
         $loan->proof=$imageName;
         $loan->methodes=$request->method;
         $loan->Remaining=$request->remaining-$request->inshyura;
         $loan->save();
        Session::flash('message', "  Ideni ryishuwe");
        return Redirect::back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        //
    }
}
