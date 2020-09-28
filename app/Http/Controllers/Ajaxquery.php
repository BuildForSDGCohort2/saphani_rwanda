<?php

namespace App\Http\Controllers;

use App\Cell;
use Illuminate\Http\Request;
use App\District;
use App\Sector;
use App\Groups;
use App\Village;

class Ajaxquery extends Controller
{
    public function districts(Request $request){
        $value= $request->get('provinces');
        $users = District::where('province',$value)->get();
               return response()->json($users);
    }

    public function sector(Request $request){
        $value= $request->get('District');
        $users = Sector::where('district',$value)->get();
               return response()->json( $users);
    }
    public function Cell(Request $request){
        $value= $request->get('sector');
        $users = Cell::where('sector',$value)->get();
               return response()->json( $users);
    }
    public function Village(Request $request){
        $value= $request->get('Cell');
        $users = Village::where('Cell',$value)->get();
               return response()->json( $users);
    }
public function Itsinda(Request $request){
    $value= $request->get('village');
    $users = Groups::where('Village',$value)->get();
           return response()->json( $users);
}

}
