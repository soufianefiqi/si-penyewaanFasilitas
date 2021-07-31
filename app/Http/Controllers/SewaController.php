<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SewaController extends Controller
{

    public function sewa()
    {
        return view('sewa');
    }

    public function create()
    {
        return view('form_sewa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'nama_customer' => 'required', 
            'no_telp' => 'required|numeric',
            'email' => 'required|email', 
            'alamat' => 'nullable', 
            'kota'  => 'nullable', 
            'add_request' => 'nullable', 
            'check_in' => 'required', 
            'check_out' => 'required', 
            'pesanan' => 'required',
            'pembayaran' => 'required',  
        ], 
        [   'nama_customer.required' => 'Harus diisi!', 
            'no_telp.required' => 'Harus diisi!',
            'no_telp.numeric' => 'Harus mengandung angka',
            'email.required' => 'Harus diisi!',
            'check_in.required' => 'Harus diisi!',
            'check_out.required' => 'Harus diisi!',
            'pembayaran.required' => 'Harus diisi!',
        ]);
        DB::table('table_db_sewa')->insert([
            ['nama_customer' => $request->nama_customer, 'no_telp' => $request->no_telp, 
            'email' => $request->email, 'alamat' => $request->alamat, 'kota' => $request->kota,   'check_in' => $request->check_in, 'check_out' => $request->check_out, 'pesanan' => $request->pesanan, 'add_request' => $request->add_request,'pembayaran' => $request->pembayaran]
        ]);
        // $subject = "Contact dari " . $request->input('nama_customer');
        // $name = $request-> input('nama_customer');
        // $email = $request-> input('email');
        // $message = $request-> input('message');
        
        // $mail = new PHPMailer(true);
        // try{
        //     $mail->isSMTP();
        //     $mail->Host = 'smtp.mail.yahoo.com';
        //     $mail->SMTPAuth = 'true';
        //     $mail->Username = 'NICT.official@uinjkt.ac.id'
        //     $mail->SMTPSecure = 'tls';
        //     $mail->port = 587;
        // }
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
