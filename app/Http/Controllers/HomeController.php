<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Yukabsen;
use App\userr;
use App\Doc;
use App\Foto;
use File;
use Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Yukabsen::all();
        $datadoc = Doc::all();
        $dataimg = Foto::all();
        return view('adm/index', compact('data','datadoc','dataimg'));
    }

    // ADD 
    public function add()
    {
        return view('adm/add');
    }
    public function tambahken(Request $request)
    {
        $data = Yukabsen::create($request->all());
        return redirect('admin')->with('Kirim', 'Data Sukses Dikirim');
    }
    public function hapus(Request $request,$id)
    {
        $data = Yukabsen::findOrFail($id);
        $data->delete($request->all());
        return redirect('admin')->with('hapus', 'Data Telah Di Hapus');
    }
    public function edit(Request $request,$id)
    {
            $data = Yukabsen::findOrFail($id);
            return view('adm/edit', compact('data'));
    }
    public function apdet(Request $request,$id)
    {
        $data = Yukabsen::findOrFail($id);
        $data->update($request->all());

        return redirect('admin')->with('Edit', 'Data Sukses Di Edit');
    }
    //END ADD
    //


    public function dokumen()
    {
        return view('adm/dokumen');
    }
    public function foto()
    {
        return view('adm/gambar');
    }
}
