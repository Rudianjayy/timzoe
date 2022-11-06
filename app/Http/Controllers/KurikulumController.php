<?php

namespace App\Http\Controllers;

use App\Models\footeer;
use App\Models\Jurusan;
use App\Models\Muhinews;
use App\Models\kurikulum;
use App\Models\Footeerdua;
use Illuminate\Http\Request;
use App\Models\jadwalkegiatan;
use App\Models\Suratkelulusan;
use PhpOffice\PhpWord\PhpWord;
use App\Models\Personaljurusan;
use App\Exports\KelulusanExport;
use App\Models\kalenderakademik;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpWord\Writer\Word2007;
use Barryvdh\DomPDF\Facade\Pdf;
class KurikulumController extends Controller
{

    public function kalenderakademik()
    {
        $d = kalenderakademik::all();
        $f = Muhinews::all();
        $ft = footeer::all();
        $personal = Personaljurusan::all();
        $logo = footeer::all();
        $link = footeerdua::all();
        return view('kurikulum.kalenderakademik', compact('d', 'f', 'ft', 'personal', 'logo', 'link'));
    }

    public function kalenderakademikadmin()
    {
        $data = kalenderakademik::all();
        return view('kurikulum.kalenderakademik-admin', compact('data'));
    }
    public function tambahkalenderakademik()
    {
        return view('kurikulum.tambahkalenderakademik');
    }

    public function kalenderakademikproses9(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'foto' => 'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
        ], [
            'foto.required' => 'Harus diisi',
            'foto.mimes' => 'Harus jpg,jpeg,bmp,gif,png,webp',
        ]);
        $data = kalenderakademik::create([
            'foto' => $request->foto,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('kalenderakademikadmin')->with('toast_success', ' Data Berhasil di Tambahkan!');
    }

    public function editkalenderakademik($id)
    {

        $data = kalenderakademik::findOrFail($id);
        return view('kurikulum..editkalenderakademik', compact('data'));
    }

    public function editproses9(Request $request, $id)
    {
        $this->validate($request, [
            'foto' => 'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
        ], [
            'foto.mimes' => 'Harus jpg,jpeg,bmp,gif,png,webp',
        ]);
        $data = kalenderakademik::find($id);
        $data->update([]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('kalenderakademikadmin')->with('toast_success', ' Data Berhasil di Ubah!');
    }

    public function delete($id)
    {
        $data = kalenderakademik::find($id);
        $data->delete();
        return redirect('kalenderakademikadmin')->with('toast_error', ' Data Berhasil di Hapus!');
    }













    public function jadwalkegiatan()
    {
        $f = Muhinews::all();
        $kh = Jurusan::all();
        $d = jadwalkegiatan::all();
        $ft = Footeer::all();
        $personal = Personaljurusan::all();
        $logo = footeer::all();
        $link = footeerdua::all();
        return view('kurikulum.jadwalkegiatan.jadwalkegiatan', compact('f', 'kh', 'ft', 'personal', 'logo', 'link','d'));
    }

    public function jadwalkegiatanadmin()
    {
        $data = jadwalkegiatan::all();
        return view('kurikulum.jadwalkegiatan.jadwalkegiatanadmin', compact('data'));
    }
    public function tambahjadwalkegiatan()
    {
        return view('kurikulum.jadwalkegiatan.tambahjadwalkegiatan');
    }

    public function jadwalkegiatanproses(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [

        ], [
            'namakegiatan.required' => 'Harus diisi',
            'waktu.required' => 'Harus diisi',
            'tempat.required' => 'Harus diisi'
        ]);
        $data = jadwalkegiatan::create([
            'namakegiatan' => $request->namakegiatan,
            'waktu' => $request->waktu,
            'tempat' => $request->tempat,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('jadwalkegiatanadmin')->with('toast_success', ' Data Berhasil di Tambahkan!');
    }

    public function editjadwalkegiatan($id)
    {

        $data = jadwalkegiatan::findOrFail($id);
        return view('kurikulum.jadwalkegiatan..editjadwalkegiatan', compact('data'));
    }

    public function editproses(Request $request, $id)
    {
        $this->validate($request, [

        ], [
            'namakegiatan.required' => 'Harus diisi',
            'waktu.required' => 'Harus diisi',
            'tempat.required' => 'Harus diisi',
        ]);
        $data = jadwalkegiatan::find($id);
        $data->update([]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('jadwalkegiatanadmin')->with('toast_success', ' Data Berhasil di Ubah!');
    }

    public function deletejadwalkegiatan($id)
    {
        $data = kalenderakademik::find($id);
        $data->delete();
        return redirect('kalenderakademikadmin')->with('toast_error', ' Data Berhasil di Hapus!');
    }



    public function kurikulumadmin()
    {
        $data = Kurikulum::all();
        $kh = Jurusan::all();
        $personal = Personaljurusan::all();
        return view('kurikulum.k.kurikulum-admin', compact('data', 'kh', 'personal'));
    }
    public function tambahkurikulum()
    {
        return view('kurikulum.k.tambah-kurikulum');
    }
    public function kurikulumproses(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'judul' => 'required',
            'deskripsi_k' => 'required',

            'foto1' => 'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
            'penjelasan1' => 'required',

            'foto2' => 'required',
            'penjelasan2' => 'required',

            'foto3' => 'required',
            'penjelasan3' => 'required',

            'foto4' => 'required',
            'penjelasan4' => 'required',
        ], [
            'judul.required' => 'Harus diisi',
            'deskripsi_k.required' => 'Harus diisi',

            'foto1.required' => 'Harus diisi',
            'foto1.mimes' => 'Harus jpg,jpeg,bmp,gif,png,webp',
            'penjelasan1.required' => 'required',

            'foto2.required' => 'Haruds diisi',
            'penjelasan2.required' => 'Haruds diisi',

            'foto3.required' => 'Haruds diisi',
            'penjelasan3.required' => 'Haruds diisi',

            'foto4.required' => 'Haruds diisi',
            'penjelasan4.required' => 'Haruds diisi',

        ]);
        $data = Kurikulum::create([
            'judul' => $request->judul,
            'deskripsi_k' => $request->deskripsi_k,
            'foto1' => $request->foto1,
            'penjelasan1' => $request->penjelasan1,

            'foto2' => $request->foto2,
            'penjelasan2' => $request->penjelasan2,

            'foto3' => $request->foto3,
            'penjelasan3' => $request->penjelasan3,

            'foto4' => $request->foto4,
            'penjelasan4' => $request->penjelasan4,

        ]);
        if ($request->hasFile('foto1')) {
            $request->file('foto1')->move('fotomahasiswa/', $request->file('foto1')->getClientOriginalName());
            $data->foto1 = $request->file('foto1')->getClientOriginalName();
            $data->save();
        }

        if ($request->hasFile('foto2')) {
            $request->file('foto2')->move('fotomahasiswa/', $request->file('foto2')->getClientOriginalName());
            $data->foto2 = $request->file('foto2')->getClientOriginalName();
            $data->save();
        }

        if ($request->hasFile('foto3')) {
            $request->file('foto3')->move('fotomahasiswa/', $request->file('foto3')->getClientOriginalName());
            $data->foto3 = $request->file('foto3')->getClientOriginalName();
            $data->save();
        }

        if ($request->hasFile('foto4')) {
            $request->file('foto4')->move('fotomahasiswa/', $request->file('foto4')->getClientOriginalName());
            $data->foto4 = $request->file('foto4')->getClientOriginalName();
            $data->save();
        }



        return redirect()->route('kurikulumadmin')->with('toast_success', ' Data Berhasil di Tambahkan!');
    }




    public function kelsan()
    {
        $data = Suratkelulusan::all();
        return view('kurikulum.kelulusan.kelsan',compact('data'));
    }
    public function exportpdf()
    {
        $data = Suratkelulusan::all();
        view()->share('data', $data);

        $pdf = PDF::loadview('kurikulum.kelulusan.kelulusan-pdf');
        return $pdf->download('suratkelulusan.pdf');
    }
    public function exportexcel(){
        return Excel::download(new KelulusanExport('SuratKelulusan'), 'kelulusan.xlsx');
    }
    public function exportword(){
       $phpword = new PhpWord();
       $phpword->addTitleStyle(1, ['size' => 16,'bold' => true],['alignment' => 'center']);
       $section =  $phpword->addSection(['orientation' => 'landscape']);
       $section->addTitle("Surat Kelulusan");
       $section->addTextBreak();
       $table=$section->addTable(['borderSize' => 3]);
       $table->addRow();
       $table->addCell(1000)->addText("No");
       $table->addCell(11000)->addText("Nama Siswa");
       $table->addCell(5000)->addText("Nisn");
       $table->addCell(5000)->addText("Tanggal Lahir");
       $table->addCell(5000)->addText("Hasil");

       $data = Suratkelulusan::all();
       $no = 1;
       foreach($data as $d){
        // dd($d->jurusan);
        $table->addRow();
        $table->addCell()->addText($no);
        $table->addCell()->addText($d->nama_siswa);
        $table->addCell()->addText($d->nisn);
        $table->addCell()->addText($d->tanggal_lahir);
        $table->addCell()->addText($d->hasil);
        $no++;
       }


    //    $section->addText('awokwwkow');
       $writer = new Word2007($phpword);
       $filename = "SuratKelulusan.docx";
       header("Content-Type : application/msword");
       header("Content-Disposition : attachment; filename=" . $filename);
       header("Cache-Control: max-age=0");
       $writer->save("php://output");
    }

    public function adminkelulusan()
    {
        $data = Suratkelulusan::all();
        return view('kurikulum.kelulusan.adminkelulusan.adminkelulusan', compact('data'));
    }
    public function tambahkelulusan()
    {
        return view('kurikulum.kelulusan.adminkelulusan.tambahkelulusan');
    }

    public function tambahproseskelulusan(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'nama_siswa' => 'required',
            'nisn' => 'required',
            'tanggal_lahir' => 'required',
            'hasil' => 'required',
        ], [
            'nama_siswa.required' => 'Harus diisi',
            'nisn.required' => 'Harus diisi',
            'tanggal_lahir.required' => 'Harus diisi',
            'hasil.required' => 'Harus diisi',
        ]);
        $data = Suratkelulusan::create([
            'nama_siswa' => $request->nama_siswa,
            'nisn' => $request->nisn,
            'tanggal_lahir' => $request->tanggal_lahir,
            'hasil' => $request->hasil,
        ]);

        return redirect()->route('adminkelulusan')->with('toast_success', 'Data Berhasil Di Tambahkan!');
    }

    public function editkelulusan($id)
    {

        $data = Suratkelulusan::findOrFail($id);
        return view('kurikulum.kelulusan.adminkelulusan.editkelulusan', compact('data'));
    }

    public function editproseskelulusan(Request $request, $id)
    {
        $this->validate($request, [
            'nama_siswa' => 'required',
            'nisn' => 'required',
            'tanggal_lahir' => 'required',
            'hasil' => 'required',
        ], [
            'nama_siswa.required' => 'Harus diisi',
            'nisn.required' => 'Harus diisi',
            'tanggal_lahir.required' => 'Harus diisi',
            'hasil.required' => 'Harus diisi',
        ]);
        $data = Suratkelulusan::find($id);
        $data->update([
            'nama_siswa' => $request->nama_siswa,
            'nisn' => $request->nisn,
            'tanggal_lahir' => $request->tanggal_lahir,
            'hasil' => $request->hasil,
        ]);
        return redirect('adminkelulusan')->with('toast_success', ' Data Berhasil di Ubah!');
    }

    public function deletekelulusan($id)
    {
        $data = Suratkelulusan::find($id);
        $data->delete();
        return redirect('adminkelulusan')->with('toast_error', ' Data Berhasil di Hapus!');
    }
}












