<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;
use App\Models\Models\Pendidikan;


class PendidikanController extends Controller
{
    public function index()
    {
        return view('backend.Pendidikan.index');
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
}
