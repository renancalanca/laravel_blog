<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentarios = Comentario::with('post')->paginate(10);

        return view('admin.comentarios.index', compact('comentarios'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {
        if($comentario->user_id != auth()->user()->id && auth()->user()->is_admin == false) {
            flash()->overlay("Você não tem permissão para deletar comentários de outras pessoas.");

            return back();
        }

        $comentario->delete();
        flash()->overlay('Cometário deletado com sucesso!');
        
        return back();
    }
}
