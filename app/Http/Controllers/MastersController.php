<?php

namespace App\Http\Controllers;
use App\Master;
use Image;

use Illuminate\Http\Request;

class MastersController extends Controller
{
    public function index(){
      $masters = Master::all()->sortByDesc('created_at');
      return view('masters.index', ['masters' => $masters]);
      }
}
