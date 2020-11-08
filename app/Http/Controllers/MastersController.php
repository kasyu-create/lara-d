<?php

namespace App\Http\Controllers;
use App\Master;
use App\Tag;
use Image;
use DB;
use Illuminate\Http\Request;

class MastersController extends Controller
{
    public function index(){
      $masters = Master::all()->sortByDesc('created_at');
      return view('masters.index', ['masters' => $masters]);
      }
      public function create(){
        // $tags = Tag::all();
        $tags = DB::table('tags')->pluck('tagname');
        return view('masters.create', ['tags' => $tags]);
      }
      public function store(Request $request){
        $params = $request->validate([
          'tags_id'=>'required',
          'name'=>'required',
          'career'=>'required'
      ]);
        Master::create($params);
        return redirect()->route('top');
      }
}
