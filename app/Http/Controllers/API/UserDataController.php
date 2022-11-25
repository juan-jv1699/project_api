<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserData as ModelUserData;
use App\Http\Requests\RequestDataUser;
use App\Http\Requests\RequestUpdateDataUser;


class UserDataController extends Controller
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
    public function store(RequestDataUser $request)
    {
        $data=ModelUserData::create($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>'data de usuario creada con exito'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json([
            'res'=>true,
            'user'=>$user->userData

        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestUpdateDataUser $request, ModelUserData $user)
    {
        $user->update($request->all());
        return response()->json([
            'res'=>true,
            'user'=>$user

        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //no se usa Destroy por foreign key --pendiente a revision 'On Delete Cascade'--
    }
}
