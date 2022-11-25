<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Model
use App\Models\Role;

//Requests
use App\Http\Requests\SaveRoleRequest;
use App\Http\Requests\UpdateRoleRequest;


class RoleController extends Controller
{
   
    public function index()
    {
        return Role::all();
    }

    public function store(SaveRoleRequest $request)
    {
        Role::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => "Rol creado exitosamente!"
        ]);
    }

    public function show(Role $role)
    {
        return response()->json([
            'res' => true,
            'result' => $role
        ]);
    }

    public function update(UpdateRoleRequest $request, Role $id)
    {
        $id->update($request->all());
        return response()->json([
            'res' => true,
            'msg' => "Se actualizo el rol correctamente"
        ],200);
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return response()->json([
            'res' => true,
            'msg' => "Se elimino el rol correctamente"
        ],200);
    }
}
