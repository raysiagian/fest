<?php

namespace App\Http\Controllers;
use App\Models\Content;
use Illuminate\Http\Request;

class DashboardContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('data-post',[
            'contents' => Content::all()
        ]);
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* return $request->file('image')->store('content-images'); */
       /*  dd($request->file('image')); */
        $validateData = $request->validate([
        'title' => 'required|max:255',
        'image' => 'image|file|max:5120',
        'video' => 'file|mimes:mp4,mkv',
        'description' => 'required'
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('content-images');
        }
        if($request->file('video')){
            $validateData['video'] = $request->file('video')->store('content-video');
        }

        $validateData['description'] = (strip_tags($request->description));


      Content::create($validateData);

      return redirect('/admin/post')->with('success','New Content has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id )
    {
        $content = Content::find($id);
        
        return view('detail', ['tittle'=>$content->title,'content' => $content]);

        /*return view('data-post',[
            'contents' => Content::all()
            
        ]); */ 
       /*  dd(Content::find($id)); */

        
        //belum bisa menampilkan detail
       /*  return $content; */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $content = Content::find($id);
        return view('edit', ['tittle'=>$content->title,'content' => $content]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $validateData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required'
            ]);
    
            $validateData['description'] = (strip_tags($request->description));

        $content = Content::find($id);
        $content->title = $validateData['title'];
        $content->description = $validateData['description'];
        $content->save();

        return redirect('/admin/post')->with('success',  `$content->title Content has been edited`);
        //dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        Content::destroy($id);
        return redirect('/admin/post')->with('success','Post has been deleted');
    }
}
