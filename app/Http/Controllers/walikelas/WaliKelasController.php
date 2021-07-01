<?php

namespace App\Http\Controllers\walikelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WaliKelasController extends Controller
{
    public function __construct()
    {
        $this->middleware('ceksesi');
    }

    public function index(){
        
    }
}
