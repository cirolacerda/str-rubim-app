<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $quantidadeSocios = Socio::count();

        return view('dashboard', ['quantidadeSocios' => $quantidadeSocios]);

    }
}
