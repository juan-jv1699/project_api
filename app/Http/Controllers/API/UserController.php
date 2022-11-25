<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\UserCreateRequest as RequestsUserCreateRequest;
use App\Http\Requests\UpdateUserRequest as UpdateUserRequest;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allUsers()
    {
        return UserResource::collection(User::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RequestsUserCreateRequest $request)
    {
        return (new UserResource(User::create($request->all())))->additional(['msg'=>'Nuevo usuario guardado']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // return response()->json([
        //     'res'=>true,
        //     'user'=>$user
        // ],200);
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request,User $user)
    {
        $user->update($request->all());
        return (new UserResource($user))->additional(['msg'=>'Usuario actualizado correctamente'])
                ->response()
                ->setStatusCode(202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->userData()->delete();
        $user->delete();
        return (new UserResource($user))->additional(['msg'=>'Usuario eliminado correctamente']);
    }
}
