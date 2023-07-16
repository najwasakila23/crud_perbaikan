<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
USe App\Models\Create;

class AdminController extends Controller
{
    public function indexData()
    {
        $input = Create::get();
        return view('dashboard.index')->with('input',$input);
    }

    public function storedata(Request $request)
    {
        $input = $request->validate([
            'name' => ['required'],
            'rayon' => ['required'],
            'nis' => ['required'],
            'judul' => ['required'],
            'tenggat' => ['required']
        ]);

        Create::create($input);

        return redirect('/table')->with('success', 'Registrasi berhasil, silahkan login!');
    }


    public function indexTable(){

        $input = Create::get();
      
        return view('dashboard.table')->with('input',$input);
    }

    public function data()
    {
        $input = Create::get();

        return view('dashboard.user', compact('data'));
    }
    public function indexEditData($id)
    {
        $input = Create::where('id','=', $id)->first();
        return view('dashboard.edit-user', compact('input'));
    }
    public function updateData(Request $request, $id)
    {
        Create::where('input','=', $id)->update([
            'name' => $request->name,
            'rayon' => $request->rayon,
            'nis' => $request->nis,
            'judul' => $request->judul,
            'tenggat' => $request->tenggat

        ]);
        
        return redirect(Route('/table'));
    }


    public function destroy($id)
    {
        Create::where('id','=', $id)->delete();
        return redirect('/table');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerate();
        return redirect('/login');
    }
}