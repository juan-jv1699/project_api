<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Model
use App\Models\Like;

//Request
use App\Http\Requests\SaveLikeRequest;
use App\Http\Requests\UpdateLikeRequest;


class LikeController extends Controller
{
    
    public function index()
    {
        return Like::all();
    }

    public function store(SaveLikeRequest $request)
    {
        $like = Like::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => "Gusto creado y  publicacion guardada exitosamente!",
            'data' => $like
        ],200);
    }

    public function show(Like $like)
    {
        return response()->json([
            'res' => true,
            'LikeResult' => $like
        ],200);
    }

    public function update(UpdateLikeRequest $request, Like $like)
    {
        $like->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => "Se actualizo la publicacion guardada"
        ],200);
    }

    public function destroy(Like $like)
    {
        $like->delete();
        return response()->json([
            'res' => true,
            'msg' => "Se elimino la publicacion guardada correctamente"
        ],200);
    }
}
