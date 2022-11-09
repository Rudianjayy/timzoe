<?php

namespace App\Http\Controllers;

use App\Models\ekstrakulikulerblog;
use App\Models\ekstrakulikuler;
use Illuminate\Http\Request;

class EkstrakulikulerBlogController extends Controller
{
    public function ekstrakulikulerblog($id)
    {
        $blog =ekstrakulikuler::findOrFail($id);
        $d = ekstrakulikuler::paginate(3);
        $kategori = ekstrakulikuler::all();
        return view('kesiswaan.ekstrakulikuler.ekstrakulikulerblog',compact('d','blog','kategori'));
    }
    public function ekstrakulikulerblogadmin()
    {
        $data = ekstrakulikulerblog::all();
        return view('kesiswaan.ekstrakulikuler.adminekstrakulikulerblog.', compact('data'));
    }
    public function tambahekstrakulikulerblog()
    {
        $judulblog = ekstrakulikuler::all();
        return view('kesiswaan.ekstrakulikuler.adminekstrakulikulerblog.tambahekstrakulikulerblog',compact('judulblog'));
    }

    public function ekstrakulikulerblogproses(Request $request)
    {
        // dd($request->all());
        // $this->validate($request, [
        //     'judul_blog' => 'required',
        //     'foto' => 'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
        //     'deskripsi_blog' => 'required',
        //     'ekstrakulikuler_blog' => 'required',
        //     'kategori_blog' => 'required',
        // ], [
        //     'judul_blog.required' => 'Harus diisi',
        //     'foto.required' => 'Harus diisi',
        //     'foto.mimes' => 'Harus jpg,jpeg,bmp,gif,png,webp',
        //     'deskripsi_blog.required' => 'Harus diisi',
        //     'ekstrakulikuler_blog.required' => 'Harus diisi',
        //     'kategori_blog.required' => 'Harus diisi',

        // ]);
        $data = ekstrakulikulerblog::create([
            'ekstrakulikuler_id' => $request->ekstrakulikuler_id,
            'foto' => $request->foto,
            'deskripsi_blog' => $request->deskripsi_blog,
            'ekstrakulikuler_blog' => $request->ekstrakulikuler_blog,
            'kategori_blog' => $request->kategori_blog,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }


        return redirect()->route('ekstrakulikulerblogadmin')->with('success', ' Data Berhasil di Tambahkan!');
    }

    public function editekstrakulikulerblog($id)
    {

        $data = ekstrakulikulerblog::findOrFail($id);
        return view('kesiswaan.ekstrakulikuler.adminekstrakulikulerblog.editekstrakulikulerblog', compact('data'));
    }

    public function editekstrakulikulerblogproses(Request $request, $id)
    {
        $this->validate($request, [
            'judul_blog' => 'required',
            'deskripsi_blog' => 'required',
            'kategori_blog' => 'required',
            'ekstrakulikuler_blog' => 'required',
            'kategori_blog' => 'required',
        ], [
            'judul_blog.required' => 'Harus diisi',
            'deskripsi_blog.required' => 'Harus diisi',
            'kategori_blog.required' => 'Harus diisi',
            'ekstrakulikuler_blog.required' => 'Harus diisi',
            'kategori_blog.required' => 'Harus diisi',

        ]);
        $data = ekstrakulikulerblog::find($id);
        $data->update([
            'judul_blog' => $request->judul_blog,
            'deskripsi_blog' => $request->deskripsi_blog,
            'kategori_blog' => $request->kategori_blog,
            'ekstrakulikuler_blog' => $request->ekstrakulikuler_blog,
            'kategori_blog' => $request->kategori_blog,
        ]);

        return redirect('ekstrakulikulerblogadmin')->with('success', ' Data Berhasil di Ubah!');
    }

    public function delete($id)
    {
        $data = ekstrakulikulerblog::find($id);
        $data->delete();
        return redirect('ekstrakulikulerblogadmin')->with('success', ' Data Berhasil di Hapus!');
    }
}
