<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Producto;

/**
 *
 */
class UserController extends Controller
{
  public function index()
  {
    $usuario = Auth::user();
    $productos = Producto::where('user_id', '=' , $usuario->id)->get();
    dd($usuario);
    return view('verperfilusuario', compact('usuario', 'productos'));
  }
}
