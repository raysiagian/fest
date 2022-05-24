<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
class PhotoController extends Controller
{
    //
    public function create ()
    {
        $data = Photo::Paginate(2);
        return view('upload', ['tittle' => 'News']);
    }
    public function store(Request $request)
    {
        dd($request);
    }
}
