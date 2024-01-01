<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;


class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        $pengaduan = Pengaduan::where('id_user', auth()->user()->id)->get()->all();
        return view('masyarakat.index', compact('pengaduan') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if($request->hasFile('foto'))
        {
            $destination_path = 'public/images/dokumentasi';
            $image = $request->file('foto');
            $name = $image->getClientOriginalName();
            $path = $request->file('foto')->storeAs($destination_path, $name);
            $input['foto'] = $name;
        }
        
        $now = date('Y-m-d');
        $input['tanggal_pengaduan'] = $now;
        
        Pengaduan::create($input);
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pengaduan = Pengaduan::find($id);
        return view('masyarakat.detail', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }
}
