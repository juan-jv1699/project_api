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

    public function show(TypePublication $typepublication)
    {
        return response()->json([
            'res' => true,
            'result' => $typepublication
        ]);
    }

    public function update(UpdateTypePublicationRequest $request, TypePublication $typepublication)
    {
        $typepublication->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => "Se actualizo la publicacion correctamente"
        ],200);
    }

    public function destroy(TypePublication $typepublication)
    {
        $typepublication->delete();
        return response()->json([
            'res' => true,
            'msg' => "Se elimino la publicacion correctamente"
        ],200);
    }
}
