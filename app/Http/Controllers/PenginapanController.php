<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resource\views\form_inap;
use Illuminate\Support\Facades\DB;

class PenginapanController extends Controller
{
    public function penginapan()
    {
        return view ('penginapan');
    }

    public function create()
    {
        return view('form_inap');
    }


    public function store(Request $request)
    {
        $validation = $request->validate([
            'nama_customer' => 'required', 
            'no_telp' => 'required|numeric',
            'email' => 'required|email', 
            'alamat' => 'nullable', 
            'kota'  => 'nullable', 
            'check_in' => 'required', 
            'check_out' => 'required', 
            'tamu' => 'required', 
            'kamar' => 'required', 
            'pesanan' => 'required',
            'pembayaran' => 'required',  
        ], 
        [   'nama_customer.required' => 'Harus diisi!', 
            'no_telp.required' => 'Harus diisi!',
            'no_telp.numeric' => 'Harus mengandung angka',
            'email.required' => 'Harus diisi!',
            'check_in.required' => 'Harus diisi!',
            'check_out.required' => 'Harus diisi!',
            'tamu.required' => 'Harus diisi', 
            'kamar.required' => 'Harus diisi', 
            'pembayaran.required' => 'Harus diisi!',
        ]);
        DB::table('table_db_inap')->insert([
            ['nama_customer' => $request->nama_customer, 'no_telp' => $request->no_telp, 
            'email' => $request->email, 'alamat' => $request->alamat, 'kota' => $request->kota, 'check_in' => $request->check_in, 'check_out' => $request->check_out, 'tamu' => $request->tamu, 'kamar' => $request->kamar, 'pesanan' => $request->pesanan, 'pembayaran' => $request->pembayaran]
        ]);
        // DB::insert('insert into db_inaps(id, nama_customer, no_telp, email, alamat, kota, check_in, check_out, tamu, kamar, pesanan, pembayaran)values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$request->id, $request->nama_customer, $request->input('no_telp'), $request->email, $request->alamat, $request->kota, $request->check_in, $request->check_out, $request->tamu, $request->kamar, $request->pesanan, $request->pembayaran]);

        return Redirect()->back() -> with('message', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
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
    }
}
