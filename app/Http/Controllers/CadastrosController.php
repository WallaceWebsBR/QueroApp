<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CadastrosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function cidades()
    {
        $count_users = DB::table("users")->count();
        return view('cadastro/cadastro_cidades', compact('count_users'));
    }
    public function lojas()
    {
        $count_users = DB::table("users")->count();
        return view('cadastro/cadastro_lojas', compact('count_users'));
    }
    public function categorias()
    {
        $count_users = DB::table("users")->count();
        return view('cadastro/cadastro_categorias', compact('count_users'));
    }
    public function produtos()
    {
        $count_users = DB::table("users")->count();
        return view('cadastro/cadastro_produtos', compact('count_users'));
    }
}
