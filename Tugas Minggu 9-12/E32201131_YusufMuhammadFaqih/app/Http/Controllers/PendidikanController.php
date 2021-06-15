<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use App\Models\Models\Pendidikan;
use App\Http\Controllers\Backend\ApiPendidikanController;


class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = Pendidikan::get();
        return view('backend.Pendidikan.index',compact('pendidikan'));
    }
    public function create()
    {
        $pendidikan = null;
        return view('backend.Pendidikan.create',compact('pendidikan'));
    }
    public function store(Request $request)
    {
        Pendidikan::create($request->all());

        return redirect()->route('pendidikan.index')
                        -> with('success','Data Pendidikan Baru Berhasil Disimpan');
    }
    public function edit(Pendidikan $pendidikan)
    {
        return view('backend.Pendidikan.create',compact('pendidikan'));
    }
    public function update(Request $request, Pendidikan $pendidikan)
    {
        $pendidikan->update($request->all());

        return redirect()->route('pendidikan.index')
                        -> with('success','Data Pendidikan Berhasil Diperbaharui');
    }
    public function destroy(Pendidikan $pendidikan)
    {
        $pendidikan->delete();

        return redirect()->route('pendidikan.index')
                        -> with('success','Data Pendidikan Berhasil Dihapus');
    }
}
