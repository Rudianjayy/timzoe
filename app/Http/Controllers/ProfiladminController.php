<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfiladminController extends Controller
{



    public function profiladmin()
    {
        $data = User::all();
        $fotoprofil = User::all();
        return view('Profil.Profiladmin', compact('data', 'fotoprofil'));
    }
    public function editprofiladmin(request $request)
    {
        $fotoprofil = User::all();
        $data = User::findOrFail(Auth::user()->id);
        return view('Profil.editprofiladmin', compact('data', 'fotoprofil'));
    }

    public function updateprofiladmin(request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->update([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'notelpon' => $request->notelpon,
            'foto' => 'noimg.png',
            'foto_bg' => 'header.jpg',
        ]);
        // dd($request);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotoprofil/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        if ($request->hasFile('foto_bg')) {
            $request->file('foto_bg')->move('fotoprofil/', $request->file('foto_bg')->getClientOriginalName());
            $data->foto_bg = $request->file('foto_bg')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('profiladmin')->with('success', 'Profil Berhasil Di Update!');
    }
    public function updatesosmed(request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->update([
            'fb' => $request->fb,
            'ig' => $request->ig,
            'twi' => $request->twi,
        ]);
        return redirect()->route('profiladmin')->with('success', 'Profil Berhasil Di Update!');
    }



    //editpassword


    public function editpassword()
    {
        return view('profil.editpassword');
    }

    public function updatepassword(request $request)
    {
        $request->validate([
            'password_lama' => 'required|min:6|max:100',
            'password' => 'required|min:6|max:100',
            'password_confirmation' => 'required',
        ], [
            'password_lama.required' => 'password lama harus diisi',
            'password_lama.min' => 'password lama harus diisi lebih dari 6',
            'password.required' => 'password baru harus diisi',
            'password.min' => 'password lama harus lebih dari 6',
            'password.confirmed.required' => 'password tidak sama',
            'password_confirmation.required' => 'password harus diisi',
        ]);
        $current_user = auth()->user();
        if (Hash::check($request->password_lama, $current_user->password)) {
            $current_user->update([
                'password' => bcrypt($request->password)
            ]);
            return redirect()->back()->with('success', 'password sukses diganti');
        } else {
            return redirect()->back()->with('error', 'password lama tidak bisa.');
        }
    }


    // public function crop(Request $request)
    // {
    //     $dest = 'user_image/';
    //     $file =  $request->file('_userAvatarFile');
    //     $new_image_name = 'UIMG' . date('YmdHis') . uniqid() . '.jpg';
    //     //uploadfile

    //     $move = $file->move(public_path($dest), $new_image_name);

    //     if (!$move) {
    //         return response()->json(['status' => 0, 'msg' => 'something went wrong']);
    //     } else {
    //         //delete old images
    //         $userInfo = User::where('id', '=', session('LoggedUser'))->first();
    //         $userPhoto = $userInfo->foto;
    //         if ($userPhoto != '') {
    //             unlink($dest . $userPhoto);
    //         }
    //         //update new pitcure in database
    //         User::where('id', session('LoggedUser'))->update(['foto' => $new_image_name]);
    //         return response()->json([
    //             'status' => 1, 'msg' => 'Your Profil Picture has been update success',
    //             'name' => $new_image_name
    //         ]);
    //     }
    // }

    function crop(Request $request){
        $path = '';
        $file = $request->file('foto_id')->store('', 'public');

        if( !$file ){
            return response()->json(['status'=>0, 'msg'=>'Something went wrong, upload new picture failed.']);
        }else{
            $fotoLama = User::find(Auth::user()->id)->getAttributes()['foto'];

            if ( $fotoLama != '') {
                if (\File::exists(public_path($path.$fotoLama))) {
                    File::delete(public_path($path.$fotoLama));
                    }
                }

                //Update foto
                $update = User::find(Auth::user()->id)->update(['foto'=>$file]);

                if ( !$file ) {
                    return response()->json(['status'=>0, 'msg'=>'Something went wrong, updating picture in db failed.']);
                } else{
                    return response()->json(['status'=>1, 'msg'=>'Your profile picture has been updated succesfully.']);
                }
            }
        }
    function cropbg(Request $request){
        $path = '/';
        $file = $request->file('foto_bg_id')->store('user_images', 'public');

        if( !$file ){
            return response()->json(['status'=>0, 'msg'=>'Something went wrong, upload new picture failed.']);
        }else{
            $fotoLama = User::find(Auth::user()->id)->getAttributes()['foto_bg'];

            if ( $fotoLama != '') {
                if (\File::exists(public_path($path.$fotoLama))) {
                    \File::delete(public_path($path.$fotoLama));
                    }
                }

                //Update foto
                $update = User::find(Auth::user()->id)->update(['foto_bg'=>$file]);

                if ( !$file ) {
                    return response()->json(['status'=>0, 'msg'=>'Something went wrong, updating picture in db failed.']);
                } else{
                    return response()->json(['status'=>1, 'msg'=>'Your profile picture has been updated succesfully.', 'name' => $file]);
                }
            }

        }
}
