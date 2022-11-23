<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Model
use App\Models\TypePublication;

//Requests
use App\Http\Requests\SaveTypePublicationRequest;
use App\Http\Requests\UpdateTypePublicationRequest;

class TypesPublicationController extends Controller
{
    public function index()
    {
        return TypePublication::all();
    }

    public function store(SaveTypePublicationRequest $request)
    {
        TypePublication::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => "Publicacion creado exitosamente!"
        ]);
    }

    public function show(TypePublication $publication)
    {
        return response()->json([
            'res' => true,
            'result' => $publication
        ]);
    }

    public function update(UpdateTypePublicationRequest $request, TypePublication $id)
    {
        $id->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => "Se actualizo la publicacion correctamente"
        ],200);
    }

    public function destroy(TypePublication $publication)
    {
        $publication->delete();
        return response()->json([
            'res' => true,
            'msg' => "Se elimino la publicacion correctamente"
        ],200);
    }
}
