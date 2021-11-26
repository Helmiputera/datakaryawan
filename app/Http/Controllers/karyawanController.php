<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Models\Karyawan as ModelsKaryawan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        // $datas = ModelsKaryawan::all();
        // return view('dashboard.karyawan', compact(
        //     'datas'
        // ));

	// mengambil data dari table users
    $karyawan = DB::table('karyawans')->get();
 
    // mengirim data users ke view index
    return View::make('/dashboard/karyawan')->with('karyawans',$karyawan);
    }

    public function create()
    {
        return View::make('/dashboard/tambahkaryawan');
    }

    public function store(Request $request)
    {
        	// insert data ke table user
		DB::table('karyawans')->insert([
			'nik' => $request->nik,
			'nama' => $request->nama,
			'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
			'jabatan' => $request->jabatan
		]);
		// alihkan halaman ke halaman user
		return redirect('/karyawan');

        
        // $request->validate([
        //     'nik' => 'required',
        //     'nama' => 'required',
        //     'alamat' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'jabatan' => 'required'
        // ]);

        // ModelsKaryawan::create($request->all());

        // $datas = ModelsKaryawan::all();
        // return view('dashboard.karyawan', compact('datas'));
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
        $karyawans = Karyawan::find($id);
        return view('dashboard.editkaryawan', compact('karyawans'));
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
        $karyawans = Karyawan::find($id);
        $karyawans->nik = $request->input('nik');
        $karyawans->nama = $request->input('nama');
        $karyawans->alamat = $request->input('alamat');
        $karyawans->jenis_kelamin = $request->input('jenis_kelamin');
        $karyawans->jabatan = $request->input('jabatan');

        $karyawans->update();
        return redirect('/karyawan');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // menghapus data pegawai berdasarkan id yang dipilih
		DB::table('karyawans')->where('id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
    }
}
