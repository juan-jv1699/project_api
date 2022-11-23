<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Model
use App\Models\TypeNotification;

//Requests
use App\Http\Requests\SaveTypeNotificationRequest as Save;
use App\Http\Requests\UpdateTypeNotiRequest as Update;



class TypeNotificationController extends Controller
{
    
    public function index()
    {
        return TypeNotification::all();
    }

   
    public function store(Save $request)
    {
        TypeNotification::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => "Role creado exitosamente!"
        ],200);
    }

    
    public function show(TypeNotification $data)
    {
        return response()->json([
            'res' => true,
            'NotificationResult' => $data
        ],200);
    }

    
    public function update(Update $request,TypeNotification  $id)
    {
        $id->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => "Se actualizo el tipo de notificacion"
        ],200);
    }

    public function destroy(TypeNotification $notification)
    {
        $notification->delete();
        return response()->json([
            'res' => true,
            'msg' => "Se elimino el tipo de notificacion correctamente"
        ],200);
    }
}
