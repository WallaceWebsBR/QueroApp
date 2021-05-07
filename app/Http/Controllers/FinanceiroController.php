<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanceiroController extends Controller
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
        return view('financeiro/financeiro_cidades', compact('count_users'));
    }
    public function lojas()
    {
        $count_users = DB::table("users")->count();
        return view('financeiro/financeiro_lojas', compact('count_users'));
    }
}
