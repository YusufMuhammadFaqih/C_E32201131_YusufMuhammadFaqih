<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request,
    App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App\Models\Models\Pendidikan;

class ApiPendidikanController extends Controller
{
    public function getPen($id)
    {
        $pendidikan = Pendidikan::find($id);

        return Response::json($pendidikan, 200);
    }

    public function creatPen(Request $request)
    {
        Pendidikan::create($request->all());

        return response ()->json([
            'status' => 'ok',
            'message' => 'Pendidikan berhasil ditambahkan!'
        ], 201);
    }
};
