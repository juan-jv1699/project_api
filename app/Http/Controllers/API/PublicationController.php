<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PublicationPostRequest;
use App\Http\Requests\UpdatePublicationRequest as ReqUpdatePublicationRequest;
use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'res'=>true,
            'msg'=>'todas las publicaciones',
            'data'=>Publication::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicationPostRequest $request)
    {
        $publication = Publication::create($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>'publication generada con exito'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Publication $publication)
    {
        return response()->json([
            'res'=>true,
            'data'=>$publication
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReqUpdatePublicationRequest $request,Publication $publication)
    {
        $publication->update($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>'publicacion actualizada con exito',
            'data'=>$publication
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();
        return response()->json([
            'res'=>true,
            'msg'=>'publicacion eliminada con exito'
        ]);
    }
}
