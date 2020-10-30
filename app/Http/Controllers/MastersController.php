<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MastersController extends Controller
{
    public function index(){
        //$scores = Score::orderBy('created_at','desc')->paginate(5);
        //orderBy=並び替え、昇順( asc )と降順( desc )
        //return view('scores.index',['scores' => $scores]);
        return view('masters.index');
      }
}
