<?php

namespace App\Http\Controllers;

use App\Models\Tanggapan;
use App\Models\User;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengaduan = Pengaduan::all();
        return view('tanggapan.index', compact('pengaduan'));
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
        $now = date('Y-m-d');
        $input['tanggal_tanggapan'] = $now;

        Tanggapan::create($input);
        $pengaduan = Pengaduan::find($request->id_pengaduan);
        $pengaduan->status = 'diproses';
        $pengaduan->save();
        return back();

    
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pengaduan = Pengaduan::find($id);
        return view('tanggapan.detail', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tanggapan $tanggapan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tanggapan $tanggapan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tanggapan $tanggapan)
    {
        //
    }
}
