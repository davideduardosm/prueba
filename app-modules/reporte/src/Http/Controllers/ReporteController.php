<?php

namespace Modules\Reporte\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ReporteController extends Controller
{
    public function index()
    {
        return view('reporte::index'); 
    }
}
