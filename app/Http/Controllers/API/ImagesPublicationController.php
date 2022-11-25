<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ImagesPublication;
use App\Http\Requests\ImagesPublicationPostRequest;
use App\Http\Requests\ImagesPublicationUpdateRequest;


class ImagesPublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImagesPublicationPostRequest $request)
    {
        $registro = ImagesPublication::create($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>'imagenes resgistradas con exito',
            'data'=>$registro
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ImagesPublication $ImagesPublication)
    {
        return response()->json([
            'res'=>true,
            'data'=>$ImagesPublication
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImagesPublicationUpdateRequest $request, ImagesPublication $ImagesPublication)
    {
        $ImagesPublication->update($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>'publicacion actualizada con exito',
            'data'=>$ImagesPublication
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImagesPublication $image)
    {
        $image->delete();
        return response()->json([
            'res'=>true,
            'msg'=>'imagenes eliminadas con exito'
        ]);
    }
}
