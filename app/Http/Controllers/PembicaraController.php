<?php

namespace App\Http\Controllers;

use App\Models\Pembicara;
use Illuminate\Http\Request;

class PembicaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pembicara.data-pembicara',[
            'pembicaras' => Pembicara::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembicara.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|file|max:5120',
            'description' => 'required'
            ]);
    
            if($request->file('image')){
                $validateData['image'] = $request->file('image')->store('content-images');
            }
           
         /*    $validateData['description'] = (strip_tags($request->description));
     */
    
          Pembicara::create($validateData);
    
          return redirect('/admin/pembicara')->with('success','New Content has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembicara  $pembicara
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembicara = Pembicara::find($id);
        
        return view('pembicara.detail', ['tittle'=>$pembicara->nama,'pembicara' => $pembicara]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembicara  $pembicara
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembicara = Pembicara::find($id);
        return view('pembicara.edit', ['tittle'=>$pembicara->name,'pembicara' => $pembicara]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembicara  $pembicara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required'
            ]);
    
      /*       $validateData['description'] = (strip_tags($request->description));
 */
        $pembicara = Pembicara::find($id);
        $pembicara->name = $validateData['name'];
        $pembicara->description = $validateData['description'];
        $pembicara->save();

        return redirect('/admin/pembicara')->with('success',  `$pembicara->name has been edited`);
        //dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembicara  $pembicara
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        Pembicara::destroy($id);
        return redirect('/admin/pembicara')->with('success','Post has been deleted');
    }
}
