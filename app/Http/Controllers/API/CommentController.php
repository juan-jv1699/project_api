<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
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
    public function store(CommentRequest $request)
    {
        $comment = Comment::create($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>'comentario creado con exito',
            'data'=>$comment
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return response()->json([
            'res'=>true,
            'data'=>$comment
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommentRequest $request, Comment $comment)
    {
        $com = $comment->update($request->all());
        return response()->json([
            'res'=>true,
            'msg'=>'comentario actualizado con exito',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json([
            'res'=>true,
            'msg'=>'comentario eliminado con exito'
        ]);
    }

    public function all($id_publication)
    {
        $comments = Comment::where('publication_id',$id_publication)->get();
        // dd(sizeof($comments),$comments);
        if(sizeof($comments) != 0)
        {
            return response()->json([
                'res'=>true,
                'msg'=>'todos los comentarios de una publicacion',
                'data'=>$comments,
            ]);
        }else {
            return response()->json([
                'res'=>false,
                'msg'=>'no hay comentarios para esta publicacion',
                'data'=>$comments,
            ]);
        }
    }
}//final de la clase
