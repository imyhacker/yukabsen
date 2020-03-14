<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Carbon\Carbon;
use App\Doc;
use App\Foto;
use DB;
class DocController extends Controller
{
    //
    public function upload(Request $request){
        request()->validate([
            'FileUpload' => 'required|mimes:docx,pptx,txt,xlsx,pdf|max:200',
       ]);
        if($request->hasFile('FileUpload')){
            $resorce = $request->file('FileUpload');
            $name = $resorce->getClientOriginalName() . ' | Upload At [' .Carbon::now()->format('Y-m-d | H:i:s'). ']';  
            $resorce->move(\base_path() ."/public/doc", $name);
            $save = DB::table('doc')->insert(['dokumen' => $name]);
        
            return redirect('/admin')->with('dokumen', 'Dokumen Berhasil Di Kirim!');

        }
    }
    public function foto(Request $request){
        request()->validate([
            'FileUpload' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:100',
       ]);
        if($request->hasFile('FileUpload')){
            $resorce = $request->file('FileUpload');
            $name = $resorce->getClientOriginalName() . ' | Upload At [' .Carbon::now()->format('Y-m-d | H:i:s'). ']';  
            $resorce->move(\base_path() ."/public/image", $name);
            $save = DB::table('foto')->insert(['image' => $name]);
        
            return redirect('/admin')->with('foto', 'Foto Berhasil Di Kirim!');
            						 
        }
    }

    public function download($doc)
    {
        return response()->download(public_path("doc/{$doc}"));
    }
    public function hapus(Request $request,$id)
    {
        $data = Doc::findOrFail($id);
        $data->delete($request->all());
        return redirect('admin')->with('hapus', 'Data Telah Di Hapus');
    }
    public function fotodownload($foto)
    {
        return response()->download(public_path("image/{$foto}"));
    }
    public function fotohapus(Request $request,$id)
    {
        $data = Foto::findOrFail($id);
        $data->delete($request->all());
        return redirect('admin')->with('hapus', 'Data Telah Di Hapus');
    }
}
