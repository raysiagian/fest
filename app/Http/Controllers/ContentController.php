<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
class ContentController extends Controller
{
    //
  public function index()
    {   
        $data = Content::paginate(2);
        //dd($data);
        return view('content',['data'=>$data]);
        
    } 
}
