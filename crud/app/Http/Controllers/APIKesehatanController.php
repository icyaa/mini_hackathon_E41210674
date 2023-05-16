<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Response;

class APIKesehatanController extends Controller
{
    //function untuk read seluruh data pada database
    public function getAll(){
        $data = users::all();
        return Response::json($data, 201);
    }

    //function untuk tambah data
    public function add(Request $request){
        users::create($request->all());

        return response()->json([
            'status' => 'OK',
            'message' => 'Berhasil Menambahkan Data'
        ], 201);
    }


    //function untuk edit data berdasarkan id
    public function update($id, Request $request){
        users::find($id)->update($request->all());

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Berhasil Diubah'
        ], 201);
    }
    
    //function untuk hapus data berdasarkan id
    public function delete($id){
        users::destroy($id);

        return response()->json([
            'status' => 'OK',
            'message' => 'Data Berhasil Dihapus'
        ], 201);
    }
}
