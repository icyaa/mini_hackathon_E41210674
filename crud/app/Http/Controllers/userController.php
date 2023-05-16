<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    // read data database
    public function index()
    {
        //mendapatkan seluruh data pada database di table data
        $data = users::all();
        //menampilkan view table berisi data tersebut
        return view('master', compact('data'));
    }

    // add data database
    public function add(Request $request)
    {
        //cek field inputan, semua field harus diisi
        $this->validate($request, [
            'id' => 'required| max:16|min:16',              //harus diisi dg max dan min lenght 16
            'nama' => 'required',                           //harus diisi
            'no_hp' => 'required|min:12|numeric',           //harus diisi hanya dengan angka dg min lenght 12
            'alamat' => 'required',                         //harus diisi
            'poli' => 'required',                           //harus diisi  
            'pic' => 'required|mimes:png,jpg,jpeg'          //harus diisi dg format hanya png, jpg atau jpeg
        ], [
            //jika tidak, ada peringatan sbg berikut
            'required' => 'Field Wajib Diisi!'
        ]);       

        //mendapatkan value dari file yang diupload
        $file = $request->file('pic');

        //memasukkan file dg nama
        $fileName = 'pdf_'.time().'.'.$file->extension();
        //file tsb masuk ke dalam folder dataImage
        $file->move(public_path('/dataImage'), $fileName);

        //menambahkan data ke dalam database
        users::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'poli' => $request->poli,
            'no_hp' => $request->no_hp,
            'pic' => $fileName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        //jika sudah kembali ke view table
        return redirect('/crud');
    }



    public function edit($id)
    {
        //mencari user id data yg dipilih
        $data = users::find($id);
        //menampilkan halaman edit dg data yg dipilih
        return view('form_edit', compact('data'));
    }
    // edit data database
    public function update(Request $request, $id)
    {
        //Form Validation
        $validator = Validator::make($request->all(), [
            'edit_nama' => 'required',
            'edit_alamat' => 'required',
            'edit_poli' => 'required',
            'edit_no_hp' =>'required|min:12'
        ], [
            'required' => 'Field wajib diisi!'
        ]);

        $data = users::find($id);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with(['update' => 'error update']);
        }

        //masukkan hasil input ke database
        $data->nama = $request->get('edit_nama');
        $data->poli = $request->get('edit_poli');
        $data->no_hp = $request->get('edit_no_hp');
        $data->alamat = $request->get('edit_alamat');
        $data->updated_at = Carbon::now();

        $data->save(); //simpan
        return redirect('/crud'); //kembali ke view table
    }


    // hapus data database
    public function delete($kode, Request $request){

    if ($request->has('token')) {
        if ($request->token === $request->session()->token()) {
            $request->session()->regenerateToken();
            $data = users::find($kode);
            users::find($kode)->delete();  
            return redirect('/crud');
        } else {
            return redirect('/crud');
        }
    } 
    else {
        return redirect('/crud');
    }
    }

}
