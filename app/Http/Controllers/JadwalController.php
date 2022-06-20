<?php

namespace App\Http\Controllers;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jadwal.data-jadwal',[
            'jadwals' => Jadwal::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwal.create');
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
            'date' => 'required',
            'description' => 'required'
            ]);
           
         /*    $validateData['description'] = (strip_tags($request->description));
     */
    
          Jadwal::create($validateData);
    
          return redirect('/admin/jadwal')->with('success','New Jadwal has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadwal = Jadwal::find($id);
        
        return view('jadwal.detail', ['tittle'=>$jadwal->nama,'jadwal' => $jadwal]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = Jadwal::find($id);
        return view('jadwal.edit', ['tittle'=>$jadwal->name,'jadwal' => $jadwal]);
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
            'name' => 'required|max:255',
            'date' => 'required',
            'description' => 'required'
            ]);
    
            /* $validateData['description'] = (strip_tags($request->description));
 */
        $jadwal = Jadwal::find($id);
        $jadwal->name = $validateData['name'];
        $jadwal->date = $validateData['date'];
        $jadwal->description = $validateData['description'];
        $jadwal->save();

        return redirect('/admin/jadwal')->with('success',  `$jadwal->name has been edited`);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jadwal::destroy($id);
        return redirect('/admin/jadwal')->with('success','jadwal has been deleted');
    }
}
