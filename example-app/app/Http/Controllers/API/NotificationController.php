<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Notification;

use Illuminate\Http\Request;
use Illuminate\Support\Js;

class NotificationController extends Controller
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
            'data'=>Notification::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notification = Notification::create($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>'Notificacion generada con exito',
            'data'=>$notification
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notification)
    {
        return response()->json([
            'res'=>true,
            'data'=>$notification
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification $notification)
    {
        // not used 
    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
     $notification->delete();
     return response()->json([
        'res'=>true,
        'msg'=>'Notificacion eliminada con exito'
     ]);   
    }
}
